<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\assets\css\style.css">
    <title>Coach</title>
</head>

<body>
    <?php
include "inscripcion.php"
?>
    <header>
    <a href="#" class="logo">
        <img src="../img/logoCuk.png" alt="logo C.U.K.">
        <h2 class="nombreCUK">C.U.K. Score</h2>
      </a>
      <nav class="links">
        <a href="#">
          <img src="../img/atras.png" alt="boton para ir atras" width="40em">
        </a>
        <a href="#">
          <img src="../img/ayuda.png" alt="boton de ayuda" width="40em">
        </a>
      </nav>
    </header>
    <main>

    <div class="general">
        <fieldset class="campo">
            <form method="post">
                <h1>Registro de participante</h1>
                <label>Nombre<input type="text" placeholder="Ingrese el nombre" name="nombre"></label>
                <label>Apellido<input type="text" placeholder="Ingrese el apellido" name="apellido"></label>
                <label>Edad<input type="number" placeholder="Ingrese la edad" name="edad"></label>
                <label>Escuela<input type="text" placeholder="Ingrese la escuela" name="escuela"></label>
                <label>Pais<input type="text" placeholder="Ingrese el pais" name="pais"></label>
                <label>C.I<input type="number" placeholder="Ingrese la C.I" name="ci"></label>
                <input type="submit" name="registrar" value="Registrar" class="btn">
                <?php if ($error) {?>
                    <h3>
                        <?php echo $mensajeError; ?>
                    </h3>
                <?php }?>
                <?php if (isset($mensajeExito)) {?>
                    <h3>
                        <?php echo $mensajeExito; ?>
                    </h3>
                <?php }?>
            </form>
        </fieldset>
    </div>
    </main>
</body>

</html>