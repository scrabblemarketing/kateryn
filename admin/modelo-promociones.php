<?php 
include 'inc/funciones/funciones.php';

if($_POST['registro'] == "nuevo"){

    $id_trt = $_POST['id_tratamiento'];
    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];

    //Si no se envia algun titulo se tomara el del tratamiento
    if($titulo == ''){
        $sql = "SELECT nombre_tratamiento FROM tratamientos WHERE id_tratamiento = $id_trt";
        $respuesta = $conn->query($sql);

        $sl = $respuesta->fetch_assoc();
        $titulo = $sl['nombre_tratamiento'];

    }





    $directorio = "../img/tratamientos/";

    if(!is_dir($directorio)){
        mkdir($directorio, 0775, true);

    }

    if($_FILES['imagen_promo']['name'] !== ''){
        if(move_uploaded_file($_FILES['imagen_promo']['tmp_name'], $directorio . $_FILES['imagen_promo']['name'])){
            $url_promocion= $_FILES['imagen_promo']['name'];
        }else{
            $respuesta = array(
                'respuesta'=>error_get_last()
            );
        }
    }else{
        $sql = "SELECT url_imagen_secundario FROM tratamientos WHERE id_tratamiento = $id_trt";
        $respuesta = $conn->query($sql);
        $sl = $respuesta->fetch_assoc();
        $url_promocion = $sl['url_imagen_secundario'];
    }

    try{
        $stmt=$conn->prepare("INSERT INTO promociones (titulo_promo, id_tratamiento, precio, imagen_promo, editado) VALUES (?,?,?,?, NOW())");
        $stmt->bind_param("siss", $titulo, $id_trt, $precio, $url_promocion);
        $stmt->execute();
        if($stmt->affected_rows > 0){
            $respuesta = array(
                'respuesta'=>'correcto',
                'mensaje'=>'Promoción creada y activada'
            );
        }

        $stmt->close();
        $conn->close();
    }catch(Exception $e){
        $respuesta = array(
            'respuesta'=>'error',
            'mensaje'=>$e->getMessage()
        );
    }

    die(json_encode($respuesta));


}

if($_POST['registro'] == "eliminar"){

    $id = $_POST['id'];


    try{
        $stmt=$conn->prepare("DELETE FROM promociones WHERE id_promo = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        if($stmt->affected_rows > 0){
            $respuesta = array(
                'respuesta'=>'correcto',
                'mensaje'=>'Promoción creada y activada'
            );
        }

        $stmt->close();
        $conn->close();
    }catch(Exception $e){
        $respuesta = array(
            'respuesta'=>'error',
            'mensaje'=>$e->getMessage()
        );
    }

    die(json_encode($respuesta));







}

