<?php

include("db.php");

if (isset($_POST['registrar'])) {
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $edad = trim($_POST['edad']);
    $escuela = trim($_POST['escuela']);
    $pais = trim($_POST['pais']);
    $ci = ($_POST['ci']);

    $error = false;
    $mensajeError = "";

    if (empty($nombre) || empty($apellido) || empty($edad) || empty($escuela) || empty($pais) || empty($ci)) {
        $error = true;
        $mensajeError = "Ingrese todos los datos solicitados.";
    } elseif (!is_numeric($edad)) {
        $error = true;
        $mensajeError = "La edad debe ser un número.";
    } elseif (!is_numeric($ci) || strlen($ci) !== 8) {
        $error = true;
        $mensajeError = "La C.I debe ser un número de 8 dígitos.";
    } else {
        $consultaEst = "SELECT * FROM estudiante WHERE ci='$ci'";
        $checkDatos = mysqli_query($conexionEst, $consultaEst);

        if (mysqli_num_rows($checkDatos) > 0) {
            $error = true;
            $mensajeError = "Ese CI ya fue utilizada para otra inscripcion.";
        } else {
            $consultaEst = "INSERT INTO estudiante(nombre, apellido, edad, escuela, pais, ci) 
            VALUES ('$nombre','$apellido','$edad','$escuela','$pais', '$ci')";
            $resultadoEst = mysqli_query($conexionEst, $consultaEst);

            if ($resultadoEst) {
                $mensajeExito = "El estudiante ha sido registrado exitosamente.";
            } else {
                $error = true;
                $mensajeError = "Ha ocurrido un error al registrar al estudiante.";
            }
        }
    }
    
}

?>

