/* TABLAS JUEZ */
const inicioParticipante = document.getElementById('inicioParticipante')
const inicioKata = document.getElementById('inicioKata')

const participanteBtn = document.getElementById('participanteBtn');
const kataBtn = document.getElementById('kataBtn');

// TABLAS

participanteBtn.addEventListener('click', () => {
    inicioParticipante.classList.remove('hidden');  // Quita el hidden de PARTICIPANTE

    inicioKata.classList.add('hidden'); // Añade el hidden a KATAS
});

kataBtn.addEventListener('click', () => {
    inicioKata.classList.remove('hidden'); // Quita el hidden a KATAS

    inicioParticipante.classList.add('hidden');  // Añade el hidden de PARTICIPANTE
});