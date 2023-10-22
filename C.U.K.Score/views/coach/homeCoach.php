<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- INICO BOOTSTRAP -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- FIN BOOTSTRAP -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Coach</title>
</head>

<body>
    <header>
        <div class="icono-menu">
            <img src="assets/img/flechaDoble.svg" alt="flechas" id="icono-menu">
        </div>

        <div class="cont-menu active" id="menu">
            <div class="logo">
                <img src="assets/img/avatar-coach.svg" alt="logo">
                <h3>Coach</h3>
            </div>

            <ul>
                <li><a href="#" id="ingresarParticipanteBtn">Ingresar Participante</a></li>
                <li><a href="#" id="participanteBtn">Participantes</a></li>
                <li><a href="#" id="categoriaBtn">Categorias</a></li>
                <li><a href="#" id="torneoBtn">Torneos</a></li>
            </ul>

            <a href="index.php" class="volver">
                <img src="assets/img/power.svg" alt="voler">
            </a>
        </div>
    </header>


    <main class="home">

        <!-- INGRESAR PARTICIPANTES -->
        <section class="formulario visible" id="ingresarParticipante">
            <section class="miniFormulario">

                <div class="nombreForm">
                    <h2>Ingrese a un Paricipante</h2>
                    <p><span class="nombreApp">C.U.K.Score</span> espera con ansias a su alumno</p>
                </div>

                <form action="index.php?c=usuario&a=guarda" method="post" class="form" autocomplete="off">

                    <!-- CI -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="CI" name="CI" placeholder="CI"
                            oninput="validarNumero(this)" maxlength="8" minlength="8">
                        <label for="floatingInput">CI</label>
                    </div>

                    <!-- Nombre -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre">
                        <label for="floatingInput">Nombre</label>
                    </div>

                    <!-- Apellido -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Apellido">
                        <label for="floatingInput">Apellido</label>
                    </div>

                    <!-- Fecha de Nacimiento-->
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="Fnac" name="Fnac" placeholder="DD-MM-YYYY">
                        <label for="floatingInput">Fecha de Nacimiento</label>
                    </div>

                    <!-- Escuela -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="Escuela" name="Escuela" placeholder="Escuela">
                        <label for="floatingInput">Escuela</label>
                    </div>

                    <!-- Pais -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="Pais" name="Pais" placeholder="Pais">
                        <label for="floatingInput">Pais</label>
                    </div>

                    <!-- Categoria -->
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Seleccione una Categoria</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
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
                <div class="busqueda">
                    <form action="" method="get">
                        <input type="text" name="busqueda" class="search">
                        <input type="submit" name="enviar" value="Buscar">
                    </form>
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
                                <th>Pais</th>
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
                                echo "<td>{$partcicipante['Pais']}</td>";
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
                <div class="busqueda">
                    <form action="" method="get">
                        <input type="text" name="busqueda" class="search">
                        <input type="submit" name="enviar" value="Buscar">
                    </form>
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
                                echo "<td>{$categoria['Genero']}</td>";
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

         <!-- TABLA TORNEO -->
        <section class="formatoTablas hidden" id="inicioTorneo">
            <section class="formato">
                <div class="nombreTabla">
                    <h3>Torneo</h3>
                </div>
                <div class="busqueda">
                    <form action="#" method="get">
                        <input type="text" name="busqueda" class="search">
                        <input type="submit" name="enviar" value="Buscar">
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-dark align-middle">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Fcracion</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($torneoData as $torneo) {
                                echo "<tr>";
                                echo "<td>{$torneo['idTorneo']}</td>";
                                echo "<td>{$torneo['nombreTorneo']}</td>";
                                echo "<td>{$torneo['Fcreacion']}</td>";
                                echo "<td>{$torneo['Estado']}</td>";
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
    <script src="assets/js/tablasCoach.js"></script>
</body>

</html>