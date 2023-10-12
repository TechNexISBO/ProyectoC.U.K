<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');
    </style>
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Editar</title>
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
                <a href="index.php?c=torneo&a=torneo">
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
                <form action="index.php?c=torneo&a=actualizar" method="post">
                    <h2><span>Modificar</span></h2>
                    <P>Modifica el torneo</P>
                    <div class="inputs">
                        <input type="hidden" id="idTorneo" name="idTorneo" value="<?php echo $torneoData["idTorneo"]; ?>" />
                        <input type="text" id="nombreTorneo" name="nombreTorneo" value=<?php echo $torneoData["Torneo"]["nombreTorneo"]?>>
                        <input type="date" id="Fcreacion"  name="Fcreacion" value=<?php echo $torneoData["Torneo"]["Fcreacion"]?>>
                        <input type="text" id="Estado"  name="Estado" value=<?php echo $torneoData["Torneo"]["Estado"]?>>
                    </div>
                    <input type="submit" value="Modificar" class="button">
                </form>
            </div>
        </section>
    </main>

    <!-- INICIO FOOTER -->
    <footer></footer>

    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
</body>

</html>