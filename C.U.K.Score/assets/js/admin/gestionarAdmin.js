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


/* VARIABLES */

//PARTICIPANTES
const participantesBtn = document.getElementById('participantesBtn');
const inicioParticipantes = document.getElementById('inicioParticipantes');

//COMPITEN
const compitenBtn = document.getElementById('compitenBtn');
const inicioCompiten = document.getElementById('inicioCompiten');

//PUNTAJE
const puntajesBtn = document.getElementById('puntajesBtn');
const inicioPuntajes = document.getElementById('inicioPuntajes');

/* TABLAS */

//PARTICIPANTES
participantesBtn.addEventListener('click', () => {
    inicioParticipantes.classList.remove('hidden'); // Quita el hidden de PARTICIPANTES

    inicioCompiten.classList.add('hidden'); // Añade el hidden a COMPITEN

    inicioPuntajes.classList.add('hidden'); // Añade el hidden a PUNTAJE
});

//COMPITEN
compitenBtn.addEventListener('click', () => {
    inicioCompiten.classList.remove('hidden'); // Quita el hidden de COMPITEN

    inicioPuntajes.classList.add('hidden'); // Añade el hidden a PUNTAJE

    inicioParticipantes.classList.add('hidden'); // Añade el hidden a PARTICIPANTES
});

//PUNTAJE
puntajesBtn.addEventListener('click', () => {
    inicioPuntajes.classList.remove('hidden'); // Quita el hidden de PUNTAJE

    inicioParticipantes.classList.add('hidden'); // Añade el hidden a PARTICIPANTES

    inicioCompiten.classList.add('hidden'); // Añade el hidden a COMPITEN
});