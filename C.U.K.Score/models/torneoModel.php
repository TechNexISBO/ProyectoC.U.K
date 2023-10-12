<?php 

class torneo_Model {
    private $db;

    private $torneo;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->torneo = array();
    }

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
}




?>