/* TABLAS */
const inicioTorneo = document.getElementById('inicioTorneo');
const inicioCategorias = document.getElementById('inicioCategorias');
const inicioParticipantes = document.getElementById('inicioParticipantes');
const inicioCoach = document.getElementById('inicioCoach');

const torneoBtn = document.getElementById('torneoBtn');
const categoriaBtn = document.getElementById('categoriaBtn');
const participanteBtn = document.getElementById('participanteBtn');
const coachBtn = document.getElementById('coachBtn');

// TABLAS
torneoBtn.addEventListener('click', () => {
    inicioTorneo.classList.remove('hidden'); // Quita el hidden de TORNEO

    inicioCategorias.classList.add('hidden'); // Añade el hidden a CATEGORIA

    inicioParticipantes.classList.add('hidden'); // Añade el hidden a PARTICIPANTES

    inicioCoach.classList.add('hidden'); // Añade el hidden a COACHES
});

categoriaBtn.addEventListener('click', () => {

    inicioCategorias.classList.remove('hidden'); // Quita el hidden de CATEGORIA

    inicioTorneo.classList.add('hidden'); // Añade el hidden a TORNEO

    inicioParticipantes.classList.add('hidden'); // Añade el hidden a PARTICIPANTES

    inicioCoach.classList.add('hidden'); // Añade el hidden a COACHES
});

participanteBtn.addEventListener('click', () => {

    inicioParticipantes.classList.remove('hidden'); // Quita el hidden de PARTICIPANTES

    inicioCategorias.classList.add('hidden'); // Añade el hidden a CATEGORIA
 
    inicioCoach.classList.add('hidden'); // Añade el hidden a COACHES

    inicioTorneo.classList.add('hidden'); // Añade el hidden a TORNEO
});

coachBtn.addEventListener('click', () => {

    inicioCoach.classList.remove('hidden'); // Quita el hidden de COACHES

    inicioParticipantes.classList.add('hidden'); // Añade el hidden a PARTICIPANTES

    inicioCategorias.classList.add('hidden'); // Añade el hidden a CATEGORIA

    inicioTorneo.classList.add('hidden'); // Añade el hidden a TORNEO
});