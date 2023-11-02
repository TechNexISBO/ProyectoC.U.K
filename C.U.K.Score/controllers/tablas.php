<?php


class tablasController
{

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

        //TABALA KATA
        $kataDato = $user->get_kata();


        require_once "views/admin/homeAdmin.php";

    }

    public function tablasCoach()
    {

        $user = new tablas_Model();


        //TABLA TORNEO
        $torneoData = $user->get_torneo();

        //TABLA CATEGORIA
        $categoriaData = $user->get_categoria();

        //TABLA PARTICIPANTE
        $partcicipanteData = $user->get_participante();

        //TABALA KATA
        $kataDato = $user->get_kata();

        require_once "views/coach/homeCoach.php";

    }

    public function registrar($idTorneo)
    {

        $user = new tablas_Model();

        //TABLAS 
        
        $torneoData["idTorneo"] = $idTorneo;
        $torneoData["Torneo"] = $user->get_participas($idTorneo);

        //TABLA PARTICIPANTE
        $partcicipanteData = $user->get_participante();


        //TABLA CATEGORIA
        $categoriaData = $user->get_categoria();

        require_once "views/coach/registarParticipante.php";

    }


    // TORNEO
    public function guarda()
    {

        $nombreTorneo = $_POST['nombreTorneo'];
        $Fecha = $_POST['Fecha'];

        $user = new tablas_Model();
        $user->agregar($nombreTorneo, $Fecha);
        $this->tablas();
    }

    public function modificar($idTorneo)
    {
        $user = new tablas_Model();

        $torneoData["idTorneo"] = $idTorneo;
        $torneoData["Torneo"] = $user->get_torneos($idTorneo);

        require_once "views/admin/modificarTorneo.php";

    }

    public function actualizar()
    {

        $idTorneo = $_POST['idTorneo'];
        $nombreTorneo = $_POST['nombreTorneo'];
        $Fecha = $_POST['Fecha'];

        $user = new tablas_Model();
        $user->modificar($idTorneo, $nombreTorneo, $Fecha);
        $this->tablas();
    }

    //Participante 
    public function guardarParticipante()
    {

        $CI = $_POST['CI'];
        $Nombre = $_POST['Nombre'];
        $Apellido = $_POST['Apellido'];
        $Fnac = $_POST['Fnac'];
        $Escuela = $_POST['Escuela'];
        $GeneroP = $_POST['GeneroP'];
        $CI_C = $_POST['CI_C'];

        $user = new tablas_Model();
        $user->agregarParticipante($CI, $Nombre, $Apellido, $Fnac, $Escuela, $GeneroP, $CI_C);
        $this->tablasCoach();
    }

    public function eliminarParticipante($CI)
    {

        $user = new tablas_Model();
        $user->eliminarParticipante($CI);
        $this->tablas();
    }

    //COACH 
    public function eliminarCoach($CI)
    {

        $user = new tablas_Model();
        $user->eliminarCoach($CI);
        $this->tablas();
    }

    //PARTICIPA 
    public function guardaParticipa()
    {

        $CI_P = $_POST['CI_P'];
        $idTorneo = $_POST['idTorneo'];
        $idCategoria = $_POST['idCategoria'];

        $user = new tablas_Model();
        $user->agregarParticipa($CI_P, $idTorneo, $idCategoria);
        $this->registrar($idTorneo);

    }
}