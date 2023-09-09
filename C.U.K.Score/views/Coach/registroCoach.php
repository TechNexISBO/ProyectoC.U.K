<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../assets/css/style.css" />
  <title>Login</title>
</head>

<body>
  <!-- Inicio Header -->

  <header>
    <a href="#" class="logo">
      <img src="../../assets/img/logoCUK.png" alt="logo C.U.K." />
      <h2 class="nombreCUK">C.U.K. Score</h2>
    </a>
    <nav class="links">
      <a href="../../index.php">
        <img src="../../assets/img/inicio.png" alt="boton de inicio" width="40em" />
      </a>
    </nav>
  </header>

  <!-- Fin Header -->

  <!-- Inicio del formulario Registro-->
  <section>
    <div class="centrar">
      <div class="body">
        <div class="contenedor-principal">
          <form action="../../models/registrarCoach.php" method="post">
            <div class="formularios">
              <span>Registrarse</span>
              <p>Forma parte de C.U.K Score</p>
            </div>
            <div class="inputs">
              <input type="text" oninput="validarNumero(this)" maxlength="8" name="CI" placeholder="CI" />
              <input type="text" name="Nombre" placeholder="Nombre" />
              <input type="text" name="Apellido" placeholder="Apellido" />
              <input type="email" pattern="^[a-zA-Z0-9._%+-]+@+^[a-zA-Z0-9._%+-]+.com$" size="30" required name="Correo" placeholder="Email" />
              <input type="date" name="Fnac" placeholder="0000/00/00" />
              <input type="password" name="contraseñaUser" placeholder="Contraseña" />
            </div>
            <input type="submit" name="register" value="Enviar" class="button" />
          </form>
          <div class="footer-formularios">
            <p>
              Tienes una cuenta? <a href="loginCoach.html">Inicia Sesion</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Fin del formulario Registro-->

  <?php
  include('..\..\models\registrarCoach.php');

  ?>

</body>

</html>