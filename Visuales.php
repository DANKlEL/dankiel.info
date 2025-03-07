<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/visuales.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    <title>Shot By DANKIEL</title>
    <script src="https://www.youtube.com/iframe_api"></script>
</head>
<body>
    <?php require 'header.php'; ?>

    <div id="videoContainer">
        <table id="centeredTable">
            <tr id="videoRow">
                <h3>Selecciona tú país</h3>
                <div class="pais">
                    <img src="img/paises/Mexico.png" alt="Mexico" id="logoPais">
                    <img src="img/paises/Usa.png" alt="USA" id="logoPais">
                    <img src="img/paises/Argentina.png" alt="Argentina" id="logoPais">
                    <img src="img/paises/Colombia.png" alt="Colombia" id="logoPais">
                    <img src="img/paises/Chile.png" alt="Chile" id="logoPais">
                    <img src="img/paises/Venezuela.png" alt="Venezuela" id="logoPais">
                    <img src="img/paises/España.png" alt="España" id="logoPais">
                    <img src="img/paises/Peru.png" alt="Peru" id="logoPais">
                    <img src="img/paises/Ecuador.png" alt="Ecuador" id="logoPais">
                </div>
            </tr>
        </table>
    </div>

 <!-- Contenedor del video y barra de reproducción -->
<div class="main-container">
    <div class="left-container">
        <img src="img/3Dtext.png" alt="Texto 3D" class="small-image" id="imagen3D">
        <div class="carousel">
            <div id="videoPlayerContainer">
                <div id="player"></div>
            </div>

            <!-- Barra de reproducción estilo Spotify -->
            <div class="video-controls">
                <!-- Controles de Play/Pause y flechas -->
                <div class="top-controls">
                    <button id="prevVideo" class="control-button"><i class="fas fa-chevron-left"></i></button>
                    <button id="playPause" class="control-button"><i class="fas fa-play"></i></button>
                    <button id="nextVideo" class="control-button"><i class="fas fa-chevron-right"></i></button>
                </div>

                <!-- Barra de progreso -->
                <span id="currentTime">0:00</span>
                <input type="range" id="progressBar" min="0" max="100" value="0">
                <span id="totalTime">0:00</span>
            </div>
        </div>
    </div>
    <div class="right-container">
        <!-- Aquí se muestra la imagen desde tu ruta local -->
        <img src="img/Recursos/Mesa.png" alt="Imagen 1" class="right-image">
    </div>
</div>
    <script src="js/conversionPrecio.js"></script>
    <script src="js/barraYoutube.js"></script>
    <script type="module" src="js/authGoogleUser.js"></script>
</body>
</html>
