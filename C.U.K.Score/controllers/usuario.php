<?php
class usuarioController
{

    public function __construct()
    {
        require_once "models/usuarioModel.php";
    }

    public function index()
    {
        require_once "views/inicio.html";
    }


    // GUARDA LA INFORMACION NECESARIA PARA CREAR UN USUARIO COACH
    public function guarda()
    {
        // OBTIENE LOS DATOS DEL FORMULARIO
        $CI = $_POST['CI'];
        $Nombre = $_POST['Nombre'];
        $Apellido = $_POST['Apellido'];
        $Correo = $_POST['Correo'];
        $Fnac = $_POST['Fnac'];
        $contraseñaUser = $_POST['contraseñaUser'];

        // LLAMA A LA FUNCION DE usuarioModel.php
        $user = new usuario_Model();
        $user->insertar($CI, $Nombre, $Apellido, $Correo, $Fnac, $contraseñaUser);
        $this->index();
    }



    // VALIDA EL INICIO DE SESION DE LAS CUENTAS ADMIN Y COACH
    public function validar()
    {
        session_start();
        $CI = $_POST['CI'];
        $contraseñaUser = $_POST['contraseñaUser'];

        $user = new usuario_Model();
        $usuario = $user->get_validar($CI, $contraseñaUser);

        if ($usuario) {
            switch ($usuario['tipoUser']) {
                case 'Administrador':
                    $_SESSION['CI_A'] = $CI;
                    header("Location: index.php?c=tablas&a=tablas");
                    break;
                case 'Coach':
                    $_SESSION['CI_C'] = $CI;
                    header("Location: index.php?c=tablas&a=tablasCoach");
                    break;
                default:
                    require_once("index.php");
                    echo '<h1 class="error">TIPO DE USUARIO DESCONOCIDO</h1>';
                    break;
            }
        } else {
            require_once("index.php");
            echo '<h1 class="error">ERROR EN LA AUTENTICACIÓN</h1>';
        }
    }

    public function validarJuez()
    {

        session_start();
        $idJuez = $_POST['idJuez'];
        $contraseñaUser = $_POST['contraseñaUser'];

        $user = new usuario_Model();
        $juez = $user->get_validarJuez($idJuez, $contraseñaUser);

        if ($juez) {
            $_SESSION['idJuez'] = $idJuez;
            // Redirige a la página que desees después de iniciar sesión
            header('Location: index.php?c=puntaje&a=homeJuez');

            exit();
        } else {
            // Lógica para manejar la autenticación fallida, por ejemplo, mostrar un mensaje de error.
        }
    }

    public function cerrar()
    {
        session_destroy();
        require_once "views/inicio.html";
    }
}
