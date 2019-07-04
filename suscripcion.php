<?php

    $email = $_POST['correo'];
    
    try{
        require_once('includes/funciones/conexion.php');

        $stmt=$conn->prepare("INSERT INTO suscritos (email_suscrito, estado, editado) VALUYES (?,?,NOW())");
        $stmt->bind_param('$email',true);
        $stmt->execute();
        if($stmt->affected_rows > 0){
            $respuesta = array(
                'ok'=>true,
                'mensaje'=>'Te has suscrito correctamente'
            );
        }else{
            $respuesta = array(
                'ok'=>false,
                'mensaje'=>"No se agrego"
            );
        }

        $stmt->close();
        $conn->close();
    }catch(Exception $e){
        $respuesta = array(
            'ok'=>false,
            'mensaje'=>"Error: ". $e->getMessage()
        );
    }

    $header = 'From: ' . $email . "\r\n";
$header .= 'X-Mailer: PHP /'. phpversion() . '\r\n';
$header .= 'Mime-Version: 1.0 \r\n';
$header .= 'Content-Type: text/plain';

$mensajeCorreo = "Tienes un nuevo suscriptor";
$para = "info@dermalaserkpw.com";
mail($para,$asunto, utf8_decode($mensajeCorreo), $header);


$headerSucriptor = 'From: info@dermalaserkpw.com' . "\r\n";
$headerSucriptor .= 'X-Mailer: PHP /'. phpversion() . '\r\n';
$headerSucriptor .= 'Mime-Version: 1.0 \r\n';
$headerSucriptor .= 'Content-Type: text/plain';

$mensajeSusc = "Gracias por suscribirte a nuestra lista de boletines. <br><br> Espera por nuestras promociones y ofertas en los próximos meses. <br><br> Feliz día.";
mail($email,"Te has suscrito a Dermaláser Katherin Pérez Willis", utf8_decode($mensajeSusc), $headerSucriptor);
die(json_encode($respuesta));