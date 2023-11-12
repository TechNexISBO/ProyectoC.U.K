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
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- INICO BOOTSTRAP -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- FIN BOOTSTRAP -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Juez</title>
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

            <ul>
                <li><a href="#" id="torneoBtn">Torneo</a></li>
                <li><a href="#" id="kataBtn">Kata</a></li>
            </ul>

            <a href="index.php" class="volver">
                <img src="assets/img/power.svg" alt="voler">

            <a href="http://cuk.org.uy/" class="volver">

            </a>
        </div>
    </header>
    <main class="home">
        <!-- TABLA TORNEO -->
        <section class="formatoTablas visible" id="inicioTorneo">
            <section class="formato">
                <div class="nombreTabla">
                    <h3>Torneo</h3>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-dark align-middle">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Fecha</th>
                                <th>Estado</th>
                                <th>Acceder</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($torneoData as $torneo) {
                                echo "<tr>";
                                echo "<td>{$torneo['idTorneo']}</td>";
                                echo "<td>{$torneo['nombreTorneo']}</td>";
                                echo "<td>{$torneo['Fecha']}</td>";
                                echo "<td>{$torneo['Estado']}</td>";
                                echo "<td><a href='index.php?c=puntaje&a=categoriaJuez&id=" . $torneo["idTorneo"] . "' class='btn btn-success'>Acceder</a></td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </section>

        <!-- TABLA KATA -->
        <section class="formatoTablas hidden" id="inicioKata">
            <section class="formato">
                <div class="nombreTabla">
                    <h3>Katas</h3>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-dark align-middle">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($kataData as $kata) {
                                echo "<tr>";
                                echo "<td>{$kata['idKata']}</td>";
                                echo "<td>{$kata['nombreKata']}</td>";
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
    <script src="assets/js/tablasJuez.js"></script>

    </main>
</body>

</html>