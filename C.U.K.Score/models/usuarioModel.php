<?php

class usuario_Model
{

    private $db;
    private $persona;
    private $coach;
    private $usuario;
    private $torneo;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->persona = array();
        $this->usuario = array();
        $this->coach = array();
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

    public function get_persona()
    {
        $sqlPersona = "SELECT * FROM persona";
        $resultadoPersona = $this->db->query($sqlPersona);
        while ($row = $resultadoPersona->fetch_assoc()) {
            $this->persona[] = $row;
        }
        return $this->persona;
    }

    public function get_usuario()
    {
        $sqlUsuario = "SELECT * FROM usuario";
        $resultadoUsuario = $this->db->query($sqlUsuario);
        while ($row = $resultadoUsuario->fetch_assoc()) {
            $this->usuario[] = $row;
        }
        return $this->usuario;
    }

    public function get_coach()
    {
        $sqlUsuario = "SELECT * FROM coach";
        $resultadoCoach = $this->db->query($sqlUsuario);
        while ($row = $resultadoCoach->fetch_assoc()) {
            $this->coach[] = $row;
        }
        return $this->coach;
    }

    /* REGISTRO COACH */

    public function insertar($CI, $Nombre, $Apellido, $Correo, $Fnac, $contraseñaUser)
    {

        $resultadoPersona = $this->db->query("INSERT INTO persona (CI, Nombre, Apellido, Correo, Fnac) 
        VALUES ('$CI', '$Nombre', '$Apellido', '$Correo', '$Fnac')");

        $resultadoCoach = $this->db->query("INSERT INTO coach (CI) VALUES ('$CI')");

        $registrarUser = $this->db->query("INSERT INTO usuario (tipoUser, contraseñaUser, CI)
        VALUES ('Coach', '$contraseñaUser', '$CI')");

    }
    
    public function get_validar($CI, $contraseñaUser)
    {
        $sql = "SELECT * FROM usuario WHERE CI = '$CI' AND contraseñaUser = '$contraseñaUser'";
        $resultado = $this->db->query($sql);

        if ($resultado->num_rows > 0) {
            $usuario = $resultado->fetch_assoc();
            return $usuario; 
        } else {
            return false;
        }
    }

    public function get_validarJuez($idJuez, $contraseñaUser)
    {
        $sql = "SELECT * FROM usuario WHERE idJuez = '$idJuez' AND contraseñaUser = '$contraseñaUser'";
        $resultado = $this->db->query($sql);

        if ($resultado->num_rows > 0) {
            $usuario = $resultado->fetch_assoc();
            return $usuario; 
        } else {
            return false;
        }
    }

}




