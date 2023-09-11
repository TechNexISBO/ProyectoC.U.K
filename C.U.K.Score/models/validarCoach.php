<?php

$contraseña = $_POST["contraseñaUser"];

session_start();
$_SESSION["contraseñaUser"] = $contraseña;

include("../config/db.php");

$consulta = "SELECT * FROM usuario where contraseñaUser='$contraseña' AND tipoUser='Coach'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);


if ($filas) {
    header("location: /C.U.K.Score/views/Coach/homeCoach.php");
} else {
?>
    <?php
    include("/C.U.K.Score/views/Coach/loginCoach.html");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
<?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);
