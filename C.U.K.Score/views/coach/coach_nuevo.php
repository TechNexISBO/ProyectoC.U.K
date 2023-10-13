<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <title>Registro</title>
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
                <!-- <form action="models/validar.php" method="post"> -->
                <form id="nuevo" name="nuevo" method="POST" action="../../index.php?c=usuario&a=guarda" autocomplete="off">
                    <h2><span>REGISTRATE</span></h2>
                    <P>Forma parte de C.U.K. Score</P>
                    <div class="inputs">
                        <input type="text" id="CI" oninput="validarNumero(this)" maxlength="8" name="CI" placeholder="CI">
                        <input type="text" id="Nombre" name="Nombre" placeholder="Nombre">
                        <input type="text" id="Apellido" name="Apellido" placeholder="Apellido">
                        <input type="email" id="Correo" pattern="^[a-zA-Z0-9._%+-]+@gmail.com$" size="30" required name="Correo" placeholder="Email" />
                        <input type="date" id="Fnac" name="Fnac" placeholder="0000/00/00" />
                        <input type="password" id="contraseñaUser" name="contraseñaUser" placeholder="Contraseña" />
                    </div>
                    <input type="submit" name="register" id="guarda" class="button">
                </form>
                <div class="footerForm">
                    <p>Ya tienes una cuenta? <a href="../coach/coach_login.php"><br>INICIA SESION</a></p>
                </div>
            </div>
        </section> 
    </main>

    <!-- INICIO FOOTER -->
    <footer></footer>
</body>

</html>