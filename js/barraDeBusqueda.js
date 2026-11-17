document.addEventListener("DOMContentLoaded", () => {
    const inputBusqueda = document.getElementById('busqueda');
    const productos = document.querySelectorAll('.producto-item');
    const enlacesCategorias = document.querySelectorAll('.filtro-categoria');
    const formBuscador = document.querySelector('.buscador');

    // Si no estamos en una vista con productos o buscador, salimos para evitar errores en consola
    if (!inputBusqueda || productos.length === 0) return;

    let categoriaActual = 'todos';

    // Función principal para filtrar los productos en pantalla
    function filtrarProductos(textoBusqueda = '', categoriaFiltro = categoriaActual) {
        const texto = textoBusqueda.toLowerCase().trim();

        productos.forEach(producto => {
            const nombreProd = producto.getAttribute('data-nombre') || '';
            const catProd = producto.getAttribute('data-categoria') || '';

            // Comprobamos si coincide con el texto y con la categoría activa
            const coincideTexto = nombreProd.includes(texto);
            const coincideCategoria = (categoriaFiltro === 'todos' || catProd.includes(categoriaFiltro));

            if (coincideTexto && coincideCategoria) {
                producto.style.display = 'block'; // O 'flex' según tus clases CSS
            } else {
                producto.style.display = 'none';
            }
        });
    }

    // 1. Evento en tiempo real mientras el usuario escribe en la barra
    inputBusqueda.addEventListener('input', (e) => {
        filtrarProductos(e.target.value, categoriaActual);
    });

    // 2. Evitar recarga del formulario al presionar Enter o la lupa
    if (formBuscador) {
        formBuscador.addEventListener('submit', (e) => {
            e.preventDefault();
            filtrarProductos(inputBusqueda.value, categoriaActual);
        });
    }

    // 3. Evento para las categorías del menú desplegable
    enlacesCategorias.forEach(enlace => {
        enlace.addEventListener('click', (e) => {
            e.preventDefault();
            categoriaActual = enlace.getAttribute('data-categoria') || 'todos';
            
            // Limpiamos el buscador al cambiar de categoría para una mejor experiencia
            inputBusqueda.value = '';

            filtrarProductos('', categoriaActual);
        });
    });
});