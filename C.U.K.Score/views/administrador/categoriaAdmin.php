<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');
    </style>
    <!-- INICIO DATATABLES -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
    <!-- FIN DATATABLES -->

    <link rel="stylesheet" href="../../assets/css/style.css">
    <title>Torneo</title>
</head>

<body>
    <!-- INICIO HEADER -->
    <header>
        <div class="miniHeader">
            <div class="logo">
                <img src="../../assets/img/logoCUK.png" alt="Logo C.U.K.">
                <h2>C.U.K. Score</h2>
            </div>
            <nav class="links">
                <a href="homeAdmin.html">
                    <img src="../../assets/img/atras.png" alt="Boton para ir atras">
                </a>
                <a href="#">
                    <img src="../../assets/img/ayuda.png" alt="Boton de ayuda">
                </a>
            </nav>
        </div>
    </header>

    <!-- INICIO MAIN -->
    <main >
        <!-- TABLA DE CATEGORIA -->
        <section class="torneoMain">
            <div class="miniTablas">
                <h2>CATEGORIA</h2>
            </div>


            <table id="example" class="table table-striped nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>ID Categoria</th>
                        <th>Genero</th>
                        <th>Equipo</th>
                        <th>Edad</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
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