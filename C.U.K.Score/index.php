<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Josefin+Sans&family=Noto+Serif&family=Oswald:wght@500&display=swap");
  </style>
  <link rel="stylesheet" href="/C.U.K.Score/assets/css/style.css">
  <title>C.U.K. Score</title>
</head>

<body>
  <!-- Inicio Header -->

  <header>
    <a href="#" class="logo">
      <img src="/C.U.K.Score/assets/img/logoCUK.png" alt="logo C.U.K.">
      <h2 class="nombreCUK">C.U.K. Score</h2>
    </a>
    <nav class="links">
      <a href="#">
        <img src="/C.U.K.Score/assets/img/atras.png" alt="boton para ir atras" width="40em">
      </a>
      <a href="#">
        <img src="/C.U.K.Score/assets/img/ayuda.png" alt="boton de ayuda" width="40em">
      </a>
    </nav>
  </header>

  <!-- Fin Header -->

  <main>
    <!-- Inicio de contenedores grid y flex - 01 -->

    <div class="contenedor">
      <div class="hijo-contenedor" id="div1">
        <img src="/C.U.K.Score/assets/img/poseKata1.svg" alt="pose de kata">
      </div>
      <div class="hijo-contenedor" id="div2">
        <div class="usuarios-padre">
          <a href="/C.U.K.Score/views/Administrador/loginAdministrador.html" class="usuarios">
            Administracion
          </a>
          <a href="/C.U.K.Score/views/Juez/loginJuez.html" class="usuarios">Juez</a>
          <a href="/C.U.K.Score/views/Coach/loginCoach.html" class="usuarios">Coach</a>
        </div>
      </div>
      <div class="hijo-contenedor" id="div3">
        <img src="/C.U.K.Score/assets/img/poseKata2.svg" alt="pose de kata">
      </div>
    </div>

    <!-- Fin de contenedores grid y flex - 01 -->
  </main>
</body>

</html>