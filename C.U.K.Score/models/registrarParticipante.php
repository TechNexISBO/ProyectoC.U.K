<?php

$conexion = mysqli_connect('localhost', 'root', '', 'cuk_score');


if (isset($_POST['register'])) {
    if (
        strlen($_POST['CI']) >= 1 &&
        strlen($_POST['Nombre']) >= 1 &&
        strlen($_POST['Apellido']) >= 1 &&
        strlen($_POST['Fnac']) >= 1
    ) {
        $CI = trim($_POST['CI']);
        $Nombre = trim($_POST['Nombre']);
        $Apellido = trim($_POST['Apellido']);
        $Fnac = trim($_POST['Fnac']);

        $registrarParticipante = "INSERT INTO Persona (CI, Nombre, Apellido, Fnac) VALUES ('$CI', '$Nombre', '$Apellido', '$Fnac')";

        if (mysqli_query($conexion, $registrarParticipante)) {
            echo "El Participante ha sido agregado exitosamente!";
        } else {
            echo "Ha ocurrido un error al agregar al Participante: " . mysqli_error($conexion);
        }
    }
}
