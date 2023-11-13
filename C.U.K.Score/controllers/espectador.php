<?php 

class espectadorController {

    public function __construct()
    {
        require_once "models/espectadorModel.php";
    }

    public function home()
    {
        $user = new espectador_Model();

        $participanteData = $user->get_participante();

        require_once "views/espectador/homeEspectador.php";
    }

    public function vista($CI)
    {
        $user = new espectador_Model();

        $participanteData["CI"] = $CI;
        $participanteData["Participante"] = $user->get_participas($CI);

        $data = $user->get_participante();

        require_once "views/espectador/vistaEspectador.php";
    }
}