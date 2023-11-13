<?php

class espectador_Model {
    private $db;

    private $participante;

    public function __construct() 
    {
        $this->db = Conectar::conexion();

        $this->participante = array();
    }

    //Participante
    public function get_participas($CI)
    {
        $sql = "SELECT PA.CI, P.Nombre, P.Apellido, PA.Escuela, K.nombreKata, PAR.Cinturon, PAR.idTorneo, C.Edad, PU.valorTotal 
        FROM participante PA
        JOIN puntuar PU ON PU.CI_P = PA.CI
        JOIN persona P ON P.CI = PA.CI
        JOIN participar PAR ON PAR.CI_P = PA.CI
        JOIN categoria C ON C.idCategoria = PAR.idCategoria
		JOIN tiene T ON T.CI_P = PA.CI 
        JOIN kata K ON K.idKata = T.idKata
        WHERE PA.CI = $CI LIMIT 1";

        $resultado = $this->db->query($sql);

        $row = $resultado->fetch_assoc();

        return $row;
    }

    public function get_participante()
    {
        $sql = "SELECT DISTINCT  PA.CI, P.Nombre, P.Apellido, PA.Escuela, K.nombreKata, PAR.Cinturon, PAR.idTorneo, C.Edad, PU.valorTotal   
        FROM participante PA
        JOIN puntuar PU ON PU.CI_P = PA.CI
        JOIN persona P ON P.CI = PA.CI
        JOIN participar PAR ON PAR.CI_P = PA.CI
        JOIN categoria C ON C.idCategoria = PAR.idCategoria
		JOIN tiene T ON T.CI_P = PA.CI 
        JOIN kata K ON K.idKata = T.idKata";

        $resultado = $this->db->query($sql);

        while ($row = $resultado->fetch_assoc()) {
            $this->participante[] = $row;
        }

        return $this->participante;
    }

}