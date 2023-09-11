<?php

$conexion = mysqli_connect("localhost", "root", "", "cuk_score");

if (isset($_POST['register'])) {
    if (
        strlen($_POST['Genero']) >= 1 &&
        strlen($_POST['Equipo']) >= 1 &&
        strlen($_POST['Edad']) >= 1
    ) {
        $Genero = trim($_POST['Genero']);
        $Equipo = trim($_POST['Equipo']);
        $Edad = trim($_POST['Edad']);

        $crearCategoria = "INSERT INTO Categoria (Genero, Equipo, Edad) VALUES ('$Genero', '$Equipo', '$Edad')";

        if (mysqli_query($conexion, $crearCategoria)) {
            echo "La categoria ha sido agregado exitosamente!";
        } else {
            echo "Ha ocurrido un error al agregar la categoria: " . mysqli_error($conexion);
        }
    }
}
