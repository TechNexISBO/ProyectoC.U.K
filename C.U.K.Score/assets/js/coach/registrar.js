/* VARIABLES */

// Registrar 
const registrarBtn = document.getElementById('registrarBtn');
const registrar = document.getElementById('registrar');

// Participante 
const participanteBtn = document.getElementById('participanteBtn');
const inicioParticipantes = document.getElementById('inicioParticipantes');

// Categoria
const categoriaBtn = document.getElementById('categoriaBtn');
const inicioCategorias = document.getElementById('inicioCategorias');


/* MENU HAMBURGUESA */ 
const iconoMenu = document.querySelector('#icono-menu');
const menu = document.querySelector('#menu');

// MENU HAMBURGUESA
iconoMenu.addEventListener('click', (e) => {
    // Alternamos estilos para el menú y body
    menu.classList.toggle('active');
    document.body.classList.toggle('opacity');
    iconoMenu.classList.toggle('invertido');
});

/* FUNCION DE OCULTAR */

registrarBtn.addEventListener('click', () => {
    registrar.classList.remove('hidden'); // Quita el hidden de REGISTRAR

    inicioParticipantes.classList.add('hidden'); // Añade el hidden a PARICIPANTE

    inicioCategorias.classList.add('hidden'); // Añade el hidden a CATEGORIA
});

participanteBtn.addEventListener('click', () => {
    inicioParticipantes.classList.remove('hidden'); // Quita el hidden de PARICIPANTE

    inicioCategorias.classList.add('hidden'); // Añade el hidden a CATEGORIA

    registrar.classList.add('hidden'); // Añade el hidden a REGISTRAR
});

categoriaBtn.addEventListener('click', () => {
    inicioCategorias.classList.remove('hidden'); // Quita el hidden a CATEGORIA

    registrar.classList.add('hidden'); // Añade el hidden a REGISTRAR

    inicioParticipantes.classList.add('hidden'); // Añade el hidden a PARICIPANTE
});

