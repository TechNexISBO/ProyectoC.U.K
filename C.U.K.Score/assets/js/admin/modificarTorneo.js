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