<?php
var_dump($_POST);
$conexion = mysqli_connect("localhost", "root", "", "cuk_score");



if (isset($_POST['idTorneo']) && isset($_POST['nombreTorneo']) && isset($_POST['Fcreacion']) && isset($_POST['Estado'])) {
    $idTorneo = $_POST['idTorneo'];
    $nombreTorneo = $_POST['nombreTorneo'];
    $Fcreacion = $_POST['Fcreacion'];
    $Estado = $_POST['Estado'];
} else {
    die('Faltan datos en POST');
}

$sql = "UPDATE Torneo SET nombreTorneo='$nombreTorneo', Fcreacion='$Fcreacion', Estado='$Estado' WHERE idTorneo=$idTorneo";
$rta = mysqli_query($conexion, $sql);

if (!$rta) {
    echo "No se actualizó";
} else {
    header("Location: /C.U.K.Score/views/Administrador/torneosAdministrador.php");
}
