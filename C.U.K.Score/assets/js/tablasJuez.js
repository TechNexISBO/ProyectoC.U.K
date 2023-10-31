/* TABLAS JUEZ */
const inicioTorneo = document.getElementById('inicioTorneo')
const inicioKata = document.getElementById('inicioKata')

const torneoBtn = document.getElementById('torneoBtn');
const kataBtn = document.getElementById('kataBtn');

// TABLAS

torneoBtn.addEventListener('click', () => {
    inicioTorneo.classList.remove('hidden');  // Quita el hidden de TORNEO

    inicioKata.classList.add('hidden'); // Añade el hidden a KATAS
});

kataBtn.addEventListener('click', () => {
    inicioKata.classList.remove('hidden'); // Quita el hidden a KATAS

    inicioTorneo.classList.add('hidden');  // Añade el hidden de TORNEO
});