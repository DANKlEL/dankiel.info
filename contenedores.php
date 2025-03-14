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
            <!-- Rectángulo de Precio/Información -->
            <div class="info-rectangle" id="infoRectangle3D">
                Precio/Información
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
        <!-- Rectángulo de Precio/Información -->
        <div class="info-rectangle" id="infoRectanglePixelArt">
            Precio/Información
        </div>
    </div>
</div>

<script>
    // Evento para el rectángulo de Precio/Información (3D)
    document.getElementById('infoRectangle3D').addEventListener('click', () => {
        Swal.fire({
            title: '<strong>3D Visualizer</strong>',
            html: `
                <p style="font-size: 18px; margin: 10px 0;"><strong>PRECIO: ${window.preciosConvertidos?.precioBaseConvertido || 'N/A'} ${window.preciosConvertidos?.monedaLocal || 'N/A'}</strong></p>
                <p style="font-size: 14px; margin: 10px 0;"><strong>Detalles:</strong></p>
                <ul style="text-align: left; font-size: 14px; margin: 10px 0;">
                    <li>Modelos creados desde cero</li>
                    <li>100% modelado para usted (Sin reutilización en proyectos ajenos)</li>
                    <li>Gráficos de primera calidad (renderización con OctaneRender)</li>
                </ul>
                <p style="font-size: 14px; margin: 10px 0;"><strong>¿Qué contiene?</strong></p>
                <ul style="text-align: left; font-size: 14px; margin: 10px 0;">
                    <li>1. Máximo 3 escenarios/escenas</li>
                    <li>2. Máximo 2 personajes modelados</li>
                    <li>3. Efectos visuales en AE ilimitados</li>
                </ul>
                <p style="font-size: 14px; margin: 10px 0;"><strong>¿Necesitas más escenarios/personajes?</strong></p>
                <ul style="text-align: left; font-size: 14px; margin: 10px 0;">
                    <li>El precio por +1 escenario es de ${window.preciosConvertidos?.precioEscenarioConvertido || 'N/A'} ${window.preciosConvertidos?.monedaLocal || 'N/A'}</li>
                    <li>El precio por +1 personaje es de ${window.preciosConvertidos?.precioPersonajeConvertido || 'N/A'} ${window.preciosConvertidos?.monedaLocal || 'N/A'}</li>
                </ul>
            `,
            icon: 'info',
            confirmButtonText: 'Aceptar',
            customClass: {
                popup: 'custom-swal-popup',
                title: 'custom-swal-title',
                htmlContainer: 'custom-swal-html',
                confirmButton: 'custom-swal-button'
            }
        });
    });

    // Evento para el rectángulo de Precio/Información (Pixel Art)
    document.getElementById('infoRectanglePixelArt').addEventListener('click', () => {
        Swal.fire({
            title: '<strong>PIXEL ART VISUAL</strong>',
            html: `
                <p style="font-size: 18px; margin: 10px 0;"><strong>PRECIO: ${window.preciosConvertidos?.precioPixelArt64x64Convertido || 'N/A'} ${window.preciosConvertidos?.monedaLocal || 'N/A'} (64x64)</strong></p>
                <p style="font-size: 18px; margin: 10px 0;"><strong>PRECIO: ${window.preciosConvertidos?.precioPixelArt128x128Convertido || 'N/A'} ${window.preciosConvertidos?.monedaLocal || 'N/A'} (128x128)</strong></p>
                <p style="font-size: 14px; margin: 10px 0;"><strong>Detalles:</strong></p>
                <ul style="text-align: left; font-size: 14px; margin: 10px 0;">
                    <li>Pixel Art creados desde cero</li>
                    <li>100% diseñado para usted (Sin reutilización en proyectos ajenos)</li>
                    <li>Los personajes pueden tener cualquier diseño y todo tipo de detalles</li>
                    <li>Nota: Los objetos son aparte de los escenarios.</li>
                </ul>
                <p style="font-size: 14px; margin: 10px 0;"><strong>¿Qué contiene?</strong></p>
                <ul style="text-align: left; font-size: 14px; margin: 10px 0;">
                    <li>1. Máximo 1 escenario/escena</li>
                    <li>2. Máximo 2 personajes</li>
                    <li>3. Máximo 3 Objetos (Ej: Carro)</li>
                    <li>4. Efectos visuales en AE ilimitados</li>
                </ul>
                <p style="font-size: 14px; margin: 10px 0;"><strong>¿Necesitas más escenarios/personajes/objetos?</strong></p>
                <ul style="text-align: left; font-size: 14px; margin: 10px 0;">
                    <li>El precio por +1 escenario es de ${window.preciosConvertidos?.precioPixelArtEscenarioConvertido || 'N/A'} ${window.preciosConvertidos?.monedaLocal || 'N/A'}</li>
                    <li>El precio por +1 objeto es de ${window.preciosConvertidos?.precioPixelArtObjetoConvertido || 'N/A'} ${window.preciosConvertidos?.monedaLocal || 'N/A'}</li>
                    <li>El precio por +1 personaje es de ${window.preciosConvertidos?.precioPixelArtPersonajeConvertido || 'N/A'} ${window.preciosConvertidos?.monedaLocal || 'N/A'}</li>
                </ul>
            `,
            icon: 'info',
            confirmButtonText: 'Aceptar',
            customClass: {
                popup: 'custom-swal-popup',
                title: 'custom-swal-title',
                htmlContainer: 'custom-swal-html',
                confirmButton: 'custom-swal-button'
            }
        });
    });
</script>