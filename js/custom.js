document.addEventListener('DOMContentLoaded', function() {
    const prevButton = document.querySelector('.carousel-button.prev');
    const nextButton = document.querySelector('.carousel-button.next');
    const videoWrapper = document.querySelector('.video-wrapper');
    const btnVisuales = document.getElementById('btn-visuales');
    const visualesSection = document.getElementById('visuales-section');
    const scrollUpButton = document.getElementById('scroll-up');
    const scrollDownButton = document.getElementById('scroll-down');

    let scrollInterval;
    const scrollDistance = 10; // Distancia de desplazamiento por intervalo
    const scrollSpeed = 10; // Velocidad del desplazamiento (menor es más rápido)

    function startAutoScroll(direction) {
        scrollInterval = setInterval(() => {
            videoWrapper.scrollBy({
                left: direction * scrollDistance,
                behavior: 'smooth'
            });
        }, scrollSpeed);
    }

    function stopAutoScroll() {
        clearInterval(scrollInterval);
    }

    prevButton.addEventListener('mouseover', function() {
        startAutoScroll(-1); // Desplazar a la izquierda
    });

    prevButton.addEventListener('mouseout', function() {
        stopAutoScroll();
    });

    nextButton.addEventListener('mouseover', function() {
        startAutoScroll(1); // Desplazar a la derecha
    });

    nextButton.addEventListener('mouseout', function() {
        stopAutoScroll();
    });

    btnVisuales.addEventListener('click', function() {
        visualesSection.scrollIntoView({ behavior: 'smooth' });
    });

    function toggleScrollButtons() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const scrollHeight = document.documentElement.scrollHeight;
        const clientHeight = document.documentElement.clientHeight;
        
        if (scrollTop + clientHeight >= scrollHeight) {
            // En el fondo de la página, mostrar solo el botón de subir
            scrollUpButton.style.display = 'block';
            scrollDownButton.style.display = 'none';
        } else if (scrollTop === 0) {
            // En la parte superior de la página, mostrar solo el botón de bajar
            scrollUpButton.style.display = 'none';
            scrollDownButton.style.display = 'block';
        } else {
            // En medio de la página, mostrar ambos botones
            scrollUpButton.style.display = 'block';
            scrollDownButton.style.display = 'block';
        }
    }

    // Inicializar la visibilidad de los botones
    toggleScrollButtons();

    // Actualizar la visibilidad de los botones en el evento de scroll
    window.addEventListener('scroll', toggleScrollButtons);

    scrollUpButton.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    scrollDownButton.addEventListener('click', function() {
        window.scrollTo({
            top: document.body.scrollHeight,
            behavior: 'smooth'
        });
    });
});
