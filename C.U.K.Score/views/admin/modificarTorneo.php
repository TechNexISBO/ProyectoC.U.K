<?php
session_start();

if (isset($_SESSION['CI_A'])) {
    $CI_A = $_SESSION['CI_A'];
} else {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- INICO BOOTSTRAP -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- FIN BOOTSTRAP -->
        <link rel="stylesheet" href="assets/css/style.css">
    <title>Modificar</title>
</head>
<body>
    <header>
        <div class="icono-menu">
            <img src="assets/img/flechaDoble.svg" alt="flechas" id="icono-menu">
        </div>

        <div class="cont-menu active" id="menu">
            <div class="logo">
                <img src="assets/img/avatar.svg" alt="logo">
                <h3>Administracion</h3>
            </div>  
        
            <a href="index.php?c=tablas&a=tablas" class="volver">
                <img src="assets/img/power.svg" alt="voler">
            </a>
        </div>
    </header>

    <main class="home">
        <section class="formulario" id="crearTorneo">
            <section class="miniFormulario">

                <div class="nombreForm">
                    <h2>MODIFICA EL TORNEO</h2>
                    <p><span class="nombreApp">C.U.K.Score</span>, pregunta - ¿estas seguro? -</p>
                </div>

                <form action="index.php?c=tablas&a=actualizar" method="post" class="form">
                    <!-- ID TORNEO-->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="idTorneo" name="idTorneo"
                            placeholder="idTorneo" value="<?php echo $torneoData["Torneo"]["idTorneo"] ?>" readonly>
                        <label for="floatingInput">idTorneo</label>
                    </div>

                    <!-- Nombre -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombreTorneo" name="nombreTorneo"
                            placeholder="Nombre" value="<?php echo $torneoData["Torneo"]["nombreTorneo"] ?>">
                        <label for="floatingInput">Nombre</label>
                    </div>

                    <!-- Fecha -->
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="Fecha" name="Fecha" placeholder="Fecha"
                        value="<?php echo $torneoData["Torneo"]["Fecha"] ?>">
                        <label for="floatingInput">Fecha</label>
                    </div>

                    <div class="formFooter">
                        <input type="submit" value="Modificar" class="button">
                    </div>
                </form>

            </section>
        </section>
    </main>
    

    <script src="assets/js/admin/modificarTorneo.js"></script>
</body>
</html>