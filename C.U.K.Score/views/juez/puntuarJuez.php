<?php
session_start();

if (isset($_SESSION['idJuez'])) {
    $idJuez = $_SESSION['idJuez'];
} else {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- INICO BOOTSTRAP -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- FIN BOOTSTRAP -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Puntuar</title>
</head>

<body>
    <header>
        <div class="icono-menu">
            <img src="assets/img/flechaDoble.svg" alt="flechas" id="icono-menu">

        </div>

        <div class="cont-menu active" id="menu">
            <div class="logo">
                <img src="assets/img/logoCUK.png" alt="CUK">
                <a href="index.php?c=puntaje&a=homeJuez" class="volver">
                    <img src="assets/img/power.svg" alt="voler">
                </a>
            </div>
        </div>
    </header>

    <main class="home">
        <section class="puntajeMain">
            <div class="datosParticipante">
                <!-- NOMBRE -->
                <div class="nombre">
                    <?php echo "<h2>{$participanteData["Participante"]['Nombre']}</h2>"; ?>
                    <?php echo "<h2>{$participanteData["Participante"]['Apellido']}</h2>"; ?>
                </div>

                <!-- ESCUELA -->
                <div class="escuela">
                    <?php echo "<h2>{$participanteData["Participante"]['Escuela']}</h2>"; ?>
                </div>

                <!-- KATA -->
                <div class="kata">
                    <?php echo "<h2>{$participanteData["Participante"]['nombreKata']}</h2>"; ?> </span>
                </div>
            </div>

            <div class="datosEnviar">
                <!-- BOTON DE SUMA -->
                <div class="suma">
                    <button class="variar">
                        <img src="assets/img/signoSuma.svg" alt="" id="sumaBtn">
                    </button>
                </div>

                <!-- ENVIAR -->
                <form action="index.php?c=puntaje&a=enviarPuntaje" method="post" class="enviar">
                    <div class="puntaje">
                        <input type="text" name="Valor" id="Valor" value="5.0" readonly>
                    </div>
                    <input type="text" name="CI_P" id="CI_P" <?php echo "value='{$participanteData["Participante"]['CI']}'"; ?>  style="display: none;">
                    <input type="text" name="idTorneo" id="idTorneo" <?php echo "value='{$participanteData["Participante"]['idTorneo']}'"; ?>  style="display: none;">
                    <input type="text" name="idKata" id="idKata" <?php echo "value='{$participanteData["Participante"]['idKata']}'"; ?>  style="display: none;">
                    <input type="text" name="idCategoria" id="idCategoria" <?php echo "value='{$participanteData["Participante"]['idCategoria']}'"; ?>  style="display: none;">

                    <div class="boton">
                        <input type="submit" value="Enviar">
                    </div>
                </form>

                <!-- BOTON DE RESTA -->
                <div class="resta">
                    <button class="variar">
                        <img src="assets/img/signoResta.svg" alt="" id="restaBtn">
                    </button>
                </div>
            </div>

            <div class="datosTorneo">
                <!-- CINTURON -->
                <div class="cinturon">
                    <h2>Cinturon: </h2>
                    <?php echo "<h2>{$participanteData["Participante"]['Cinturon']}</h2>"; ?>
                </div>
                <!-- CATEGORIA -->
                <div class="categoria">
                    <h2>Categoria: </h2>
                    <?php echo "<h2>{$participanteData["Participante"]['Edad']}</h2>"; ?>
                </div>
            </div>


            </div>
            </div>
        </section>

    </main>

    <script src="assets/js/juez/puntuarJuez.js"></script>
</body>

</html>