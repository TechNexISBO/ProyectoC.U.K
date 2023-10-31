/* MENU HAMBURGUESA */ 
const iconoMenu = document.querySelector('#icono-menu');
const menu = document.querySelector('#menu');

/* FORMULARIO */
const loginForm = document.getElementById('loginForm');
const registroForm = document.getElementById('registroForm');
const iniciarSesionBtn = document.getElementById('iniciarSesionBtn');
const registrarseBtn = document.getElementById('registrarseBtn');

// MENU HAMBURGUESA
iconoMenu.addEventListener('click', (e) => {
    // Alternamos estilos para el menú y body
    menu.classList.toggle('active');
    document.body.classList.toggle('opacity');
    iconoMenu.classList.toggle('invertido');
});

// FORMULARIOS
iniciarSesionBtn.addEventListener('click', () => {
    loginForm.classList.remove('hidden');
    registroForm.classList.add('hidden');
});

registrarseBtn.addEventListener('click', () => {
    registroForm.classList.remove('hidden');
    loginForm.classList.add('hidden');
});







