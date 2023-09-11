<?php
$contraseña = $_POST["contraseñaUser"] AND $CI = $_POST["CI"];

session_start();
$_SESSION["contraseñaUser"] = $contraseña; 

include("../config/db.php");

$consulta = "SELECT * FROM usuario where contraseñaUser='$contraseña' AND tipoUser='Administrador' AND CI='$CI'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);


if ($filas) {
    header("location: ../views/Administrador/homeAdministrador.html");
} else {
?>
    <?php
    require_once("../index.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
<?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);
