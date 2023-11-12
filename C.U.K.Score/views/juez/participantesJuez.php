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
    <title>Participantes</title>
</head>

<body>
    <header>
        <div class="icono-menu">
            <img src="assets/img/flechaDoble.svg" alt="flechas" id="icono-menu">
        </div>

        <div class="cont-menu active" id="menu">
            <div class="logo">
                <img src="assets/img/logoCUK.png" alt="logo">
                <h3>C.U.K.Score</h3>
            </div>
            <a href="index.php?c=puntaje&a=homeJuez" class="volver">
                <img src="assets/img/power.svg" alt="voler">
            </a>
        </div>
    </header>

    <!-- TABLA CATEGORIAS -->
    <main class="home">
        <section class="formatoTablas" id="inicioCategorias">
            <section class="formato">
                <div class="nombreTabla">
                    <h3>Participante</h3>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-dark align-middle">
                            <tr>
                                <th>CI</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Categoria</th>
                                <th>Cinturon</th>
                                <th>Puntuar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($participanteData as $participante) {
                                echo "<tr>";
                                echo "<td>{$participante['CI']}</td>";
                                echo "<td>{$participante['Nombre']}</td>";
                                echo "<td>{$participante['Apellido']}</td>";
                                echo "<td>{$participante['Edad']}</td>";
                                echo "<td>{$participante['Cinturon']}</td>";
                                echo "<td>Puntuar</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </section>
    </main>
    <!-- INICO BOOTSTRAP -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- FIN BOOTSTRAP -->
    <script src="assets/js/juez/tablasJuez.js"></script>

</body>

</html>