/* VARIABLE */
const sumaBtn = document.getElementById('sumaBtn');
const restaBtn = document.getElementById('restaBtn');
const inputValor = document.getElementById('Valor');

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

let count = 5.0;
const min = 5.0;
const max = 9.9;

function updateDisplay() {
    inputValor.value = count.toFixed(1);
}

sumaBtn.addEventListener('click', () => {
    if (count < max) {
        count += 0.1;
        updateDisplay();
    }
});

restaBtn.addEventListener('click', () => {
    if (count > min) {
        count -= 0.1;
        updateDisplay();
    }
});

let interval;

sumaBtn.addEventListener('touchstart', () => {
    interval = setInterval(() => {
        if (count < max) {
            count += 0.1;
            updateDisplay();
        }
    }, 100);
});

sumaBtn.addEventListener('touchend', () => {
    clearInterval(interval);
});

restaBtn.addEventListener('touchstart', () => {
    interval = setInterval(() => {
        if (count > min) {
            count -= 0.1;
            updateDisplay();
        }
    }, 100);
});

restaBtn.addEventListener('touchend', () => {
    clearInterval(interval);
});
