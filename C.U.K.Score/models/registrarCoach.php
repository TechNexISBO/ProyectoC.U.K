<?php

$conexion = mysqli_connect("localhost", "root", "", "cuk_score");


if (isset($_POST['register'])) {
    if (
        strlen($_POST['CI']) >= 1 &&
        strlen($_POST['Nombre']) >= 1 &&
        strlen($_POST['Apellido']) >= 1 &&
        strlen($_POST['Correo']) >= 1 &&
        strlen($_POST['Fnac']) >= 1 &&
        strlen($_POST['contraseñaUser']) >= 1
    ) {
        $ci = trim($_POST['CI']);
        $nombre = trim($_POST['Nombre']);
        $apellido = trim($_POST['Apellido']);
        $correo = trim($_POST['Correo']);
        $contraseña = trim($_POST['contraseñaUser']);
        $fnac = trim($_POST['Fnac']);

        // Insertar en la tabla 'Persona'
        $consulta_persona = "INSERT INTO Persona (CI, Nombre, Apellido, Correo, Fnac)
         VALUES ('$ci', '$nombre', '$apellido', '$correo', '$fnac')";

        // Ejecutar la inserción en la tabla 'Persona'
        if (mysqli_query($conexion, $consulta_persona)) {
            // Insertar en la tabla 'Usuario'
            $consulta_usuario = "INSERT INTO Usuario (CI, tipoUser, contraseñaUser) VALUES ('$ci', 'Coach', '$contraseña')";
            mysqli_query($conexion, $consulta_usuario);

            // Insertar en la tabla 'Coach'
            $consulta_coach = "INSERT INTO Coach (CI) VALUES ('$ci')";
            mysqli_query($conexion, $consulta_coach);

            echo "Registro exitoso en todas las tablas.";
        } else {
            echo "Error en la inserción en la tabla 'Persona': " . mysqli_error($conexion);
        }
    }
}
