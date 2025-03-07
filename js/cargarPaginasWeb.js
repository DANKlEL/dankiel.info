document.addEventListener('DOMContentLoaded', function() {
    const iframe = document.getElementById('web-frame');
    const prevButton = document.getElementById('prev-page');
    const nextButton = document.getElementById('next-page');

    // Array de URLs que deseas cargar
    const urls = [
        "https://www.dankielito.com/AEROMEXICO/",
        "https://www.blkmooncoffee.com/"
    ];

    let currentIndex = 0;

    // Cargar la primera URL en el iframe
    iframe.src = urls[currentIndex];

    // Evento para la flecha izquierda (prev)
    prevButton.addEventListener('click', function() {
        if (currentIndex > 0) {
            currentIndex--;
            iframe.src = urls[currentIndex];
        }
    });

    // Evento para la flecha derecha (next)
    nextButton.addEventListener('click', function() {
        if (currentIndex < urls.length - 1) {
            currentIndex++;
            iframe.src = urls[currentIndex];
        }
    });
});
