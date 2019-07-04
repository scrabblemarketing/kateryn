<?php
include_once('inc/funciones/funciones.php');
function arregloURL($arreglo){
    $json = array();
    foreach ($arreglo as $key) {
        if($key !== ''){
            $json[] = $key;
        }
    }
    return json_encode($json);
}

if($_POST['registro'] === 'nuevo'){

    $nombre = $_POST['nombre_tratamiento'];
    $contenido = $_POST['contenido'];
    $categoria = (int) $_POST['categoria'];
/*
    $respuesta = array(
        'post'=>$_POST,
        'archivos'=>$_FILES
    );
    die(json_encode($respuesta));
   */ 

    $directorio = '../img/tratamientos/';//ruta de almacenamiento
    $directorio_casos = '../img/casos/';

    // Principal
    if(!is_dir($directorio)){
        mkdir($directorio, 0775, true);
    }

    if(move_uploaded_file($_FILES['archivo_producto']['tmp_name'], $directorio . $_FILES['archivo_producto']['name'])){
        $url_principal= $_FILES['archivo_producto']['name'];
    }else{
        $respuesta = array(
            'respuesta'=>error_get_last()
        );
    }
    //Muestra
    if(move_uploaded_file($_FILES['muestra']['tmp_name'], $directorio . $_FILES['muestra']['name'])){
        $url_muestra = $_FILES['muestra']['name'];
    }else{
        $respuesta = array(
            'respuesta'=>error_get_last()
        );
    }


    //Casos
    if(!is_dir($directorio_casos)){
        mkdir($directorio_casos, 0775, true);
    }

    if(move_uploaded_file($_FILES['caso']['tmp_name'], $directorio_casos . $_FILES['caso']['name'])){
        $caso_url = $_FILES['caso']['name'];
    }else{
        $respuesta = array(
            'respuesta'=>error_get_last()
        );
    }
     


    // die(json_encode($_POST));
    
    try{
        if($_FILES['archivo_producto']['size'] > 0 && $_FILES['caso']['size'] >0 && $_FILES['muestra']['size'] > 0){

            #con todo
           
            $stmt = $conn->prepare("INSERT INTO tratamientos (nombre_tratamiento, contenido,url_imagen_principal, url_imagen_secundario, url_caso, editado, categoria) VALUES (?,?,?,?,?,NOW(),?)");
            $stmt->bind_param('sssssi', $nombre, $contenido, $url_principal, $url_muestra,$caso_url, $categoria);

        }else if($_FILES['archivo_producto']['size'] > 0 && $_FILES['muestra']['size'] > 0){

            #con imagen principal y muestra

            $stmt = $conn->prepare("INSERT INTO tratamientos (nombre_tratamiento, contenido,url_imagen_principal, url_imagen_secundario, editado, categoria) VALUES (?,?,?,?,NOW(),?)");
            $stmt->bind_param('ssssi', $nombre, $contenido, $url_principal, $url_muestra, $categoria);

        }else if($_FILES['muestra']['size'] > 0 && $_FILES['caso']['size'] > 0){
            
            #con muestra y caso

            $stmt = $conn->prepare("INSERT INTO tratamientos (nombre_tratamiento, contenido, url_imagen_secundario, url_caso, editado, categoria) VALUES (?,?,?,?,NOW(),?)");
            $stmt->bind_param('ssssi', $nombre, $contenido, $url_muestra,$caso_url, $categoria);

        }else if($_FILES['archivo_producto']['size'] > 0 && $_FILES['caso']['size'] > 0){
            
            #con principal y caso

            $stmt = $conn->prepare("INSERT INTO tratamientos (nombre_tratamiento, contenido,url_imagen_principal, url_caso, editado, categoria) VALUES (?,?,?,?,NOW(),?)");
            $stmt->bind_param('ssssi', $nombre, $contenido, $url_principal,$caso_url, $categoria);

        }else if($_FILES['archivo_producto']['size'] > 0){

            #con imagen principal

            $stmt = $conn->prepare("INSERT INTO tratamientos (nombre_tratamiento, contenido,url_imagen_principal, editado, categoria) VALUES (?,?,?,NOW(),?)");
            $stmt->bind_param('sssi', $nombre, $contenido, $url_principal, $categoria);

        }else if($_FILES['muestra']['size'] > 0){

            #con muestra

            $stmt = $conn->prepare("INSERT INTO tratamientos (nombre_tratamiento, contenido, url_imagen_secundario, editado, categoria) VALUES (?,?,?,NOW(),?)");
            $stmt->bind_param('sssi', $nombre, $contenido, $url_muestra, $categoria);

        }else if($caso_url > 0){

            #con caso

            $stmt = $conn->prepare("INSERT INTO tratamientos (nombre_tratamiento, contenido, url_caso, editado, categoria) VALUES (?,?,?,NOW(),?)");
            $stmt->bind_param('sssi', $nombre, $contenido, $caso_url, $categoria);

        }else{

            $stmt = $conn->prepare("INSERT INTO tratamientos (nombre_tratamiento, contenido, editado, categoria) VALUES (?,?,NOW(),?)");
            $stmt->bind_param('ssi', $nombre, $contenido, $categoria);

        }
        
        $stmt->execute();
        // die(json_encode($stmt->affected_rows ));
        if($stmt->affected_rows > 0){
            $respuesta = array(
                'respuesta'=>'correcto',
                'mensaje'=>'Tratamiento agregado correctamente'
            );
        }else{
            $respuesta = array(
                'respuesta'=> 'error'
            );
        }
        $stmt->close();
        $conn->close();
    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }

    die(json_encode($respuesta));


}


