<?php

class llavesController {

    public function __construct(){
        require_once "models/tablasModel.php";
    }

    public function llaves($idTorneo, $idCategoria, $CI){
        $user = new tablas_Model();

        $datoTorneo["Torneo"] = $user->get_torneos($idTorneo);
        $datoCategoria["Categoria"] = $user->get_categorias($idCategoria);
        $datoParticipante["Participante"] = $user->get_participantes($CI);
        $datoCoach["Coach"] = $user->get_coaches($CI);

        require_once "views/admin/torneoAdmin.php";
    }
  
}

?>