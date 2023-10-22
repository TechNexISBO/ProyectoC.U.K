/* TABLAS COACH */
const ingresarParticipante = document.getElementById('ingresarParticipante');
const inicioParticipantes = document.getElementById('inicioParticipantes');
const inicioCategorias = document.getElementById('inicioCategorias');
const inicioTorneo = document.getElementById('inicioTorneo')

const ingresarParticipanteBtn = document.getElementById('ingresarParticipanteBtn');
const participanteBtn = document.getElementById('participanteBtn');
const categoriaBtn = document.getElementById('categoriaBtn');
const torneoBtn = document.getElementById('torneoBtn');

// TABLAS 
ingresarParticipanteBtn.addEventListener('click', () =>{
    ingresarParticipante.classList.remove('hidden'); // Quita el hidden del INGRESAR PARTICIPANTES

    inicioParticipantes.classList.add('hidden');  // Añade el hidden a PARTICIPANTES

    inicioCategorias.classList.add('hidden');  // Añade el hidden a CATEGORIA

    inicioTorneo.classList.add('hidden'); // Añade el hidden a TORNEO
});

participanteBtn.addEventListener('click', () => {
    inicioParticipantes.classList.remove('hidden'); //Quita el hidden a PARTICIPANTES

    inicioCategorias.classList.add('hidden');  // Añade el hidden a CATEGORIA

    inicioTorneo.classList.add('hidden'); // Añade el hidden a TORNEO

    ingresarParticipante.classList.add('hidden'); // Añade el hidden al INGRESAR PARTICIPANTES
});

categoriaBtn.addEventListener('click', () => {
    inicioCategorias.classList.remove('hidden');  // Quita el hidden a CATEGORIA

    inicioTorneo.classList.add('hidden'); // Añade el hidden a TORNEO

    ingresarParticipante.classList.add('hidden'); // Añade el hidden al INGRESAR PARTICIPANTES

    inicioParticipantes.classList.add('hidden');  // Añade el hidden a PARTICIPANTES
});

torneoBtn.addEventListener('click', () => {
    inicioTorneo.classList.remove('hidden'); // Quita el hidden a TORNEO

    ingresarParticipante.classList.add('hidden'); // Añade el hidden al INGRESAR PARTICIPANTES

    inicioParticipantes.classList.add('hidden');  // Añade el hidden a PARTICIPANTES

    inicioCategorias.classList.add('hidden');  // Añade el hidden a CATEGORIA
});