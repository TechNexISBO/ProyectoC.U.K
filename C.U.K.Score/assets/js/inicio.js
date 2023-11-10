/* MENU HAMBURGUESA */ 
const iconoMenu = document.querySelector('#icono-menu');
const menu = document.querySelector('#menu');

/* FORMULARIO */

//Login
const loginForm = document.getElementById('loginForm');
const iniciarSesionBtn = document.getElementById('iniciarSesionBtn');

//Register
const registroForm = document.getElementById('registroForm');
const registrarseBtn = document.getElementById('registrarseBtn');

//Juez
const juezBtn = document.getElementById('juezBtn');
const loginJuez = document.getElementById('loginJuez');

// MENU HAMBURGUESA
iconoMenu.addEventListener('click', (e) => {
    // Alternamos estilos para el menú y body
    menu.classList.toggle('active');
    document.body.classList.toggle('opacity');
    iconoMenu.classList.toggle('invertido');
});

/* FORMULARIOS */

//INICIO SESION
iniciarSesionBtn.addEventListener('click', () => {
    loginForm.classList.remove('hidden'); // Quita el hidden del INICIO DE SESION

    registroForm.classList.add('hidden'); // Añade el hidden al REGISTARSE

    loginJuez.classList.add('hidden'); // Añade el hidden al INICIO DEL JUEZ
});

//REGISTRARSE
registrarseBtn.addEventListener('click', () => {
    registroForm.classList.remove('hidden'); // Quita el hidden del REGISTARSE

    loginForm.classList.add('hidden'); // Añade el hidden al INICIO DE SESION

    loginJuez.classList.add('hidden'); // Añade el hidden al INICIO DEL JUEZ
});

//INICIO DEL JUEZ
juezBtn.addEventListener('click', () => {
    loginJuez.classList.remove('hidden'); // Quita el hidden al INICIO DEL JUEZ

    loginForm.classList.add('hidden'); // Añade el hidden al INICIO DE SESION

    registroForm.classList.add('hidden'); // Añade el hidden al REGISTARSE
});







