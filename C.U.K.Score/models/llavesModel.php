<?php

class llaves_Model
{
    private $db;
    private $participar;
    private $participante;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->participar = array();
        $this->participante = array();
    }

    //PARTICIPAR
    public function get_participar($idTorneo)
    {
        $sqlParticipar = "SELECT P.CI_P, P.idCategoria, P.Ronda, P.Cinturon, P.Compite 
        FROM Participar P JOIN Torneo T ON T.idTorneo = P.idTorneo WHERE T.idTorneo = $idTorneo
        ORDER BY P.Compite ASC";
        $resiltadoParticipar = $this->db->query($sqlParticipar);
        while ($row = $resiltadoParticipar->fetch_assoc()) {
            $this->participar[] = $row;
        }
        return $this->participar;
    }

    public function get_participa($idTorneo) {
        $sql = "SELECT * FROM Participar P JOIN Torneo T ON T.idTorneo = P.idTorneo
        WHERE T.idTorneo = '$idTorneo'";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            $this->participar[] = $row;
        }
        return $this->participar;
    }

    public function actualizarCompetidor($idCompite, $Cinturon, $Compite, $idTorneo)
    {
        $sql = "UPDATE Participar SET Cinturon='$Cinturon', Compite='$Compite'
         WHERE idCompite = '$idCompite' AND idTorneo = '$idTorneo'";
        $resultado = $this->db->query($sql);
        return $resultado;
    }

    //PARTICIPANTE
    public function get_participante($idTorneo)
    {
        $sqlParticipante = "SELECT PA.CI, PE.Nombre, PE.Apellido, PA.GeneroP, PA.Escuela, PA.CI_C FROM Participante PA JOIN Persona PE ON PE.CI = PA.CI
    JOIN Participar PAR ON PAR.CI_P = PA.CI JOIN Torneo T ON T.idTorneo = PAR.idTorneo WHERE T.idTorneo = '$idTorneo'";
        $resultadoParticipante = $this->db->query($sqlParticipante);
        while ($row = $resultadoParticipante->fetch_assoc()) {
            $this->participante[] = $row;
        }
        return $this->participante;
    }

    //TORNEO 
    public function get_torneos($idTorneo){
        $sqlTorneo = "SELECT * FROM torneo WHERE idTorneo='$idTorneo' LIMIT 1";
        $resultadoTorneo = $this->db->query($sqlTorneo);
        $row = $resultadoTorneo->fetch_assoc();

        return $row;
    }


}
