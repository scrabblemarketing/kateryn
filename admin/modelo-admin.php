<?php
include_once('inc/funciones/funciones.php');

if($_POST['registro'] === 'nuevo'){
    $nombre = $_POST['nombre-login'];
    $password = $_POST['password-login'];
    $usuario = $_POST['usuario-login'];
    $opciones = array(
        'cost'=> 12
    );

    $password_hashed = password_hash($password, PASSWORD_BCRYPT, $opciones);

    try{
        $stmt = $conn->prepare("INSERT INTO admin (nombre, usuario, pass_admin, editado) VALUES (?,?,?,NOW())");
        $stmt->bind_param('sss', $nombre, $usuario, $password_hashed);
        $stmt->execute();
        $id_registro = $stmt->insert_id;
        if($id_registro>0){
            $respuesta = array(
                'respuesta'=>'correcto',
                'id_registro'=>$id_registro,
                'mensaje'=>'Administrador creado correctamente'
            );
        }else{
            $respuesta = array(
                'respuesta'=>'error'
            );
        }
        $stmt->close();
        $conn->close();
    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }
    die(json_encode($respuesta));
}


//Actualizar

if($_POST['registro'] === 'actualizar'){

    $nombre = $_POST['nombre-admin'];
    $password = $_POST['password-admin'];
    $usuario = $_POST['usuario-admin'];
    $apellido = $_POST['apellido-admin'];
    $id = $_POST['id'];
    
    try{
        if(empty($_POST['password'])){
            $stmt = $conn->prepare("UPDATE registro_admin SET nombre = ?, apellido = ?, usuario = ?, editado = NOW() WHERE id_admin = ?");
            $stmt->bind_param('sssi', $nombre, $apellido, $usuario, $id);
        }else{
            $opciones = array(
                'cost'=> 12
            );
            
            $password_hashed = password_hash($password, PASSWORD_BCRYPT, $opciones);

            $stmt = $conn->prepare("UPDATE `registro_admin` SET `nombre` = ?, `apellido` = ?, `usuario` = ?, `password` = ?, `editado` = NOW() WHERE id_admin = $id");
            $stmt->bind_param('ssssi', $nombre, $apellido, $usuario, $password_hashed, $id);
        }
        
        $stmt->execute();
        if($stmt->affected_rows){
            $respuesta = array(
                'respuesta'=>'correcto',
                'mensaje'=>'Admin actualizado correctamente'
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

    $id_registro = $_POST['id'];
    try{
        $stmt = $conn->prepare("DELETE FROM registro_admin WHERE id_admin= ?");
        $stmt->bind_param("i", $id_registro);
        $stmt->execute();
       
        if($stmt->affected_rows){
            $respuesta = array(
                'respuesta'=>'correcto',
                'id_eliminado'=>$id_registro
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