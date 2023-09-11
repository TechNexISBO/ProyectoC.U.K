<?php
	$conexion = mysqli_connect("localhost", "root", "", "cuk_score");
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Josefin+Sans&family=Noto+Serif&family=Oswald:wght@500&display=swap");
    </style>
    <link rel="stylesheet" href="/C.U.K.Score/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/C.U.K.Score/assets/css/style.css">
    <title>Torneos</title>
</head>

<body>
     <!-- Inicio del Header -->
     <header>
      <a href="#" class="logo">
        <img src="/C.U.K.Score/assets/img/logoCUK.png" alt="logo C.U.K.">
        <h2 class="nombreAdmin">Administracion</h2>
      </a>
      <nav class="links">
        <a href="/C.U.K.Score/views/Administrador/homeAdministrador.html">
          <img
            src="/C.U.K.Score/assets/img/atras.png"
            alt="boton para ir atras"
            width="40em"
          >
        </a>
        <a href="#">
          <img
            src="/C.U.K.Score/assets/img/ayuda.png"
            alt="boton de ayuda"
            width="40em"
          >
        </a>
      </nav>
    </header>
    <!-- Fin del Header -->
    <main class="mainAdmin">
        <section class="tablas">
            <div class="tabla1">
                <h3>Torneos</h3>
                <a href="agregarTorneo.php">Agregar Torneo</a>
                <table class="table table-bordered border-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID Torneo</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Fecha de Creacion</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acceder</th>
                            <th scope="col">Opciones</th>

                        </tr>
                    </thead>
                    <?php
                    $sqlTorneo = "SELECT * FROM torneo";
                    $resultTorneo = mysqli_query($conexion, $sqlTorneo);

                    while ($mostrarTorneo = mysqli_fetch_array($resultTorneo)) {
                    ?>

                        <tbody class="table-group-divider">
                            <tr>
                                <th scope="row"><?php echo $mostrarTorneo['idTorneo'] ?></th>
                                <td><?php echo $mostrarTorneo['nombreTorneo'] ?></td>
                                <td><?php echo $mostrarTorneo['Fcreacion'] ?></td>
                                <td><?php echo $mostrarTorneo['Estado'] ?></td>
                                <th>Acceder</th>
                                <th><a href="modificarAdministrador.php?
                                idTorneo=<?php echo $mostrarTorneo['idTorneo'] ?> & 
                                nombreTorneo=<?php echo $mostrarTorneo['nombreTorneo'] ?> & 
                                Fcreacion=<?php echo $mostrarTorneo['Fcreacion'] ?> &
                                Estado=<?php echo $mostrarTorneo['Estado'] ?>" class="modificar">Modificar</a></th>
                            </tr>

                        </tbody>

                    <?php
                    }
                    ?>
                </table>
            </div>
            <div class="tabla2">
                <h3>Categoria</h3>
                <a href="agregarCategoria.php">Agregar Categoria</a>
                <table class="table table-bordered border-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID Categoria</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Equipo</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Opciones</th>

                        </tr>
                    </thead>
                    <?php
                    $sqlCategoria = "SELECT * FROM categoria";
                    $resultCategoria = mysqli_query($conexion, $sqlCategoria);

                    while ($mostrarCategoria = mysqli_fetch_array($resultCategoria)) {
                    ?>

                        <tbody class="table-group-divider">
                            <tr>
                                <th scope="row"><?php echo $mostrarCategoria['idCategoria'] ?></th>
                                <td><?php echo $mostrarCategoria['Genero'] ?></td>
                                <td><?php echo $mostrarCategoria['Equipo'] ?></td>
                                <td><?php echo $mostrarCategoria['Edad'] ?></td>
                                <th><a href="modificarCAdministrador.php?
                                idTorneo=<?php echo $mostrarCategoria['idCategoria'] ?> & 
                                nombreTorneo=<?php echo $mostrarCategoria['Genero'] ?> & 
                                Fcreacion=<?php echo $mostrarCategoria['Equipo'] ?> &
                                Estado=<?php echo $mostrarCategoria['Edad'] ?>" class="modificar">Modificar</a></th>
                            </tr>

                        </tbody>

                    <?php
                    }
                    ?>
                </table>
            </div>
        </section>
    </main>

    <script src="/C.U.K.Score/assets/js/bootstrap.min.js"></script>
    <script src=""></script>
</body>

</html>