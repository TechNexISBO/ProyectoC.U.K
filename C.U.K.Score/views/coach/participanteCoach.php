<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- INICIO DATATABLES -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
    <!-- FIN DATATABLES -->

    <link rel="stylesheet" href="assets/css/style.css">
    <title>Torneo</title>
</head>

<body>
    <!-- INICIO HEADER -->
    <header>
        <div class="miniHeader">
            <div class="logo">
                <img src="assets/img/logoCUK.png" alt="Logo C.U.K.">
                <h2>C.U.K. Score</h2>
            </div>
            
            <nav class="links">
                <a href="index.php">
                    <img src="assets/img/atras.png" alt="Boton para ir atras">
                </a>
                <a href="#">
                    <img src="assets/img/ayuda.png" alt="Boton de ayuda">
                </a>
            </nav>
        </div>
    </header>
    <!-- INICIO MAIN -->
    <main>

        <section class="contenedorPadre">

            <!-- REGISTRO PARTICIPANTE -->
            <section class="contenedor">
                <div class="contenedorForms">
                    <!-- <form action="models/validar.php" method="post"> -->
                    <form id="nuevo" name="nuevo" method="POST" action="../../index.php?c=usuario&a=guarda" autocomplete="off">
                        <h2><span>REGISTRATE</span></h2>
                        <P>Forma parte de C.U.K. Score</P>
                        <div class="inputs">
                            <input type="text" id="CI" oninput="validarNumero(this)" maxlength="8" name="CI" placeholder="CI">
                            <input type="text" id="Nombre" name="Nombre" placeholder="Nombre">
                            <input type="text" id="Apellido" name="Apellido" placeholder="Apellido">
                            <input type="text" id="Escuela" name="Escuela" placeholder="Escuela" />
                            <input type="text" id="Pais" name="Pais" placeholder="Pais">
                            <input type="date" id="Fnac" name="Fnac" placeholder="0000/00/00" />
                        </div>
                        <input type="submit" name="register" id="guarda" class="button">
                    </form>
                </div>
            </section>

            <!-- TABLA DE TORNEO -->
            <section class="torneoMainCoach">
                <div class="miniTablas">
                </div>


                <table id="example" class="table table-striped nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID Torneo</th>
                            <th>Nombre</th>
                            <th>Creacion</th>
                            <th>Estado</th>
                            <th>Editar</th>

                        </tr>
                    </thead>
                    <?php
                    foreach ($participanteData as $participante) {
                        echo "<tr>";
                        echo "<td>{$participante['idTorneo']}</td>";
                        echo "<td>{$participante['nombreTorneo']}</td>";
                        echo "<td>{$participante['Fcreacion']}</td>";
                        echo "<td>{$participante['Estado']}</td>";
                        echo "<td><a href='index.php?c=torneo&a=modificar&id=" . $torneo["idTorneo"] . "' class='btn btn-warning'>Modificar</a></td>";
                        echo "</tr>";
                    }
                    ?>
                    </tbody>

                </table>
            </section>
        </section>
    </main>

    <!-- INICO FOOTER -->
    <footer></footer>

    <!-- INICIO DATATABLES -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
    <script>
        new DataTable('#example', {
            responsive: true
        });
    </script>
    <!-- FIN DATATABLES -->
</body>

</html>