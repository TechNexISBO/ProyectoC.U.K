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
        $torneoData = $user->get_torneo();

        //KATA
        $kataData = $user->get_kata();

        require_once "views/juez/homeJuez.php";
    }

    public function categoriaJuez($idTorneo) 
    {
        $user = new puntaje_model();

        //Detectar categorias de un torneo
        $torneoData["idTorneo"] = $idTorneo;
        $torneoData["Torneo"] = $user->get_categorias($idTorneo);

        //Categorias
        $categoriaData = $user->get_categoria();


        

        require_once "views/juez/categoriaJuez.php";
    }

    
}
