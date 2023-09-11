<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/C.U.K.Score/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/C.U.K.Score/assets/css/style.css">
    <title>Registrar</title>
</head>

<body>
    <!-- Inicio del Header -->
    <header>
      <a href="#" class="logo">
        <img src="/C.U.K.Score/assets/img/logoCUK.png" alt="logo C.U.K.">
        <h2 class="nombreAdmin">Administracion</h2>
      </a>
      <nav class="links">
        <a href="/C.U.K.Score/views/Administrador/torneosAdministrador.php">
          <img
            src="/C.U.K.Score/assets/img/atras.png"
            alt="boton para ir atras"
            width="40em"
          >
        </a>
        <a href="#">
          <img
            src="/C.U.K.Score/assets/img/ayuda.png"
            alt="boton de ayuda"
            width="40em"
          >
        </a>
      </nav>
    </header>
    <!-- Fin del Header -->
    <main>
    <section>
        <div class="centrar">
            <div class="body">
                <div class="contenedor-principal">
                    <form method="POST">
                        <div class="formularios">
                            <span>Agregar Torneo</span>
                        </div>
                        <div class="inputs">
                            <input type="text" name="nombreTorneo" placeholder="Nombre" />
                            <input type="date" name="Fcreacion" placeholder="Fecha de Creacion" />
                            <input type="text" name="Estado" placeholder="Estado del Torneo" />
                        </div>
                        <input type="submit" name="register" value="Enviar" class="button" />
                    </form>
                </div>
            </div>
        </div>
    </section>
    </main>
    <?php
    include('../../models/registrarTorneo.php');
    ?>

</body>

</html>