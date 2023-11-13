const menuBtn = document.querySelector('#menu');
const menu = document.querySelector('.menu');

menuBtn.addEventListener('change', (e) => {
  if (e.target.checked) {
    menu.hidden = false;
  } else {
    menu.hidden = true;
  }
});