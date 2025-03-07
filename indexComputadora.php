<?php
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/lndexComputadora.css">
    <link rel="stylesheet" href="css/experienciaLaboral.css"> 
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous" />
    <title>Shot By DANKIEL</title>
</head>
<body>
    <?php require 'header.php'; ?>
    <main>
        <div class="image-container">
            <div class="image-item">
                <a href="Visuales.php"><img src="img/Carteles/Visuales.jpg" alt="Visuales"></a>
                <button class="btn btn-dark font-weight-bold" id="btn-visuales">MÁS DETALLES</button>
            </div>
            <div class="image-item">
                <a href="paginasWeb.php"><img src="img/Carteles/PaginasWeb.jpg" alt="Paginas web"></a>
                <button class="btn btn-dark font-weight-bold">MÁS DETALLES</button>
            </div>
            <div class="image-item">
                <a href="ropa.php"><img src="img/Carteles/Ropa.jpg" alt="Musica"></a>
                <button class="btn btn-dark font-weight-bold">MÁS DETALLES</button>
            </div>
        </div>
        <div class="video-section" id="visuales-section">
            <div class="video-container">
                <h2>Visuales</h2>
                <div class="video-carousel">
                    <button class="carousel-button prev">&#8249;</button>
                    <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/fdtGIXlSBYU" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <button class="carousel-button next">&#8250;</button>
                </div>
            </div>
        </div>
        <div class="paginas-web-section" id="paginas-web-section">
            <h2>Paginas Web</h2>
            <div class="web-container">
                <button class="carousel-button prev" id="prev-page">&#8249;</button>
                <iframe id="web-frame" src=""></iframe>
                <button class="carousel-button next" id="next-page">&#8250;</button>
            </div>
        </div>
        <!-- Nueva Sección: Experiencia Laboral -->
        <div class="experiencia-laboral-section" id="experiencia-laboral-section">
            <h2>Experiencia Laboral</h2>
            <div class="laboral-container">
                <div class="laboral-item">
                    <h3>@EduardoCM</h3>
                    <iframe src="https://eduardocarbajalm.github.io/Portafolio/" frameborder="0"></iframe>
                </div>
                <div class="laboral-item">
                    <h3>@Dankielito</h3>
                    <iframe src="www.linkedin.com/in/danklel" frameborder="0"></iframe>
                </div>
            </div>
            <img src="css/Wallpapers/LogoDibujadoV1.png" alt="Logo" class="logo-bottom-left">
        </div>
    </main>
    <button class="scroll-button up" id="scroll-up">
        <i class="fas fa-arrow-up"></i>
    </button>
    <button class="scroll-button down" id="scroll-down">
        <i class="fas fa-arrow-down"></i>
    </button>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="module" src="js/authGoogleUser.js"></script>
    <script src="js/videoURL.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/cargarPaginasWeb.js"></script>
    <script src="js/experienciaLaboral.js"></script> 
</body>
</html>
