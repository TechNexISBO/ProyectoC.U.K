<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');
    </style>
    <link rel="stylesheet" href="../../assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <title>Login</title>
</head>

<body>
    <!-- INICIO HEADER -->
    <header>
        <div class="miniHeader">
            <div class="logo">
                <img src="../../assets/img/logoCUK.png" alt="Logo C.U.K.">
                <h2>C.U.K. Score</h2>
            </div>
            <nav class="links">
                <a href="../../index.php">
                    <img src="../../assets/img/atras.png" alt="Boton para ir atras">
                </a>
                <a href="#">
                    <img src="../../assets/img/ayuda.png" alt="Boton de ayuda">
                </a>
            </nav>
        </div>
    </header>

    <!-- INICIO MAIN -->
    <main>
        <section class="contenedor">
            <div class="contenedorForms">
                <form action="../../index.php?c=usuario&a=validar" method="post">
                    <h2><span>INICIA SESIÓN</span></h2>
                    <P>C.U.K. Score nunca te pedira tu contraseña</P>
                    <div class="inputs">
                        <input type="text" placeholder="CI" oninput="validarNumero(this)" maxlength="8" name="CI">
                        <input type="password" placeholder="Contraseña" name="contraseñaUser">
                    </div>
                    <input type="submit" value="Ingresar" class="button">
                </form>
            </div>
        </section>
    </main>

    <!-- INICIO FOOTER -->
    <footer></footer>

    <script src="../../assets/js/bootstrap/bootstrap.min.js"></script>
</body>

</html>