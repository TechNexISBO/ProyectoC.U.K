<?php
$ci = $_POST['ci'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['ci'] = $ci;

$conexion = mysqli_connect("localhost", "root", "", "login");

$consulta = "SELECT*FROM usuario where ci='$ci' and contraseña='$contraseña'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);
if ($filas) {
    header("location:homeCoach.php");
} else {
    ?>
    <?php
include "login.php";
    ?>
    <h1>ERROR EN LA AUTENTIFICACION</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>