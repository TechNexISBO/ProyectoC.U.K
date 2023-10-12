<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');
    </style>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Nuevo</title>
</head>

<body>
    <!-- INICIO HEADER -->
    <header>
        <div class="miniHeader">
            <div class="logo">
                <img src="assets/img/logoCUK.png" alt="Logo C.U.K.">
                <h2>C.U.K. Score</h2>
            </div>
            <nav class="links">
                <a href="index.php">
                    <img src="assets/img/atras.png" alt="Boton para ir atras">
                </a>
                <a href="#">
                    <img src="assets/img/ayuda.png" alt="Boton de ayuda">
                </a>
            </nav>
        </div>
    </header>
    <!-- INICIO MAIN -->
    <main>
        <section class="contenedor">
            <div class="contenedorForms">
                <!-- <form action="models/validar.php" method="post"> -->
                <form id="nuevo" name="nuevo" method="POST" action="index.php?c=torneo&a=guarda" autocomplete="off">
                    <h2><span>Torneo</span></h2>
                    <P>Crea un nuevo torneo</P>
                    <div class="inputs">
                        
                        <input type="text" id="nombreTorneo" name="nombreTorneo" >
                        <input type="date" id="Fcreacion" name="Fcreacion" >
                        <input type="text" id="Estado" names="Estado">
                    </div>
                    <input type="submit" name="agregar" id="guarda" class="button">
                </form>
            </div>
        </section> 
    </main>

    <!-- INICIO FOOTER -->
    <footer></footer>
</body>

</html>