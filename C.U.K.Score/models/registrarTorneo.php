<?php

$conexion = mysqli_connect("localhost", "root", "", "cuk_score");



if (isset($_POST['register'])) {
    if (
        strlen($_POST['nombreTorneo']) >= 1 &&
        strlen($_POST['Fcreacion']) >= 1 &&
        strlen($_POST['Estado']) >= 1
    ) {
        $nombreTorneo = trim($_POST['nombreTorneo']);
        $Fcreacion = trim($_POST['Fcreacion']);
        $Estado = trim($_POST['Estado']);

        $crearTorneo = "INSERT INTO torneo (nombreTorneo, Fcreacion, Estado) VALUES ('$nombreTorneo', '$Fcreacion', '$Estado')";

        if (mysqli_query($conexion, $crearTorneo)) {
            echo "El torneo ha sido agregado exitosamente!";
        } else {
            echo "Ha ocurrido un error al agregar el torneo: " . mysqli_error($conexion);
        }
    }
}
