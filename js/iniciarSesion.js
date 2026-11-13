document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById('modalLogin');
    
    // Si no hay un nombre guardado en el navegador, abre el dialog por la fuerza
    if (modal && !localStorage.getItem('usuario_nombre')) {
        modal.showModal();
    }

    // Lógica para seleccionar los botones de género
    let generoSeleccionado = "";
    const btnsGenero = document.querySelectorAll('.btn-genero');
    const btnEnviar = document.getElementById('btn-enviar');

    btnsGenero.forEach(btn => {
        btn.addEventListener('click', () => {
            btnsGenero.forEach(b => b.classList.remove('activo'));
            btn.classList.add('activo');
            generoSeleccionado = btn.getAttribute('data-valor');
            if(btnEnviar) {
                btnEnviar.disabled = false;
                btnEnviar.classList.add('habilitado');
            }
        });
    });

    // Guardar en localStorage al enviar el formulario
    const formLogin = document.getElementById('form-login');
    if(formLogin) {
        formLogin.addEventListener('submit', (e) => {
            e.preventDefault();
            const nombre = document.getElementById('nombre-input').value;
            const email = document.getElementById('email-input').value;

            localStorage.setItem('usuario_nombre', nombre);
            localStorage.setItem('usuario_email', email);
            localStorage.setItem('usuario_genero', generoSeleccionado);

            modal.close();
        });
    }
});