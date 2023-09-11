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
    <title>Coach</title>
</head>

<body>
      <!-- Inicio del Header -->
      <header>
      <a href="#" class="logo">
        <img src="/C.U.K.Score/assets/img/logoCUK.png" alt="logo C.U.K.">
        <h2 class="nombreAdmin">Administracion</h2>
      </a>
      <nav class="links">
        <a href="/C.U.K.Score/index.php">
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

    <main>
        <section class="tablas">
            <div class="div1">
                <h3>Participantes</h3>
                <a href="agregarParticipante.php">Agregar</a>
                <table class="table table-bordered border-primary">
                    <thead>
                        <tr>
                            <th scope="col">CI</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Fecha de Nacimiento</th>
                            <th scope="col">Modificar</th>
                        </tr>
                    </thead>
                    <?php
                    $sql = "SELECT * FROM persona";
                    $result = mysqli_query($conexion, $sql);

                    while ($mostrar = mysqli_fetch_array($result)) {
                    ?>

                        <tbody class="table-group-divider">
                            <tr>
                                <td><?php echo $mostrar['CI'] ?></td>
                                <td><?php echo $mostrar['Nombre'] ?></td>
                                <td><?php echo $mostrar['Apellido'] ?></td>
                                <td><?php echo $mostrar['Fnac'] ?></td>
                                <th><a href="modificarParticipantes.php?
                                CI=<?php echo $mostrar['CI'] ?> && 
                                Nombre=<?php echo $mostrar['Nombre'] ?> && 
                                Apellido=<?php echo $mostrar['Apellido'] ?> &&
                                Fnac=<?php echo $mostrar['Fnac'] ?>" class="modificar">Modificar</a></th>
                            </tr>
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