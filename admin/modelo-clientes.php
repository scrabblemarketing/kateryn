<?php 
include_once('inc/funciones/funciones.php');



if($_POST['registro'] === 'nuevo'){
    

    $nombres = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $empresa = $_POST['empresa'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    $direccion = $_POST['direccion'];
    

   //  Enviamos estos datos a la base de datos
   try{
        $stmt = $conn->prepare("INSERT INTO `clientes` (`nombres_cliente`, `apellidos_cliente`, `empresa`, `email_cliente`, `telefono`, `direccion`, `mensaje`, `editado`) VALUES (?,?,?,?,?,?,?, NOW())");
        $stmt->bind_param('sssssss', $nombres, $apellidos, $empresa, $email, $telefono, $direccion, $mensaje);
        $stmt->execute();
        $id_insertado = $stmt->insert_id;
        if($stmt->affected_rows){
            $respuesta = array(
                'respuesta'=>'correcto',
                'mensaje'=>'Cliente agregado',
                'id'=> $id_insertado
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

    $nombres = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $empresa = $_POST['empresa'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    $direccion = $_POST['direccion'];
    
    try{
        $stmt = $conn->prepare("UPDATE clientes SET nombres_cliente = ?, apellidos_cliente = ?, empresa = ?, email_cliente = ?, telefono = ?, direccion = ?, mensaje = ?, editado = NOW() WHERE id_admin = ?");
        $stmt->bind_param('sssssss', $nombres, $apellidos, $empresa, $email, $telefono, $direccion, $mensaje);
        
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
        $stmt = $conn->prepare("DELETE FROM clientes WHERE id_cliente = ?");
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