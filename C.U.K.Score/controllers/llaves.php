<?php

class llavesController
{

    public function __construct()
    {
        require_once "models/llavesModel.php";
    }



    public function gestionar($idTorneo)
    {
        $user = new llaves_Model();

        //TORNEO
        $torneoData["idTorneo"] = $idTorneo;
        $torneoData["Torneo"] = $user->get_torneos($idTorneo);

        //PARTICIPANTES
        $participanteData["Torneo"] = $user->get_participante($idTorneo);

        //CON QUIEN COMPITEN
        $participarData["idTorneo"] = $idTorneo;
        $participarData["Torneo"] = $user->get_participar($idTorneo);
        
        //Puntaje
        $puntajeData["Torneo"] = $user->get_puntaje($idTorneo);

        require_once "views/admin/gestionarAdmin.php";
    }


    public function organizar()
    {
        $idTorneo = $_POST['idTorneo'];

        $user = new llaves_Model();

        $competidor = $user->get_participa($idTorneo);

        shuffle($competidor);

        $Compite = 1;

        $esImpar = count($competidor) % 2 != 0;
        $limite = $esImpar ? count($competidor) - 1 : count($competidor);


            for ($i = 0; $i < $limite; $i += 2) {

               $user->actualizarCompetidor($competidor[$i]['idCompite'], "Rojo", $Compite, $idTorneo);
               $user->actualizarCompetidor($competidor[$i + 1]['idCompite'], "Azul", $Compite, $idTorneo);

               $Compite++;
            }

            if ($esImpar) {
                $user->actualizarCompetidor($competidor[$limite]['idCompite'], "Rojo", -1, $idTorneo);
            }
        

        header("Location: index.php?c=llaves&a=gestionar&id=$idTorneo");

    }

    //KATA 
    public function agregarKata()
    {
        $CI_P = $_POST['CI_P'];
        $idKata = $_POST['idKata'];

        $user = new llaves_Model();
        $user->agregarKata($CI_P, $idKata);
        $this->gestionar($idTorneo);
    }
}
