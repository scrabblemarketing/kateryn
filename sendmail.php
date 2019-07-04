<?php

if($_POST['envio'] == 'contacto'){
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
}elseif($_POST['envio'] == 'tratamiento'){
    $nombre = $_POST['nombre'];
    $apellido = '';
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $asunto ='Contacto de un tratamiento';
}


$header = 'From: ' . $email . "\r\n";
$header .= 'X-Mailer: PHP /'. phpversion() . '\r\n';
$header .= 'Mime-Version: 1.0 \r\n';
$header .= 'Content-Type: text/plain';

$mensajeCorreo = "Mensaje enviado por: " . $nombre . ' ' . $apellido ."\r\n";
$mensajeCorreo .= "Email: " . $email ."\r\n";
$mensajeCorreo .= "Telefono: " . $telefono ."\r\n";
$mensajeCorreo .= "Mensaje: " . $mensaje . "\r\n";
$para = "info@dermalaserkpw.com";
mail($para,$asunto, utf8_decode($mensajeCorreo), $header);

die(json_encode(array(
    'ok'=>true,
    'mensaje' => 'El mensaje fue enviado',
    'datos' => array(
        'nombre' => $nombre,
        'email' => $email,
        'mensaje' => $mensaje
    )
    )));