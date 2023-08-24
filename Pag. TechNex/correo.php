<php?

if (isset($_POST['enviar'])){
    if (!empty($_POST['nombre'])) && !empty($POST['apellido']) && !empty($POST['correo']) && !empty($POST['categoria']) && !empty($POST['expectativas']) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $categoria = $_POST['expectativas'];
        
        $mail = $_POST['technex.isbo@gmail.com'];

        $headers = "From: noreply@example.com" . "\r\n" .
                   "Reply-To: noreply@example.com" . "\r\n" .
                   "X-Mailer: PHP/" . phpversion();

        $mail = mail( $mail, $nombre, $apellido, $correo, $categoria, $expectativas);

        if($mail){
            echo "Enviado exitosamente"
        }
    }
}

?>