<?php
session_start();

if (isset($_SESSION['CI_C'])) {
    $CI_C = $_SESSION['CI_C'];
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
    <title>Registrar</title>
</head>

<body>
    <header>
        <div class="icono-menu">
            <img src="assets/img/flechaDoble.svg" alt="flechas" id="icono-menu">
        </div>

        <div class="cont-menu active" id="menu">
            <div class="logo">
                <img src="assets/img/logoCUK.png" alt="logo">
                <h3>Coach</h3>
            </div>

            <ul>
                <li><a href="#" id="registrarBtn">Registar</a></li>
                <li><a href="#" id="participanteBtn">Participante</a></li>
                <li><a href="#" id="categoriaBtn">Categoria</a></li>
            </ul>

            <a href="index.php?c=tablas&a=tablasCoach" class="volver">
                <img src="assets/img/power.svg" alt="voler">
            </a>
        </div>
    </header>

    <main class="home">

        <!-- FORMULARIO DE REGISTRAR -->
        <section class="formulario visible" id="registrar">
            <section class="miniFormulario">

                <div class="nombreForm">
                    <h2>Registra</h2>
                    <p><span class="nombreApp">REGISTRA</span> a un participante al torneo, <span class="nombreApp">C.U.K.Score</span><br> lo espera</p>
                </div>


                <form action="index.php?c=tablas&a=guardaParticipa" method="post" class="form">

                    <!-- ID TORNEO-->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="idTorneo" name="idTorneo" placeholder="idTorneo" value="<?php echo $torneoData["Torneo"]["idTorneo"] ?>" readonly>
                        <label for="floatingInput">idTorneo</label>
                    </div>

                    <!-- CI -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="CI_P" name="CI_P" placeholder="CI" oninput="validarNumero(this)" maxlength="8" minlength="8">
                        <label for="floatingInput">CI</label>
                    </div>

                    <!-- CATEGORIA -->
                    <select class="form-select" aria-label="Default select example" id="idCategoria" name="idCategoria">
                        <option selected>Categoria</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                    </select>

                    <div class="formFooter">
                        <input type="submit" value="Ingresar" class="button">
                    </div>
                </form>

            </section>
        </section>

        <!-- TABLAS PARTICIPANTES -->
        <section class="formatoTablas hidden" id="inicioParticipantes">
            <section class="formato">
                <div class="nombreTabla">
                    <h3>Participantes</h3>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-dark align-middle">
                            <tr>
                                <th>CI</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Fnac</th>
                                <th>Escuela</th>
                                <th>Genero</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($partcicipanteData as $partcicipante) {
                                echo "<tr>";
                                echo "<td>{$partcicipante['CI']}</td>";
                                echo "<td>{$partcicipante['Nombre']}</td>";
                                echo "<td>{$partcicipante['Apellido']}</td>";
                                echo "<td>{$partcicipante['Fnac']}</td>";
                                echo "<td>{$partcicipante['Escuela']}</td>";
                                echo "<td>{$partcicipante['GeneroP']}</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </section>

        <!-- TABLA CATEGORIAS -->
        <section class="formatoTablas hidden" id="inicioCategorias">
            <section class="formato">
                <div class="nombreTabla">
                    <h3>Categoria</h3>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-dark align-middle">
                            <tr>
                                <th>ID</th>
                                <th>Genero</th>
                                <th>Equipo</th>
                                <th>Edad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($categoriaData as $categoria) {
                                echo "<tr>";
                                echo "<td>{$categoria['idCategoria']}</td>";
                                echo "<td>{$categoria['GeneroC']}</td>";
                                echo "<td>{$categoria['Equipo']}</td>";
                                echo "<td>{$categoria['Edad']}</td>";
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
    <script src="assets/js/script.js"></script>
    <script src="assets/js/registrar.js"></script>
</body>

</html>