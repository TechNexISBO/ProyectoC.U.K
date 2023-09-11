<?php
var_dump($_POST);
$conexion = mysqli_connect("localhost", "root", "", "cuk_score");



if (isset($_POST['idCategoria']) && isset($_POST['Genero']) && isset($_POST['Equipo']) && isset($_POST['Edad'])) {
    $idCategoria = $_POST['idCategoria'];
    $Genero = $_POST['Genero'];
    $Equipo = $_POST['Equipo'];
    $Edad = $_POST['Edad'];
} else {
    die('Faltan datos en POST');
}

$sql = "UPDATE categoria SET Genero='$Genero', Equipo='$Equipo', Edad='$Edad' WHERE idCategoria=$idCategoria";
$rta = mysqli_query($conexion, $sql);

if (!$rta) {
    echo "No se actualizó";
} else {
    header("Location: /C.U.K.Score/views/Administrador/torneosAdministrador.php");
}
