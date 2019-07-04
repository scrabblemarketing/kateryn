<?php
include('inc/funciones/funciones.php');

$usuario = $_POST['usuario-login'];
$password = $_POST['password-login'];

if(isset($_POST['login-admin'])){
    try{
        $stmt = $conn->prepare("SELECT * FROM `admin` WHERE usuario_admin = ?;");
        $stmt->bind_param('s', $usuario);
        $stmt->execute();
        $stmt->bind_result($id_admin, $nombre_admin, $usuario_admin, $password_admin, $editado);
       

        if($stmt->affected_rows){
            
            $existe = $stmt->fetch();
            if($existe){
                if(password_verify($password, $password_admin)){
                    session_start();
                    $_SESSION['usuario'] = $usuario_admin;
                    $_SESSION['nombre'] = $nombre_admin;
                    $_SESSION['id'] = $id_admin;
                    $respuesta = array(
                        'respuesta'=>'correcto',
                        'tipo'=>'login',
                        'nombre'=> $nombre_admin
                    );
                }else{
                    $respuesta = array(
                        'respuesta'=>'error'
                    );
                }
            }
            $stmt->close();
            $conn->close();
        }else{
            $respuesta = array(
                'respuesta'=>'error'
            );
        }
    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }

    die(json_encode($respuesta));
}






if(isset($_POST['registro'])){
    $nombre = $_POST['nombre-login'];

    $opciones = array(
        'cost'=> 12
    );
    // die(json_encode($_POST));
    $password_hashed = password_hash($password, PASSWORD_BCRYPT, $opciones);

    try{
        $stmt = $conn->prepare("INSERT INTO `admin` (nombre_admin, usuario_admin, pass_admin, editado) VALUES (?,?,?,NOW())");
        $stmt->bind_param('sss', $nombre, $usuario, $password_hashed);
        $stmt->execute();
        $id_registro = $stmt->insert_id;
        if($id_registro>0){
            $respuesta = array(
                'respuesta'=>'correcto',
                'id_registro'=>$id_registro,
                'tipo'=>'registro'
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
