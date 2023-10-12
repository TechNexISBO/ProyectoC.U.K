<?php


class torneoController {

    public function __construct()
    {
        require_once "models/torneoModel.php";
    }

    public function torneo()
    {
    $user = new torneo_Model();
    $torneoData = $user->get_torneo();
    
    require_once "views/administrador/torneoAdmin.php";

    }

    public function agregar(){
        require_once "views/administrador/nuevoTorneo.php";
    }

    public function guarda(){
			
        $nombreTorneo = $_POST['nombreTorneo'];
        $Fcreacion = $_POST['Fcreacion'];
        $Estado = $_POST['Estado'];

        $user = new torneo_Model();
        $user->agregar($nombreTorneo, $Fcreacion, $Estado);
        $this->torneo();
    }

    public function modificar($idTorneo){
        $user = new torneo_Model();

        $torneoData["idTorneo"] = $idTorneo;
        $torneoData["Torneo"] = $user->get_torneos($idTorneo);

        require_once "views/administrador/editarTorneo.php";
    
    }

    public function actualizar(){

        $idTorneo = $_POST['idTorneo'];
        $nombreTorneo = $_POST['nombreTorneo'];
        $Fcreacion = $_POST['Fcreacion'];
        $Estado = $_POST['Estado'];
        

        $user = new torneo_Model();
        $user->modificar($idTorneo, $nombreTorneo, $Fcreacion, $Estado);
        $this->torneo();
    }
    

}

?>

