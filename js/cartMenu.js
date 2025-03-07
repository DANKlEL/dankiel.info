document.addEventListener('DOMContentLoaded', () => {
    const cartIcon = document.getElementById('cart-icon');
    const miniCartMenu = document.getElementById('mini-cart-menu');

    cartIcon.addEventListener('click', () => {
        miniCartMenu.classList.toggle('hidden');
    });
});
