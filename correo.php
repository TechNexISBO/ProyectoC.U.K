<php?

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $categoria = $_POST["categoria"];
    $expectativas = $_POST["expectativas"];
    
    $destinatario = "technex.isbo@gmail.com";
    $asuntoCorreo = "Nueva Solicitud: $nombre $apellido";
    $cuerpo = "Nombre: $nombre\napellido: $apellido\ncorreo: $correo\ncategoria: $categoria\nexpectativas:\n$expectativas";
    
    mail($destinatario, $asuntoCorreo, $cuerpo);
    
    echo "enviado correctamente.";
} else {
    echo "Error al procesar el formulario.";
}

?>