<!-- Contenedor principal que envuelve todo -->
<div class="contenedor-general">
    <!-- Contenedor para 3D y Pixel Art -->
    <div class="contenedor-superior">
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
    </div>

    <!-- CONTENEDOR RESTO VISUALES -->
    <div class="CONTENEDOR-RESTO-VISUALES">
        <div class="menu-lateral">
            <ul>
                <li><a href="#" data-tipo="lyric-con-portada">LYRIC VISUAL CON PORTADA</a></li>
                <li><a href="#" data-tipo="lyric-simple">LYRIC VISUAL SIMPLE</a></li>
                <li><a href="#" data-tipo="edit-video-clip">EDIT DE VIDEO CLIP</a></li>
                <li><a href="#" data-tipo="just-visual-concept">JUST VISUAL CONCEPT</a></li>
                <li><a href="#" data-tipo="amv">AMV</a></li>
            </ul>
        </div>
        <div class="contenedor-video">
            <img src="img/Textos/LyricVisualConPortada.png" alt="Texto Lyric Visual con Portada" class="small-image" id="imagenRestoVisuales">
            <div class="carousel">
                <div id="videoPlayerContainerRestoVisuales">
                    <iframe id="playerRestoVisuales" width="100%" height="100%" src="https://www.youtube.com/embed/ZRV_zPK18Gg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video-controls">
                    <div class="top-controls">
                        <button id="prevVideoRestoVisuales" class="control-button"><i class="fas fa-chevron-left"></i></button>
                        <button id="playPauseRestoVisuales" class="control-button"><i class="fas fa-play"></i></button>
                        <button id="nextVideoRestoVisuales" class="control-button"><i class="fas fa-chevron-right"></i></button>
                    </div>
                    <span id="currentTimeRestoVisuales">0:00</span>
                    <input type="range" id="progressBarRestoVisuales" min="0" max="100" value="0">
                    <span id="totalTimeRestoVisuales">0:00</span>
                </div>
                <!-- Rectángulo de Precio/Información -->
                <div class="info-rectangle" id="infoRectangleRestoVisuales">
                    Precio/Información
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Listas de videos para cada tipo de visual
    const videosPorTipo = {
        'lyric-con-portada': [
            'ZRV_zPK18Gg',
            'toA7TAhdJQM',
            'ABS1KqO6Dro',
            'azfkhwF1jGw'
        ],
        'lyric-simple': [
            'NyeYJHwbMgw',
            'x1RprL97HJs'
        ],
        'edit-video-clip': [
            '90OnAT9ELks'
        ],
        'just-visual-concept': [
            '9PfPgOhJJaA'
        ],
        'amv': [
            'aEFW1vrqyBg'
        ]
    };

    let currentTipoVisual = 'lyric-con-portada'; // Tipo de visual por defecto
    let currentVideoIndexRestoVisuales = 0;

    // Función para actualizar el video en el contenedor de resto de visuales
    function updateVideoRestoVisuales() {
        const iframe = document.getElementById('playerRestoVisuales');
        iframe.src = `https://www.youtube.com/embed/${videosPorTipo[currentTipoVisual][currentVideoIndexRestoVisuales]}`;
    }

    // Eventos para las flechas
    document.getElementById('nextVideoRestoVisuales').addEventListener('click', () => {
        currentVideoIndexRestoVisuales = (currentVideoIndexRestoVisuales + 1) % videosPorTipo[currentTipoVisual].length;
        updateVideoRestoVisuales();
    });

    document.getElementById('prevVideoRestoVisuales').addEventListener('click', () => {
        currentVideoIndexRestoVisuales = (currentVideoIndexRestoVisuales - 1 + videosPorTipo[currentTipoVisual].length) % videosPorTipo[currentTipoVisual].length;
        updateVideoRestoVisuales();
    });

    // Cambiar el tipo de visual
    document.querySelectorAll('.menu-lateral a').forEach(enlace => {
        enlace.addEventListener('click', (e) => {
            e.preventDefault();
            const tipo = e.target.getAttribute('data-tipo');
            currentTipoVisual = tipo;
            currentVideoIndexRestoVisuales = 0; // Reiniciar el índice del video
            updateVideoRestoVisuales();
        });
    });

    // Inicializar el primer video
    updateVideoRestoVisuales();

    // Función para obtener la tasa de cambio
    async function getExchangeRate(targetCurrency) {
        const apiKey = '251289d2e7608397efc03e79'; // Reemplaza con tu clave de API
        const baseCurrency = 'MXN'; // Moneda base: Pesos Mexicanos

        const url = `https://v6.exchangerate-api.com/v6/${apiKey}/latest/${baseCurrency}`;
        const response = await fetch(url);
        const data = await response.json();

        if (data.conversion_rates && data.conversion_rates[targetCurrency]) {
            return data.conversion_rates[targetCurrency];
        } else {
            throw new Error('No se pudo obtener la tasa de cambio');
        }
    }

    // Evento para el rectángulo de Precio/Información (Resto de Visuales)
    document.getElementById('infoRectangleRestoVisuales').addEventListener('click', async () => {
        let precioMXN, detalles;

        // Definir precios en MXN y detalles según el tipo de visual
        switch (currentTipoVisual) {
            case 'lyric-con-portada':
                precioMXN = 300.00;
                detalles = `
                    <p style="font-size: 14px; margin: 10px 0;"><strong>Detalles:</strong></p>
                    <ul style="text-align: left; font-size: 14px; margin: 10px 0;">
                        <li>Incluye la portada del álbum o single como elemento principal del video.</li>
                        <li>La portada puede ser estática o animada.</li>
                        <li>Texto de la canción sincronizado con el audio.</li>
                        <li>Estilo de letras personalizable (fuente, color, tamaño y animación).</li>
                        <li>Elección de colores y temática acorde al estilo de la canción.</li>
                        <li>Posibilidad de agregar imágenes adicionales o videos de fondo.</li>
                        <li>Efectos visuales ilimitados.</li>
                    </ul>
                    <p style="font-size: 14px; margin: 10px 0;"><strong>NOTA:</strong> Se permiten hasta 2 revisiones para ajustar detalles finales.</p>
                `;
                break;
            case 'lyric-simple':
                precioMXN = 100.00;
                detalles = `
                    <p style="font-size: 14px; margin: 10px 0;"><strong>Detalles:</strong></p>
                    <ul style="text-align: left; font-size: 14px; margin: 10px 0;">
                        <li>Fondo visual estático o dinámico.</li>
                        <li>Texto de la canción sincronizado con el audio.</li>
                        <li>Estilo de letras personalizable (fuente, color, tamaño y animación).</li>
                        <li>Elección de colores y temática acorde al estilo de la canción.</li>
                        <li>Posibilidad de agregar imágenes adicionales o videos de fondo.</li>
                        <li>Efectos visuales ilimitados.</li>
                    </ul>
                `;
                break;
            case 'edit-video-clip':
                precioMXN = 500.00;
                detalles = `
                    <p style="font-size: 14px; margin: 10px 0;"><strong>Detalles:</strong></p>
                    <ul style="text-align: left; font-size: 14px; margin: 10px 0;">
                        <li>Efectos visuales avanzados:</li>
                        <ul>
                            <li>Corrección de color profesional (ajuste de tonos, brillo, contraste y saturación).</li>
                            <li>Corrección de tomas.</li>
                            <li>Overlays creativos (texturas).</li>
                            <li>Los efectos más modernos y comerciales.</li>
                        </ul>
                        <li>Efectos visuales ilimitados.</li>
                    </ul>
                `;
                break;
            case 'just-visual-concept':
                precioMXN = 150.00;
                detalles = `
                    <p style="font-size: 14px; margin: 10px 0;"><strong>Detalles:</strong></p>
                    <ul style="text-align: left; font-size: 14px; margin: 10px 0;">
                        <li>Puede contener o no lyric.</li>
                        <li>Creación de una atmósfera visual que complemente el estilo y mood de la música.</li>
                        <li>Transiciones creativas entre escenas (fundidos, cortes rápidos, efectos de distorsión, etc.).</li>
                        <li>Overlays de luz, sombras y texturas para agregar profundidad.</li>
                        <li>Uso de imágenes o videos temáticos (naturaleza, ciudad, tecnología, etc.).</li>
                        <li>Inclusión de logos, marcas de agua o elementos de identidad visual (opcional).</li>
                        <li>Efectos visuales ilimitados.</li>
                    </ul>
                    <p style="font-size: 14px; margin: 10px 0;"><strong>MODELO 3D (OPCIONAL SI SE DESEA INTEGRAR):</strong></p>
                    <ul style="text-align: left; font-size: 14px; margin: 10px 0;">
                        <li>Costo adicional:</li>
                        <ul>
                            <li>+1 RENDER 100.00 MXN. (objetos, figuras, escenarios).</li>
                            <li>+1 RENDER DE PERSONA 300.00 MXN.</li>
                        </ul>
                    </ul>
                `;
                break;
            case 'amv':
                precioMXN = 100.00;
                detalles = `
                    <p style="font-size: 14px; margin: 10px 0;"><strong>Detalles:</strong></p>
                    <ul style="text-align: left; font-size: 14px; margin: 10px 0;">
                        <li>Cualquier serie (películas, animes, animaciones, etc.).</li>
                        <li>Se pueden combinar entre varias series.</li>
                        <li>Efectos visuales ilimitados.</li>
                    </ul>
                `;
                break;
            default:
                precioMXN = 0.00;
                detalles = '';
        }

        // Obtener la moneda local y la tasa de cambio
        const monedaLocal = window.preciosConvertidos?.monedaLocal || 'MXN';
        const tasaCambio = await getExchangeRate(monedaLocal);

        // Convertir el precio a la moneda local
        const precioConvertido = (precioMXN * tasaCambio).toFixed(2);

        Swal.fire({
            title: `<strong>${currentTipoVisual.toUpperCase()}</strong>`,
            html: `
                <p style="font-size: 18px; margin: 10px 0;"><strong>PRECIO: ${precioConvertido} ${monedaLocal}</strong></p>
                ${detalles}
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