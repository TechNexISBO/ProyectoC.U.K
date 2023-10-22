<?php


class tablasController {

    public function __construct()
    {
        require_once "models/tablasModel.php";
    }

    public function tablas()
    {
    $user = new tablas_Model();


    //TABLA TORNEO
    $torneoData = $user->get_torneo();

    //TABLA CATEGORIA
    $categoriaData = $user->get_categoria();

    //TABLA PARTICIPANTE
    $partcicipanteData = $user->get_participante();

    //TABLA COACH
    $coachData = $user->get_coach();

    
    require_once "views/admin/homeAdmin.php";

    }

    public function tablasCoach(){

        $user = new tablas_Model();


        //TABLA TORNEO
        $torneoData = $user->get_torneo();
    
        //TABLA CATEGORIA
        $categoriaData = $user->get_categoria();
    
        //TABLA PARTICIPANTE
        $partcicipanteData = $user->get_participante();
    
        require_once "views/coach/homeCoach.php";

    }

    public function agregar(){
        require_once "views/administrador/nuevoTorneo.php";
    }

    public function guarda(){
			
        $nombreTorneo = $_POST['nombreTorneo'];
        $Fcreacion = $_POST['Fcreacion'];
        $Estado = $_POST['Estado'];

        $user = new tablas_Model();
        $user->agregar($nombreTorneo, $Fcreacion, $Estado);
        $this->tablas();
    }

    public function modificar($idTorneo){
        $user = new tablas_Model();

        $torneoData["idTorneo"] = $idTorneo;
        $torneoData["Torneo"] = $user->get_torneos($idTorneo);

        require_once "views/administrador/editarTorneo.php";
    
    }

    public function actualizar(){

        $idTorneo = $_POST['idTorneo'];
        $nombreTorneo = $_POST['nombreTorneo'];
        $Fcreacion = $_POST['Fcreacion'];
        $Estado = $_POST['Estado'];
        
        $user = new tablas_Model();
        $user->modificar($idTorneo, $nombreTorneo, $Fcreacion, $Estado);
        $this->tablas();
    }
    

}
