<?php
class participante_Model {
    private $db;
    private $participante;
    private $persona;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->participante = array();
    }

    public function get_participante() {
        $sqlParticipante = "SELECT * FROM participante";
        $resultadoParticipante = $this->db->query($sqlParticipante);
        while ($row = $resultadoParticipante->fetch_assoc()) {
            $this->participante[] = $row;
        }
        return $this->participante;
    }

    public function get_participantes($CI){
        $sqlParticipante = "SELECT * FROM participante WHERE CI='$CI' LIMIT 1";
        $resultadoParticipante = $this->db->query($sqlParticipante);
        $row = $resultadoParticipante->fetch_assoc();

        return $row;
    }

    public function get_persona()
    {
        $sqlPersona = "SELECT * FROM persona";
        $resultadoPersona = $this->db->query($sqlPersona);
        while ($row = $resultadoPersona->fetch_assoc()) {
            $this->persona[] = $row;
        }
        return $this->persona;
    }

    public function insertar($CI, $Nombre, $Apellido, $Fnac, $Escuela, $Pais )
    {

        $resultadoParticipante = $this->db->query("INSERT INTO participante (CI, Escuela, Pais) 
        VALUES ('$CI', '$Escuela', '$Pais')");

        $resultadoPersona = $this->db->query("INSERT INTO persona (CI, Nombre, Apellido, Fnac) 
        VALUES ('$CI', '$Nombre', '$Apellido','$Fnac')");

    }

} 
?>