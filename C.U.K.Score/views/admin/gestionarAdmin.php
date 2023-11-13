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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- INICO BOOTSTRAP -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- FIN BOOTSTRAP -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Gestionar</title>
</head>

<body>
    <header>
        <div class="icono-menu">
            <img src="assets/img/flechaDoble.svg" alt="flechas" id="icono-menu">
        </div>

        <div class="cont-menu active" id="menu">
            <div class="logo">
                <img src="assets/img/logoCUK.png" alt="logo">
                <?php echo "<h3>{$torneoData["Torneo"]['nombreTorneo']}</h3>"; ?>
            </div>

            <ul>
                <li><a href="#" id="compitenBtn">Compiten</a></li>
                <li><a href="#" id="participantesBtn">Participantes</a></li>
                <li><a href="#" id="puntajesBtn">Puntajes</a></li>
                <li><a href="#" id="katasBtn">Kata</a></li>
            </ul>

            <a href="index.php?c=tablas&a=tablas" class="volver">
                <img src="assets/img/power.svg" alt="voler">
            </a>
        </div>
    </header>

    <main class="home">

        <!-- TABLAS COMPITEN -->
        <section class="formatoTablas" id="inicioCompiten">
            <section class="formato">
                <div class="nombreTabla">
                    <h3>Compiten</h3>
                    <form action="index.php?c=llaves&a=organizar" method="post">
                        <!-- Campo oculto para enviar el idTorneo al servidor -->
                        <input type="hidden" name="idTorneo" value="<?php echo $torneoData["idTorneo"]; ?>">
                        <!-- Botón para enviar el formulario -->
                        <button type="submit" class="btn btn-primary">ORGANIZAR</button>
                    </form>

                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-dark align-middle">
                            <tr>
                                <th>CI</th>
                                <th>Categoria</th>
                                <th>Ronda</th>
                                <th>Cinturon</th>
                                <th>Compite</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($participarData["Torneo"] as $compiten) {
                                echo "<tr>";
                                echo "<td>{$compiten['CI_P']}</td>";
                                echo "<td>{$compiten['idCategoria']}</td>";
                                echo "<td>{$compiten['Ronda']}</td>";
                                echo "<td>{$compiten['Cinturon']}</td>";
                                echo "<td>{$compiten['Compite']}</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </section>

        <!-- TABLAS PARTICIPANTES -->
        <section class="formatoTablas hidden" id="inicioParticipantes">
            <section class="formato">
                <div class="nombreTabla">
                    <h3>Participantes del Torneo</h3>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-dark align-middle">
                            <tr>
                                <th>CI</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Escuela</th>
                                <th>Genero</th>
                                <th>CI Coach</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($participanteData["Torneo"] as $participante) {
                                echo "<tr>";
                                echo "<td>{$participante['CI']}</td>";
                                echo "<td>{$participante['Nombre']}</td>";
                                echo "<td>{$participante['Apellido']}</td>";
                                echo "<td>{$participante['Escuela']}</td>";
                                echo "<td>{$participante['GeneroP']}</td>";
                                echo "<td>{$participante['CI_C']}</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </section>

        <!-- TABLAS PUNTAJES -->
        <section class="formatoTablas hidden" id="inicioPuntajes">
            <section class="formato">
                <div class="nombreTabla">
                    <h3>Puntajes</h3>
                    <form action="index.php?c=llaves&a=organizar" method="post">
                        <!-- Campo oculto para enviar el idTorneo al servidor -->
                        <input type="hidden" name="idTorneo" value="<?php echo $torneoData["idTorneo"]; ?>">
                        <!-- Botón para enviar el formulario -->
                        <button type="submit" class="btn btn-primary">ORGANIZAR</button>
                    </form>

                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-dark align-middle">
                            <tr>
                                <th>CI</th>
                                <th>Categoria</th>
                                <th>Ronda</th>
                                <th>Cinturon</th>
                                <th>Compite</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($participarData["Torneo"] as $compiten) {
                                echo "<tr>";
                                echo "<td>{$compiten['CI_P']}</td>";
                                echo "<td>{$compiten['idCategoria']}</td>";
                                echo "<td>{$compiten['Ronda']}</td>";
                                echo "<td>{$compiten['Cinturon']}</td>";
                                echo "<td>{$compiten['Compite']}</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </section>

        <!-- KATA -->
        <section class="formulario hidden" id="inicioKatas">
            <section class="miniFormulario">

                <div class="nombreForm">
                    <h2>INGRESAR KATA</h2>
                    <p>Ingrese el kata que realizara el participante</p>
                </div>

                <form action="index.php?c=llaves&a=gestionar" method="post" class="form">

                    <!-- CI -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="CI_P" name="CI_P" placeholder="Nombre">
                        <label for="floatingInput">CI</label>
                    </div>

                    <!-- Kata -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="idKata" name="idKata" placeholder="ID KATA">
                        <label for="floatingInput">ID KATA</label>
                    </div>

                    <div class="formFooter">
                        <input type="submit" value="Crear" class="button">
                    </div>
                </form>

            </section>
        </section>

    </main>

    <!-- INICO BOOTSTRAP -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- FIN BOOTSTRAP -->
    <script src="assets/js/admin/gestionarAdmin.js"></script>

</body>

</html>