<?php
$CI = $_POST["CI"];
$contraseña = $_POST["contraseñaUser"];

session_start();
$_SESSION["contraseñaUser"] = $contraseña;

include("../config/db.php");

$consulta = "SELECT * FROM usuario where CI='$CI' AND contraseñaUser='$contraseña' AND tipoUser='Administrador'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);


if ($filas) {
    header("location: ../views/Administrador/homeAdministrador.html");
} else {
    ?>
    <?php
    include("C:/xampp/htdocs\C.U.K. Score/views\Administrador\loginAdministrador.html");
    ?>
    <h1 class="errorPhp">ERROR EN LA AUTENTIFICACION</h1>
<?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);
