<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Login</title>
</head>

<body>

    <!-- Inicio Header -->

    <header>
        <a href="#" class="logo">
            <img src="../img/logoCUK.png" alt="logo C.U.K.">
            <h2 class="nombreCUK">C.U.K. Score</h2>
        </a>
        <nav class="links">
            <a href="../index.html">
                <img src="../img/inicio.png" alt="boton de inicio" width="40em">
            </a>
        </nav>
    </header>

    <!-- Fin Header -->

    <!-- Inicio del formulario Login-->

    <section>
        <div class="centrar">
            <form action="validar.php" method="post">
                <h1>Inicio de sesión</h1>
                <input type="text" name="ci" placeholder="C.I." name="ci">
                <input type="password" name="contraseña" placeholder="Contraseña" name="contraseña">
                <input type="submit" value="Ingresar">
            </form>
        </div>
    </section>
    <!-- Fin del formulario Login-->
</body>

</html>
