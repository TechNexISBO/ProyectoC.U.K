<?php 

class tablas_Model {
    private $db;

    private $torneo;
    private $categoria;
    private $participante;
    private $coach;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->torneo = array();
        $this->categoria = array();
        $this->participante = array();
        $this->coach = array();
    }


    /* FUNCIONES DE LA TABLAS TORNEO */
    public function get_torneo()
    {
        $sqlTorneo = "SELECT * FROM torneo";
        $resultadoTorneo = $this->db->query($sqlTorneo);
        while ($row = $resultadoTorneo->fetch_assoc()) {
            $this->torneo[] = $row;
        }
        return $this->torneo;

    }

    public function get_torneos($idTorneo){
        $sqlTorneo = "SELECT * FROM torneo WHERE idTorneo='$idTorneo' LIMIT 1";
        $resultadoTorneo = $this->db->query($sqlTorneo);
        $row = $resultadoTorneo->fetch_assoc();

        return $row;
    }

    public function modificar($idTorneo, $nombreTorneo, $Fcreacion, $Estado){
        $resultado = $this->db->query("UPDATE torneo
        SET nombreTorneo='$nombreTorneo', Fcreacion='$Fcreacion', Estado='$Estado'
        WHERE idTorneo = '$idTorneo'");
    }

    public function agregar($nombreTorneo, $Fcreacion, $Estado){
			
        $resultado = $this->db->query("INSERT INTO torneo (nombreTorneo, Fcreacion, Estado) 
        VALUES ('$nombreTorneo', '$Fcreacion', '$Estado')");
        
    }

    /* FUNCIONES DE LA TABLA CATEGORIA */
    public function get_categoria() 
    {
        $sqlCategoria = "SELECT * FROM categoria";
        $resultadoCategoria = $this->db->query($sqlCategoria);
        while ($row = $resultadoCategoria->fetch_assoc()) {
            $this->categoria[] = $row;
        }
        return $this->categoria;

    }

    /* FUNCIONES DE LA TABLA PARTICIPANTE */
    public function get_participante() 
    {
        $sqlParticipante = "SELECT PE.CI, PE.Nombre, PE.Apellido, PE.Fnac, PA.Escuela, PA.Pais  
        FROM participante PA JOIN persona PE ON PE.CI = PA.CI";
        $resultadoParticipante = $this->db->query($sqlParticipante);
        while ($row = $resultadoParticipante->fetch_assoc()) {
            $this->participante[] = $row;
        }
        return $this->participante;

    }

    /* FUNCIONES DE LA TABLA COACH */
    public function get_coach() 
    {
        $sqlCoach = "SELECT U.idUser, C.CI, P.Nombre, P.Apellido, P.Fnac, P.Correo, U.contraseñaUser 
        FROM persona P JOIN coach C ON P.CI = C.CI JOIN usuario U ON P.CI = U.CI  GROUP BY U.idUser ASC";
        $resultadoCoach = $this->db->query($sqlCoach);
        while ($row = $resultadoCoach->fetch_assoc()) {
            $this->coach[] = $row;
        }
        return $this->coach;

    }

}


?>