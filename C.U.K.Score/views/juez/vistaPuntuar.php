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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
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
        <div class="wrapPuntuar">
            <div class="nombrePart">
                <span>
                <?php echo "<h2>{$participanteData["Participante"]['Nombre']}</h2>"; ?>
                <?php echo "<h2>{$participanteData["Participante"]['Apellido']}</h2>"; ?>               
                </span>
            </div>
            <div class="escuelaPart">
                <span>
                    <h2>ESCUELA:</h2>
                    <?php echo "<h2>{$participanteData["Participante"]['Escuela']}</h2>"; ?>    
                </span>
            </div>
            <div class="kataPantallaPuntaje">
                <h2>Kata: </h2>
                <span>
                <?php echo "<h2>{$participanteData["Participante"]['nombreKata']}</h2>"; ?>                    </span>
            </div>

            <div class="sumarPuntos">
                <button class="sumarPuntosBtn">
                    <img src="assets/img/signoSuma.svg" alt="sumarPuntos">

                </button>
            </div>
            <div class="puntosPart">
                <div class="puntos">
                    <span id="spanPuntos">
                        <h2>5.0</h2>
                    </span>
                </div>
            </div>
            <div class="restarPuntos">
                <button class="restarPuntosBtn">
                    <img src="assets/img/signoResta.svg" alt="restarPuntos">

                </button>
            </div>
            <div class="colorCintPantallaPuntaje">
                <h2>Cinturon: </h2>
                <?php echo "<h2>{$participanteData["Participante"]['Cinturon']}</h2>"; ?>                </div>
            <div class="enviarPuntos">
                <button class="enviarPuntosBtn">
                    ENVIAR
                </button>
            </div>
            <div class="categoriaPartPantallaPuntaje">
                <h2>Categoria: </h2>
                <span>
                <?php echo "<h2>{$participanteData["Participante"]['Edad']}</h2>"; ?>                </div>
                </span>
            </div>

        </div>
    </main>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/juez/vistaJuezPuntuar.js"></script>

</body>

</html>