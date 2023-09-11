<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/C.U.K.Score/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/C.U.K.Score/assets/css/style.css">
    <title>Modificar</title>
</head>

<body>
      <!-- Inicio del Header -->
      <header>
      <a href="#" class="logo">
        <img src="/C.U.K.Score/assets/img/logoCUK.png" alt="logo C.U.K.">
        <h2 class="nombreAdmin">Administracion</h2>
      </a>
      <nav class="links">
        <a href="/C.U.K.Score/views/Coach/homeCoach.php">
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

    <?php
    $CI = $_GET['CI'];
    $Nombre = $_GET['Nombre'];
    $Apellido = $_GET['Apellido'];
    $Fnac = $_GET['Fnac'];
    ?>

    <section>
        <a href="/index.php"></a>
        <div class="centrar">
            <div class="boGET">
                <div class=" contenedor-principal">
                    <form method="POST" action="/C.U.K.Score/models/sp_modificarParticipantes.php">
                        <div class="formularios">
                            <span>Modificar datos</span>
                        </div>
                        <div class="inputs">
                            <input type="text" name="CI" value="<?= $CI ?>" placeholder="CI">
                            <input type="text" name="Nombre" value="<?= $Nombre ?>" placeholder="Nombre" />
                            <input type="text" name="Apellido" value="<?= $Apellido ?>" placeholder="Apellido" />
                            <input type="date" name="Fnac" value="<?= $Fnac ?>" placeholder="Fecha de nacimiento" />

                        </div>
                        <input type="submit" name="register" value="Actualizar" class="button" />

                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>