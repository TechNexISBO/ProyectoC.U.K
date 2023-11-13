<?php
class puntajeController
{

    public function __construct()
    {
        require_once "models/puntajeModel.php";
    }

    public function homeJuez()
    {
        $user = new  puntaje_Model();

        //TABLA TORNEO
        $participanteData = $user->get_participante();

        //KATA
        $kataData = $user->get_kata();

        require_once "views/juez/homeJuez.php";
    }

    public function vistaPuntuar($CI)
    {
        $user = new puntaje_model();

        $participanteData["CI"] = $CI;
        $participanteData["Participante"] = $user->get_participas($CI);

        $data = $user->get_participante();

        require_once "views/juez/puntuarJuez.php";
    }


    public function enviarPuntaje()
    {
        session_start();
        // Verificar si el idJuez está presente en la sesión
        if (isset($_SESSION['idJuez'])) {
            $idJuez = $_SESSION['idJuez'];
        } else {
            // Redirigir si el idJuez no está presente
            header('Location: index.php');
            exit();
        }

        // Resto de tu código aquí...
        $Valor = $_POST['Valor'];
        $CI_P = $_POST['CI_P'];
        $idTorneo = $_POST['idTorneo'];
        $idKata = $_POST['idKata'];
        $idCategoria = $_POST['idCategoria'];

        $user = new puntaje_model();

        // Puedes pasar $idJuez como un parámetro si es necesario en tu función enviarPuntaje
        $user->enviarPuntaje($Valor, $CI_P, $idTorneo, $idKata, $idCategoria, $idJuez);

        $this->homeJuez();
    }
}
