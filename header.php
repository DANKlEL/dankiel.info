<header>
    <link rel="icon" href="img/Logos/LogoDankiel.jpg" type="image/jpg">
    <div class="header" id="main-header">
        <div class="logo">
            <a href="" class="logo1"><img src="img/Logos/ShotByDankiel.jpg" alt="Logo 1"/></a>
            <a href="" class="logo2"><img src="img/Logos/LogoDankiel.jpg" alt="Logo 2"/></a>
            <a href="" class="logo3"><img src="img/Logos/LogoBlackGengar.jpg" alt="Logo 3"/></a>
        </div>
        <div class="firmas">
            <a href="" class="firma1"><img src="img/Firmas/FirmaDankiel.jpg" alt="Firma 1"/></a>
            <a href="" class="firma2"><img src="img/Firmas/FirmaBlackGengar.jpg" alt="Firma 2"/></a>
        </div>
        <div class="menu">
            <ul class="nav" id="nav">
                <li><a href="index.php">INICIO</a></li>
                <li><a href="visuales.php">¿QUIERES UN VISUAL?</a></li>
                <li><a href="paginasWeb.php">¿QUIERES UNA PÁGINA WEB?</a></li>
                <li class="dropdown">
                    <a href="ropa.php">MARCA DE ROPA</a>
                    <ul class="dropdown-menu">
                        <li><a href="novedades.php">Lo Nuevo</a></li>
                        <li><a href="hombre.php">Hombre</a></li>
                        <li><a href="mujer.php">Mujer</a></li>
                        <li><a href="peluches.php">Peluches</a></li>
                        <li><a href="llaveros.php">Llaveros</a></li>
                        <li><a href="exclusivos.php">Productos Exclusivos</a></li>
                    </ul>
                </li>
            </ul>
            <div id="user-info">
                <!-- Aquí se actualizará dinámicamente la información del usuario -->
            </div>
        </div>
    </div>
</header>

<script>
    window.addEventListener('scroll', function() {
        var header = document.getElementById('main-header');
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > 0) {
            // Si no está en el tope de la página, ocultar la mitad del header
            header.style.transform = 'translateY(-61%)';
        } else {
            // Si está en el tope de la página, mostrar el header completo
            header.style.transform = 'translateY(0)';
        }
        header.style.transition = 'transform 0.3s ease';
    });
</script>
