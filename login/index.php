<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosLogin.css">
    <title>Login</title>
</head>

<body>
    <header></header>
    <div class="general">
        <fieldset class="campo">
            <form action="validar.php" method="post">
                <h1>Sistema de login</h1>
                <label>Usuario<input type="text" placeholder="Ingrese su usuario" name="usuario"></label>
                <label>Contraseña<input type="text" placeholder="Ingrese su contraseña" name="contraseña"></label>
                <input type="submit" value="Ingresar" class="btn">
            </form>
        </fieldset>
    </div>
</body>

</html>