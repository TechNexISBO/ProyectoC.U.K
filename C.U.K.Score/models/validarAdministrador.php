<?php

$contraseña = $_POST["contraseñaUser"];

session_start();
$_SESSION["contraseñaUser"] = $contraseña;

include("../config/db.php");

$consulta = "SELECT * FROM usuario where contraseñaUser='$contraseña' AND tipoUser='Administrador'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);


if ($filas) {
    header("location: /C.U.K.Score/views/Administrador/homeAdministrador.html");
} else {
?>
    <?php
    include("../../views/Administrador/loginAdministrador.html");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
<?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);
