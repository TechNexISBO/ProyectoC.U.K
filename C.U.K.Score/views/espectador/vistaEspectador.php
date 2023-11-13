<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torneo</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header>
        <div class="icono-menu">
            <img src="assets/img/flechaDoble.svg" alt="flechas" id="icono-menu">
        </div>

        <div class="cont-menu active" id="menu">
            <div class="logo">
                <img src="assets/img/logoCUK.png" alt="CUK">
            <a href="index.php" class="volver">
                <img src="assets/img/power.svg" alt="voler">
            </a>
            </div>
        </div>
    </header>
    <main class="home">
        <div class="boxParticipante">
        <div class="gridNombrePart">
            <div class="nombrePartEspectador">
                <span id="spanNombrePart">
                <?php echo "<h2>{$participanteData["Participante"]['Nombre']}</h2>"; ?>
                <?php echo "<h2>{$participanteData["Participante"]['Apellido']}</h2>"; ?>
                </span>
            </div>
        </div>
        <div class="gridNombreKata">
        <div class="nombreKata">
                <p>kata</p>
                <span id="spanNombreKata">
                <?php echo "<h2>{$participanteData["Participante"]['nombreKata']}</h2>"; ?>
                </span>
            </div>
        </div>
        <div class="gridColorCint">
            <h2>cinturón</h2>
            <?php echo "<h2>{$participanteData["Participante"]['Cinturon']}</h2>"; ?>
        </div>
        <div class="gridEscuelaNom">
            <h2>escuela</h2>
            <?php echo "<h2>{$participanteData["Participante"]['Escuela']}</h2>"; ?>
        </div>
        <div class="gridCajaPuntaje">
        <h2>PUNTAJE</h2>
            <div class="cajaPuntaje">
                <span id="spanPuntaje">
                <?php echo "<h2>{$participanteData["Participante"]['valorTotal']}</h2>"; ?>
                </span>
            </div>
        </div>
        <div class="gridCategoria">
        <h2>categoria</h2>
        <?php echo "<h2>{$participanteData["Participante"]['Edad']}</h2>"; ?>
        </div>
        </div>
    </main>
</body>
</html>
