let player;
let progressBar = document.getElementById("progressBar");
let currentTimeEl = document.getElementById("currentTime");
let totalTimeEl = document.getElementById("totalTime");
let isPlaying = false; // Variable para controlar el estado de reproducción (pausado o en reproducción)

const videoIds = [
    "fdtGIXlSBYU",
    "q-FcxH8VitQ",
    "aEFW1vrqyBg",
    "yCIsKctKyyk",
    "kSxN_uQF5EY",
    "q2YLSjHLPeY",
    "gmlt0TecTZE"
];

let currentVideoIndex = 0;
let lastUpdateTime = 0; // Tiempo de la última actualización de la barra de progreso

function onYouTubeIframeAPIReady() {
    player = new YT.Player("player", {
        height: "400",
        width: "700",
        videoId: videoIds[currentVideoIndex],
        playerVars: {
            "autoplay": 0, // Desactivar autoplay
            "controls": 0, // Desactivar controles predeterminados
            "showinfo": 0,  // Ocultar información de video
            "modestbranding": 1, // Minimizar branding de YouTube
            "rel": 0, // Evitar videos relacionados después de terminar
            "iv_load_policy": 3 // Cargar solo miniatura del video
        },
        events: {
            "onReady": onPlayerReady,
            "onStateChange": onPlayerStateChange
        }
    });
}

function onPlayerReady(event) {
    updateTotalTime();
    updateProgressBar();
    player.pauseVideo(); // Aseguramos que el video esté en pausa cuando se carga
    player.seekTo(0); // Nos aseguramos de que esté al principio del video
}

function onPlayerStateChange(event) {
    if (event.data === YT.PlayerState.PLAYING) {
        updateProgressBar();
    } else if (event.data === YT.PlayerState.PAUSED) {
        updateProgressBar();
    }
}

function updateProgressBar() {
    if (player && player.getDuration) {
        let duration = player.getDuration();
        totalTimeEl.textContent = formatTime(duration);

        // Solo actualizamos si el video está en reproducción y la diferencia en el tiempo es significativa
        if (isPlaying) {
            let currentTime = player.getCurrentTime();
            let progress = (currentTime / duration) * 100;
            progressBar.value = progress;
            currentTimeEl.textContent = formatTime(currentTime);
            
            // Utilizamos requestAnimationFrame para una actualización más eficiente y suave
            requestAnimationFrame(updateProgressBar);
        }
    }
}

progressBar.addEventListener("input", function () {
    let duration = player.getDuration();
    let seekToTime = (progressBar.value / 100) * duration;
    player.seekTo(seekToTime, true);
});

function updateTotalTime() {
    setTimeout(() => {
        let duration = player.getDuration();
        totalTimeEl.textContent = formatTime(duration);
    }, 1000);
}

function formatTime(seconds) {
    let min = Math.floor(seconds / 60);
    let sec = Math.floor(seconds % 60);
    return `${min}:${sec < 10 ? "0" : ""}${sec}`;
}

// Función para manejar el cambio de video sin reproducción automática
function changeVideo() {
    player.stopVideo(); // Detenemos el video actual
    currentVideoIndex = (currentVideoIndex + 1) % videoIds.length; // Cambio al siguiente video
    player.cueVideoById(videoIds[currentVideoIndex]); // Cargamos el siguiente video sin reproducir
    player.seekTo(0); // Nos aseguramos de que el video esté al principio
    player.pauseVideo(); // Dejamos el nuevo video en pausa
    isPlaying = false; // Marcamos que está en pausa
    updateProgressBar(); // Actualizamos la barra de progreso
}

// Función para controlar el estado de reproducción con el botón de play/pause
document.getElementById("playPause").addEventListener("click", function () {
    if (isPlaying) {
        player.pauseVideo();
        isPlaying = false;
        document.getElementById("playPause").innerHTML = '<i class="fas fa-play"></i>';
    } else {
        player.playVideo();
        isPlaying = true;
        document.getElementById("playPause").innerHTML = '<i class="fas fa-pause"></i>';
    }
});

// Función para retroceder al video anterior
document.getElementById("prevVideo").addEventListener("click", function () {
    currentVideoIndex = (currentVideoIndex - 1 + videoIds.length) % videoIds.length;
    player.cueVideoById(videoIds[currentVideoIndex]); // Usamos cueVideoById para evitar reproducción automática
    player.seekTo(0); // Aseguramos que el video esté al principio
    player.pauseVideo(); // Pausamos el video cuando se cambia
    isPlaying = false; // Marcamos que está en pausa
    document.getElementById("playPause").innerHTML = '<i class="fas fa-play"></i>';
});

// Función para avanzar al siguiente video
document.getElementById("nextVideo").addEventListener("click", function () {
    currentVideoIndex = (currentVideoIndex + 1) % videoIds.length;
    player.cueVideoById(videoIds[currentVideoIndex]); // Usamos cueVideoById para evitar reproducción automática
    player.seekTo(0); // Aseguramos que el video esté al principio
    player.pauseVideo(); // Pausamos el video cuando se cambia
    isPlaying = false; // Marcamos que está en pausa
    document.getElementById("playPause").innerHTML = '<i class="fas fa-play"></i>';
});
