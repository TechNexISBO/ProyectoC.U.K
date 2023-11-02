<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- INICO BOOTSTRAP -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- FIN BOOTSTRAP -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Administracion</title>
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

            <ul>
                <li><a href="#" id="torneoBtn">Torneos</a></li>
                <li><a href="#" id="categoriaBtn">Categorias</a></li>
                <li><a href="#" id="participanteBtn">Participantes</a></li>
                <li><a href="#" id="coachBtn">Coaches</a></li>
                <li><a href="#" id="kataBtn">Katas</a></li>
            </ul>

            <a href="index.php" class="volver">
                <img src="assets/img/power.svg" alt="voler">
            </a>
        </div>
    </header>

    <main class="home">

        <!-- TABLA TORNEO -->
        <section class="formatoTablas visible" id="inicioTorneo">
            <section class="formato">
                <div class="nombreTabla">
                    <h3>Torneo</h3>
                    <a href="#" id="crearTorneoBnt" class="btn btn-primary">AGREGAR</a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-dark align-middle">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Fecha</th>
                                <th>Estado</th>
                                <th>Editar</th>
                                <th>Ingresar</th>
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
                                echo "<td><a href='index.php?c=tablas&a=modificar&id=" . $torneo["idTorneo"] . "' class='btn btn-warning'>Modificar</a></td>";
                                echo "<td>Ingresar</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </section>

        <!-- CREAR TORNEO -->
        <section class="formulario hidden" id="crearTorneo">
            <section class="miniFormulario">

                <div class="nombreForm">
                    <h2>CREA UN TORNEO</h2>
                    <p><span class="nombreApp">C.U.K.Score</span> espera con ansias el torneo</p>
                </div>

                <form action="index.php?c=tablas&a=guarda" method="post" class="form">

                    <!-- Nombre -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombreTorneo" name="nombreTorneo"
                            placeholder="Nombre">
                        <label for="floatingInput">Nombre</label>
                    </div>

                    <!-- Fecha -->
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="Fecha" name="Fecha" placeholder="Fecha">
                        <label for="floatingInput">Fecha</label>
                    </div>

                    <div class="formFooter">
                        <input type="submit" value="Crear" class="button">
                    </div>
                </form>

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
                                <th>CI Coach</th>
                                <th>Eliminar</th>
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
                                echo "<td>{$partcicipante['CI_C']}</td>";
                                echo "<td><a href='index.php?c=tablas&a=eliminarParticipante&id=" . $partcicipante["CI"] . "' class='btn btn-danger'>Eliminar</a></td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </section>

        <!-- TABLA COACHES -->
        <section class="formatoTablas hidden" id="inicioCoach">
            <section class="formato">
                <div class="nombreTabla">
                    <h3>Coach</h3>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-dark align-middle">
                            <tr>
                                <th>ID Usuario</th>
                                <th>CI</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Fnac</th>
                                <th>Correo</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($coachData as $coach) {
                                echo "<tr>";
                                echo "<td>{$coach['idUser']}</td>";
                                echo "<td>{$coach['CI']}</td>";
                                echo "<td>{$coach['Nombre']}</td>";
                                echo "<td>{$coach['Apellido']}</td>";
                                echo "<td>{$coach['Fnac']}</td>";
                                echo "<td>{$coach['Correo']}</td>";
                                echo "<td><a href='index.php?c=tablas&a=eliminarCoach&id=" . $coach["CI"] . "' class='btn btn-danger'>Eliminar</a></td>";
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
                            foreach ($kataDato as $kata) {
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

    <script src="assets/js/script.js"></script>
    <script src="assets/js/admin.js"></script>
</body>

</html>