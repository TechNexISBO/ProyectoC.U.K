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

        require_once "views/juez/vistaPuntuar.php";
    }
}
