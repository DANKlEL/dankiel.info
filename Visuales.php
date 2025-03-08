<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/visuales6.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Shot By DANKIEL</title>
    <script src="https://www.youtube.com/iframe_api"></script>
</head>
<body>
    <?php require 'header.php'; ?>
    <div id="videoContainer">
        <table id="centeredTable">
            <tr id="videoRow">
                <div class="pais">
                    <button id="seleccionarPais" class="btn-seleccionar-pais">Selecciona tu país</button>
                    <div class="logo-pais-automatico-pequeno">
                        <img src="img/paises/Mexico.png" alt="México" class="logo-pais-pequeno">
                    </div>
                </div>
            </tr>
        </table>
    </div>
    <?php require 'contenedores.php'; ?> <!-- Incluir los contenedores -->
    <script src="js/conversionPrecio.js"></script>
    <script src="js/barraYoutube.js"></script>
    <script type="module" src="js/authGoogleUser.js"></script>
    <script src="js/sweetalertPaises.js"></script>
    <script src="js/videoURL.js"></script>
</body>
</html>