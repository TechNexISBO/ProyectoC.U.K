/* VARIABLES */

// TORNEO
const torneoBtn = document.getElementById('torneoBtn');
const inicioTorneo = document.getElementById('inicioTorneo');

// CREAR TORNEO
const crearTorneoBnt = document.getElementById('crearTorneoBnt');
const crearTorneo = document.getElementById('crearTorneo');

// CATEGORIA
const categoriaBtn = document.getElementById('categoriaBtn');
const inicioCategorias = document.getElementById('inicioCategorias')

// PARTICIPANTE 
const participanteBtn = document.getElementById('participanteBtn');
const inicioParticipantes = document.getElementById('inicioParticipantes')

// COACH
const coachBtn = document.getElementById('coachBtn');
const inicioCoach = document.getElementById('inicioCoach');

// KATA
const kataBtn = document.getElementById('kataBtn');
const inicioKata = document.getElementById('inicioKata');

/* TABLAS */

// TORNEO
torneoBtn.addEventListener('click', () => {
    inicioTorneo.classList.remove('hidden'); // Quita el hidden de TORNEO

    crearTorneo.classList.add('hidden'); // Añade el hidden a CREAR TORNEO

    inicioCategorias.classList.add('hidden'); // Añade el hidden a CATEGORIA
    
    inicioParticipantes.classList.add('hidden'); // Añade el hidden a PARTICIPANTE

    inicioCoach.classList.add('hidden'); // Añade el hidden a COACH

    inicioKata.classList.add('hidden'); // Añade el hidden a KATA
});

// CREAR TORNEO
crearTorneoBnt.addEventListener('click', () => {
    crearTorneo.classList.remove('hidden'); // Quita el hidden en CREAR TORNEO

    inicioCategorias.classList.add('hidden'); // Añade el hidden a CATEGORIA

    inicioParticipantes.classList.add('hidden'); // Añade el hidden a PARTICIPANTE

    inicioCoach.classList.add('hidden'); // Añade el hidden a COACH

    inicioKata.classList.add('hidden'); // Añade el hidden a KATA

    inicioTorneo.classList.add('hidden'); // Añade el hidden de TORNEO
});

// CATEGORIA
categoriaBtn.addEventListener('click', () => {
    inicioCategorias.classList.remove('hidden'); // Quita el hidden de CATEGORIA

    inicioParticipantes.classList.add('hidden'); // Añade el hidden a PARTICIPANTE

    inicioCoach.classList.add('hidden'); // Añade el hidden a COACH

    inicioKata.classList.add('hidden'); // Añade el hidden a KATA

    inicioTorneo.classList.add('hidden'); // Añade el hidden de TORNEO

    crearTorneo.classList.add('hidden'); // Añade el hidden a CREAR TORNEO
});

// PARTICIPANTE
participanteBtn.addEventListener('click', () => {
    inicioParticipantes.classList.remove('hidden'); // Quita el hidden de PARTICIPANTE

    inicioCoach.classList.add('hidden'); // Añade el hidden a COACH

    inicioKata.classList.add('hidden'); // Añade el hidden a KATA

    inicioTorneo.classList.add('hidden'); // Añade el hidden de TORNEO

    crearTorneo.classList.add('hidden'); // Añade el hidden a CREAR TORNEO
    
    inicioCategorias.classList.add('hidden'); // Añade el hidden a CATEGORIA
});

// COACH
coachBtn.addEventListener('click', () => {
    inicioCoach.classList.remove('hidden'); // Quita el hidden de COACH

    inicioKata.classList.add('hidden'); // Añade el hidden a KATA

    inicioTorneo.classList.add('hidden'); // Añade el hidden de TORNEO

    crearTorneo.classList.add('hidden'); // Añade el hidden a CREAR TORNEO

    inicioCategorias.classList.add('hidden'); // Añade el hidden a CATEGORIA

    inicioParticipantes.classList.add('hidden'); // Añade el hidden a PARTICIPANTE
});

// KATA
kataBtn.addEventListener('click', () => {
    inicioKata.classList.remove('hidden'); // Quita el hidden de KATA

    inicioTorneo.classList.add('hidden'); // Añade el hidden de TORNEO

    crearTorneo.classList.add('hidden'); // Añade el hidden a CREAR TORNEO

    inicioCategorias.classList.add('hidden'); // Añade el hidden a CATEGORIA

    inicioParticipantes.classList.add('hidden'); // Añade el hidden a PARTICIPANTE

    inicioCoach.classList.add('hidden'); // Añade el hidden a COACH
});