//ACTUALIZAR

if($_POST['registro'] === 'actualizar'){

    $nombre = $_POST['nombre_producto'];
    $contenido = $_POST['contenido'];
   $id = $_POST['id'];

    
   $directorio = '../img/tratamientos/';//ruta de almacenamiento
   $directorio_casos = '../img/casos/';
/*
   $respuesta = array(
    'post'=>$_POST,
    'archivos'=>$_FILES
);
die(json_encode($respuesta));
*/
   // Principal
   if(!is_dir($directorio)){
       mkdir($directorio, 0775, true);
   }

   if(move_uploaded_file($_FILES['archivo_producto']['tmp_name'], $directorio . $_FILES['archivo_producto']['name'])){
       $url_principal= $_FILES['archivo_producto']['name'];
   }else{
       $respuesta = array(
           'respuesta'=>error_get_last()
       );
   }
   //Muestra
   if(move_uploaded_file($_FILES['muestra']['tmp_name'], $directorio . $_FILES['muestra']['name'])){
       $url_muestra = $_FILES['muestra']['name'];
   }else{
       $respuesta = array(
           'respuesta'=>error_get_last()
       );
   }


   //Casos
   if(!is_dir($directorio_casos)){
       mkdir($directorio_casos, 0775, true);
   }
  
   
   
       
        if(move_uploaded_file($_FILES['caso']['tmp_name'], $directorio_casos . $_FILES['caso']['name'])){
            $caso_url = $_FILES['caso']['name'];
        }else{
            $respuesta = array(
                'respuesta'=>error_get_last()
            );
        }
       
    


    $categoria = (int)$_POST['categoria'];
    
    try{
        if($_FILES['archivo_producto']['size'] > 0 && $_FILES['caso']['size'] >0 && $_FILES['muestra']['size'] > 0){

            #con todo
            $stmt = $conn->prepare("UPDATE `tratamientos` SET `nombre_tratamiento` = ?, `contenido` = ?,`url_imagen_principal` = ?, `url_imagen_secundario` = ?, `url_caso` = ?, `editado` = NOW(), `categoria`=? WHERE id_tratamiento = ?");
            $stmt->bind_param('sssssii', $nombre, $contenido, $url_principal, $url_muestra,$caso_url, $categoria, $id);

        }else if($_FILES['archivo_producto']['size'] > 0 && $_FILES['muestra']['size'] > 0){

            #con imagen principal y muestra

            $stmt = $conn->prepare("UPDATE `tratamientos` SET `nombre_tratamiento` = ?, `contenido` = ?,`url_imagen_principal` = ?, `url_imagen_secundario` = ?, `editado` = NOW(), `categoria`=? WHERE id_tratamiento = ?");
            
            $stmt->bind_param('ssssii', $nombre, $contenido, $url_principal, $url_muestra, $categoria, $id);

        }else if($_FILES['muestra']['size'] > 0 && $_FILES['caso']['size'] > 0){
            
            #con muestra y caso

            $stmt = $conn->prepare("UPDATE `tratamientos` SET `nombre_tratamiento` = ?, `contenido` = ?, `url_imagen_secundario` = ?, `url_caso` = ?, `editado` = NOW(), `categoria`=? WHERE id_tratamiento = ?");
            
            $stmt->bind_param('ssssii', $nombre, $contenido, $url_muestra,$caso_url, $categoria, $id);

        }else if($_FILES['archivo_producto']['size'] > 0 && $_FILES['caso']['size'] > 0){
            
            #con principal y caso

            $stmt = $conn->prepare("UPDATE `tratamientos` SET `nombre_tratamiento` = ?, `contenido` = ?,`url_imagen_principal` = ?, `url_caso` = ?, `editado` = NOW(), `categoria`=? WHERE id_tratamiento = ?");
            
            $stmt->bind_param('ssssii', $nombre, $contenido, $url_principal,$caso_url, $categoria, $id);

        }else if($_FILES['archivo_producto']['size'] > 0){

            #con imagen principal

            $stmt = $conn->prepare("UPDATE `tratamientos` SET `nombre_tratamiento` = ?, `contenido` = ?,`url_imagen_principal` = ?, `editado` = NOW(), `categoria`=? WHERE id_tratamiento = ?");
            
            $stmt->bind_param('sssii', $nombre, $contenido, $url_principal, $categoria, $id);

        }else if($_FILES['muestra']['size'] > 0){

            #con muestra

            $stmt = $conn->prepare("UPDATE `tratamientos` SET `nombre_tratamiento` = ?, `contenido` = ?, `url_imagen_secundario` = ?, `editado` = NOW(), `categoria`=? WHERE id_tratamiento = ?");
            
            $stmt->bind_param('sssii', $nombre, $contenido, $url_muestra, $categoria, $id);

        }else if($_FILES['caso']['size'] > 0){

            #con caso

            $stmt = $conn->prepare("UPDATE `tratamientos` SET `nombre_tratamiento` = ?, `contenido` = ?,`url_caso` = ?, `editado` = NOW(), `categoria`=? WHERE id_tratamiento = ?");
            
            $stmt->bind_param('sssii', $nombre, $contenido, $caso_url, $categoria, $id);

        }else{

            $stmt = $conn->prepare("UPDATE `tratamientos` SET `nombre_tratamiento` = ?, `contenido` = ?, `editado` = NOW(), `categoria`=? WHERE id_tratamiento = ?");
            
            $stmt->bind_param('ssii', $nombre, $contenido, $categoria, $id);

        }
        
        // die(json_encode($stmt->affected_rows));
        $stmt->execute();
        if($stmt->affected_rows){
            $respuesta = array(
                'respuesta'=>'correcto',
                'mensaje'=>'Producto actualizado correctamente'
            );
        }else{
            $respuesta = array(
                'respuesta'=> 'error'
            );
        }
        $stmt->close();
        $conn->close();
    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }

    die(json_encode($respuesta));


}

if($_POST['registro'] === 'eliminar'){

    $id = $_POST['id'];
    
    try{
        $stmt = $conn->prepare("DELETE FROM tratamientos WHERE id_tratamiento= ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
       
        if($stmt->affected_rows){
            $respuesta = array(
                'respuesta'=>'correcto',
                'id_eliminado'=>$id
            );
        }else{
            $respuesta = array(
                'respuesta'=> 'error'
            );
        }
        $stmt->close();
        $conn->close();
    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }

    die(json_encode($respuesta));


}












