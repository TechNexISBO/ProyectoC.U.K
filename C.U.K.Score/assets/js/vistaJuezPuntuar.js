const sumarPuntosBtn = document.querySelector('.sumarPuntosBtn');
const restarPuntosBtn = document.querySelector('.restarPuntosBtn');
const spanPuntos = document.getElementById('spanPuntos');

let count = 5.0;
const min = 5.0;
const max = 10.0;

sumarPuntosBtn.addEventListener('click', () => {
  if(count < max) { 
    count += 0.1;
    updateDisplay();
  }
});

restarPuntosBtn.addEventListener('click', () => {
  if(count > min) {
    count -= 0.1; 
    updateDisplay();
  }
});

function updateDisplay() {
  count = Math.min(max, Math.max(min, count));
  
  spanPuntos.querySelector('h2').textContent = count.toFixed(1);
}

let interval;

sumarPuntosBtn.addEventListener('touchstart', () => {
  interval = setInterval(() => {
    if(count < max) {
      count += 0.1;
      updateDisplay();
    }
  }, 100); 
});

sumarPuntosBtn.addEventListener('touchend', () => {
  clearInterval(interval);
});

restarPuntosBtn.addEventListener('touchstart', () => {
  interval = setInterval(() => {
    if(count > min) {
      count -= 0.1;
      updateDisplay();
    }
  }, 100);
});

restarPuntosBtn.addEventListener('touchend', () => {
  clearInterval(interval);
});