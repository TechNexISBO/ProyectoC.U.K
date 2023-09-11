<?php
var_dump($_POST);
$conexion = mysqli_connect('localhost', 'root', '', 'cuk_score');

if (isset($_POST['CI']) && isset($_POST['Nombre']) && isset($_POST['Apellido']) && isset($_POST['Fnac'])) {
    $CI = $_POST['CI'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Fnac = $_POST['Fnac'];
} else {
    die('Faltan datos en POST');
}

$sql = "UPDATE Persona SET CI='$CI', Nombre='$Nombre', Apellido='$Apellido', Fnac='$Fnac' WHERE CI=$CI";
$rta = mysqli_query($conexion, $sql);

if (!$rta) {
    echo "No se actualizó";
} else {
    header("Location: /C.U.K.Score/views/Coach/homeCoach.php");
}
