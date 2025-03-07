const API_KEY = '251289d2e7608397efc03e79'; // Reemplaza con tu clave de API
const BASE_CURRENCY = 'MXN'; // Moneda base: Pesos Mexicanos

const countryToCurrency = {
    'Mexico': 'MXN',
    'USA': 'USD',
    'Argentina': 'ARS',
    'Colombia': 'COP',
    'Chile': 'CLP',
    'Venezuela': 'VES',
    'España': 'EUR',
    'Peru': 'PEN',
    'Ecuador': 'USD' // Ecuador usa USD
};

async function getExchangeRate(targetCurrency) {
    try {
        const response = await fetch(`https://v6.exchangerate-api.com/v6/${API_KEY}/latest/${BASE_CURRENCY}`);
        const data = await response.json();
        return data.conversion_rates[targetCurrency];
    } catch (error) {
        console.error('Error obteniendo la tasa de cambio:', error);
        return null;
    }
}

document.querySelectorAll('.pais img').forEach(img => {
    img.addEventListener('click', async () => {
        const countryName = img.alt;
        const currency = countryToCurrency[countryName];
        
        if (!currency) return;
        
        const exchangeRate = await getExchangeRate(currency);
        if (!exchangeRate) {
            alert('Error al obtener la tasa de cambio. Inténtalo más tarde.');
            return;
        }
        
        const priceInMXN = 100; // Aquí coloca el precio base en MXN
        const convertedPrice = (priceInMXN * exchangeRate).toFixed(2);
        
        Swal.fire({
            title: `Precio en ${currency}`,
            text: `El precio es ${convertedPrice} ${currency}`,
            icon: 'success'
        });
    });
});
