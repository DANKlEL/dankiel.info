<!-- CONTENEDOR 3D VISUAL (IZQUIERDA) -->
<div class="CONTENEDOR-3D-VISUAL">
    <div class="left-container">
        <img src="img/Textos/3Dvisual.png" alt="Texto 3D" class="small-image" id="imagen3D">
        <div class="carousel">
            <div id="videoPlayerContainer">
                <div id="player"></div>
            </div>
            <div class="video-controls">
                <div class="top-controls">
                    <button id="prevVideo" class="control-button"><i class="fas fa-chevron-left"></i></button>
                    <button id="playPause" class="control-button"><i class="fas fa-play"></i></button>
                    <button id="nextVideo" class="control-button"><i class="fas fa-chevron-right"></i></button>
                </div>
                <span id="currentTime">0:00</span>
                <input type="range" id="progressBar" min="0" max="100" value="0">
                <span id="totalTime">0:00</span>
            </div>
        </div>
    </div>
</div>

<!-- CONTENEDOR PIXEL ART (DERECHA) -->
<div class="CONTENEDOR-PIXEL-ART">
    <img src="img/Textos/PixelArtvisual.png" alt="Texto Pixel Art" class="small-image" id="imagenPixelArt">
    <div class="carousel">
        <div id="videoPlayerContainerPixelArt">
            <iframe id="playerPixelArt" width="100%" height="100%" src="https://www.youtube.com/embed/1YhCMtuWXYI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="video-controls">
            <div class="top-controls">
                <button id="prevVideoPixelArt" class="control-button"><i class="fas fa-chevron-left"></i></button>
                <button id="playPausePixelArt" class="control-button"><i class="fas fa-play"></i></button>
                <button id="nextVideoPixelArt" class="control-button"><i class="fas fa-chevron-right"></i></button>
            </div>
            <span id="currentTimePixelArt">0:00</span>
            <input type="range" id="progressBarPixelArt" min="0" max="100" value="0">
            <span id="totalTimePixelArt">0:00</span>
        </div>
    </div>
</div>

<!-- Script para el carrusel de Pixel Art -->
<script>
    // Lista de videos de Pixel Art
    const videoUrlsPixelArt = [
        '1YhCMtuWXYI',
        'HaEf63Wk1Sc',
        'ih8asyTq1oQ',
        'jzdxGmCmB_g'
    ];

    let currentVideoIndexPixelArt = 0;

    // Función para actualizar el video
    function updateVideoPixelArt() {
        const iframe = document.getElementById('playerPixelArt');
        iframe.src = `https://www.youtube.com/embed/${videoUrlsPixelArt[currentVideoIndexPixelArt]}`;
    }

    // Eventos para las flechas
    document.getElementById('nextVideoPixelArt').addEventListener('click', () => {
        currentVideoIndexPixelArt = (currentVideoIndexPixelArt + 1) % videoUrlsPixelArt.length;
        updateVideoPixelArt();
    });

    document.getElementById('prevVideoPixelArt').addEventListener('click', () => {
        currentVideoIndexPixelArt = (currentVideoIndexPixelArt - 1 + videoUrlsPixelArt.length) % videoUrlsPixelArt.length;
        updateVideoPixelArt();
    });

    // Inicializar el primer video
    updateVideoPixelArt();
</script>