var suma = 5.0;
function sumar() {
  if (suma < 9.9) {
    suma += 0.1;
    document.getElementById("resultado").innerHTML = suma.toFixed(1);
  }
}
function restar() {
  if (suma > 5.0) {
    suma -= 0.1;
    document.getElementById("resultado").innerHTML = suma.toFixed(1);
  }
}
function reiniciar() {
  suma = 5.0;
  document.getElementById("resultado").innerHTML = suma.toFixed(1);
}

function enviar() {
    var resultado = document.getElementById("resultado").value;
    
}