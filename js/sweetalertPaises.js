// sweetalertPaises.js
// Función para actualizar el país seleccionado
function actualizarPaisSeleccionado(pais) {
    const logoPaisPequeno = document.querySelector('.logo-pais-pequeno');
    if (logoPaisPequeno) {
        logoPaisPequeno.src = `img/paises/${pais}.png`;
    }
}

// Función para mostrar el SweetAlert de selección de países
function mostrarSweetAlertPaises() {
    let paisSeleccionado = "Mexico"; // País por defecto

    Swal.fire({
        title: 'Tu país',
        html: `
            <div class="pais-automatico" style="text-align: center; margin-bottom: 20px;">
                <img src="img/paises/${paisSeleccionado}.png" alt="${paisSeleccionado}" class="logo-pais-automatico" style="width: 80px; height: auto; border-radius: 5px; background: white; padding: 10px;">
            </div>
            <p style="text-align: center; font-size: 16px; margin-bottom: 20px;">¿No es? Selecciona manualmente:</p>
            <div class="paises-lista" style="display: flex; justify-content: center; gap: 10px;">
                <img src="img/paises/Mexico.png" alt="Mexico" class="logo-pais" data-pais="Mexico" style="width: 50px; height: auto; border-radius: 5px; background: white; padding: 5px; cursor: pointer;">
                <img src="img/paises/Usa.png" alt="USA" class="logo-pais" data-pais="Usa" style="width: 50px; height: auto; border-radius: 5px; background: white; padding: 5px; cursor: pointer;">
                <img src="img/paises/Argentina.png" alt="Argentina" class="logo-pais" data-pais="Argentina" style="width: 50px; height: auto; border-radius: 5px; background: white; padding: 5px; cursor: pointer;">
                <img src="img/paises/Colombia.png" alt="Colombia" class="logo-pais" data-pais="Colombia" style="width: 50px; height: auto; border-radius: 5px; background: white; padding: 5px; cursor: pointer;">
                <img src="img/paises/Chile.png" alt="Chile" class="logo-pais" data-pais="Chile" style="width: 50px; height: auto; border-radius: 5px; background: white; padding: 5px; cursor: pointer;">
                <img src="img/paises/Venezuela.png" alt="Venezuela" class="logo-pais" data-pais="Venezuela" style="width: 50px; height: auto; border-radius: 5px; background: white; padding: 5px; cursor: pointer;">
                <img src="img/paises/España.png" alt="España" class="logo-pais" data-pais="España" style="width: 50px; height: auto; border-radius: 5px; background: white; padding: 5px; cursor: pointer;">
                <img src="img/paises/Peru.png" alt="Peru" class="logo-pais" data-pais="Peru" style="width: 50px; height: auto; border-radius: 5px; background: white; padding: 5px; cursor: pointer;">
                <img src="img/paises/Ecuador.png" alt="Ecuador" class="logo-pais" data-pais="Ecuador" style="width: 50px; height: auto; border-radius: 5px; background: white; padding: 5px; cursor: pointer;">
            </div>
        `,
        showConfirmButton: false,
        customClass: {
            popup: 'sweet-alert-paises',
        },
        didOpen: () => {
            document.querySelectorAll('.logo-pais').forEach(logo => {
                logo.addEventListener('click', () => {
                    const pais = logo.getAttribute('data-pais');
                    actualizarPaisSeleccionado(pais);
                    Swal.close();
                });
            });
        },
    });
}

// Asignar el evento al botón de selección de país
document.addEventListener('DOMContentLoaded', () => {
    const botonSeleccionarPais = document.getElementById('seleccionarPais');
    if (botonSeleccionarPais) {
        botonSeleccionarPais.addEventListener('click', mostrarSweetAlertPaises);
    }
});