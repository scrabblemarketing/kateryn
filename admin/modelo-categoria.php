<?php
include 'inc/funciones/funciones.php';

if($_POST['registro'] == 'nuevo'){
    $categoria = $_POST['categoria'];


    try{
        $stmt = $conn->prepare("INSERT INTO categorias (categoria, editado) VALUES (?,NOW())");
        $stmt->bind_param('s',$categoria);
        $stmt->execute();
        
        if($stmt->affected_rows){
            $respuesta = array(
                'respuesta'=>'correcto',
                'id_cat' => $stmt->insert_id,
                'titulo'=>$categoria
            );
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

if($_POST['registro'] == 'eliminar'){
    $id=$_POST['id'];
    die(json_encode($_POST));

    try{
        $stmt = $conn->prepare("DELETE FROM categorias WHERE id_categoria = ?");
        $stmt->bind_param('i',$id);
        $stmt->execute();
        
        if($stmt->affected_rows){
            $respuesta = array(
                'respuesta'=>'correcto',
                'id_cat' => $id
            );
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