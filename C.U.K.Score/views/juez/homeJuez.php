<<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_SESSION['idJuez'])) {
        $idJuez = $_SESSION['idJuez'];
    } else {
        header('Location: index.php');
        exit();
    }
    ?> <!DOCTYPE html>
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
                <a href="index.php" class="volver">
                    <img src="assets/img/power.svg" alt="voler">

                    <a href="http://cuk.org.uy/" class="volver">

                    </a>
            </div>
        </header>
        <main class="home">

            <!-- TABLA PARTICIPANTE -->
            <section class="formatoTablas visible" id="inicioParticipante">
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
                                <th>Escuela</th>
                                <th>Kata</th>
                                <th style="display: none;">idKata</th>
                                <th>Cinturon</th>
                                <th>Torneo</th>
                                <th>Categoria</th>
                                <th style="display: none;">idCategoria</th>
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
                                echo "<td>{$participante['Escuela']}</td>";
                                echo "<td>{$participante['nombreKata']}</td>";
                                echo "<td  style='display: none;'>{$participante['idKata']}</td>";
                                echo "<td>{$participante['Cinturon']}</td>";
                                echo "<td>{$participante['idTorneo']}</td>";
                                echo "<td>{$participante['Edad']}</td>";
                                echo "<td  style='display: none;'>{$participante['idCategoria']}</td>";
                                echo "<td><a href='index.php?c=puntaje&a=vistaPuntuar&id=" . $participante["CI"] . "' class='btn btn-success'>Puntuar</a></td>";

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

        </main>
    </body>

    </html>