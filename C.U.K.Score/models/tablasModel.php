<?php 

class tablas_Model {
    private $db;

    private $torneo;
    private $categoria;
    private $participante;
    private $coach;
    private $kata;
    private $participa;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->torneo = array();
        $this->categoria = array();
        $this->participante = array();
        $this->coach = array();
        $this->kata = array();
        $this->participa = array();
    }


    /* FUNCIONES DE LA TABLAS TORNEO */
    public function get_torneo()
    {
        $sqlTorneo = "SELECT * FROM torneo GROUP BY idTorneo DESC";
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

    public function modificar($idTorneo, $nombreTorneo, $Fecha){
        $resultado = $this->db->query("UPDATE torneo
        SET nombreTorneo='$nombreTorneo', Fecha='$Fecha' WHERE idTorneo = '$idTorneo'");
    }

    public function agregar($nombreTorneo, $Fecha){
			
        $resultado = $this->db->query("INSERT INTO torneo (nombreTorneo, Fecha, Estado) 
        VALUES ('$nombreTorneo', '$Fecha', 'Proximo')");
        
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

    public function get_categorias($idCategoria){
        $sqlCategoria = "SELECT * FROM categoria WHERE idTorneo='$idCategoria' LIMIT 1";
        $resultadoCategoria = $this->db->query($sqlCategoria);
        $row = $resultadoCategoria->fetch_assoc();

        return $row;
    }

    /* FUNCIONES DE LA TABLA PARTICIPANTE */
    public function get_participante() 
    {
        $sqlParticipante = "SELECT PE.CI, PE.Nombre, PE.Apellido, PE.Fnac, PA.Escuela, PA.GeneroP, PA.CI_C  
        FROM participante PA JOIN persona PE ON PE.CI = PA.CI";
        $resultadoParticipante = $this->db->query($sqlParticipante);
        while ($row = $resultadoParticipante->fetch_assoc()) {
            $this->participante[] = $row;
        }
        return $this->participante;

    }

    public function agregarParticipante($CI, $Nombre, $Apellido, $Fnac, $Escuela, $GeneroP, $CI_C){
        
        $resultadoPersona = $this->db->query("INSERT INTO persona (CI, Nombre, Apellido, Fnac) 
        VALUES ('$CI', '$Nombre', '$Apellido', '$Fnac')");

        $resultadoParticipante = $this->db->query("INSERT INTO participante (CI, Escuela, GeneroP, CI_C) 
        VALUES ('$CI', '$Escuela', '$GeneroP', '$CI_C')");

    }

    
    public function get_participantes($CI){
        $sqlParticipante = "SELECT * FROM participante WHERE idTorneo='$CI' LIMIT 1";
        $resultadoParticipante = $this->db->query($sqlParticipante);
        $row = $resultadoParticipante->fetch_assoc();

        return $row;
    }

    public function eliminarParticipante($CI){
           
        $resultadoCoach = $this->db->query("DELETE participante, persona FROM participante JOIN persona ON persona.CI = participante.CI  
        WHERE participante.CI = '$CI'");
       
    }

    /* FUNCIONES DE LA TABLA COACH */
    public function get_coach() 
    {
        $sqlCoach = "SELECT U.idUser, C.CI, P.Nombre, P.Apellido, P.Fnac, P.Correo, U.contraseñaUser 
        FROM persona P JOIN coach C ON P.CI = C.CI JOIN usuario U ON P.CI = U.CI  GROUP BY U.idUser DESC";
        $resultadoCoach = $this->db->query($sqlCoach);
        while ($row = $resultadoCoach->fetch_assoc()) {
            $this->coach[] = $row;
        }
        return $this->coach;

    }

    public function get_coaches($CI){
        $sqlCoach = "SELECT * FROM coach WHERE idTorneo='$CI' LIMIT 1";
        $resultadoCoach = $this->db->query($sqlCoach);
        $row = $resultadoCoach->fetch_assoc();

        return $row;
    }

    public function eliminarCoach($CI){
           
        $resultadoCoach = $this->db->query("DELETE U, C, P FROM usuario U JOIN coach C ON U.CI = C.CI JOIN persona P ON C.CI = P.CI 
        WHERE U.CI = '$CI'");
       
    }

    /* FUNCIONES DE LA TABLA KATA */
    public function get_kata() 
    {
        $sqlKata = "SELECT * FROM kata";
        $resultadoKata = $this->db->query($sqlKata);
        while ($row = $resultadoKata->fetch_assoc()) {
            $this->kata[] = $row;
        }
        return $this->kata;

    }

    /* FUNCIONES DE PARTICIPA */
    public function get_participa() 
    {
        $sqlParticipa = "SELECT * FROM participar";
        $resultadoParticipa = $this->db->query($sqlParticipa);
        while ($row = $resultadoParticipa->fetch_assoc()) {
            $this->participa[] = $row;
        }
        return $this->participa;

    }

    public function get_participas($idTorneo){
        $sqlTorneo = "SELECT * FROM torneo WHERE idTorneo='$idTorneo' LIMIT 1";
        $resultadoTorneo = $this->db->query($sqlTorneo);
        $row = $resultadoTorneo->fetch_assoc();

        return $row;
    }

    public function agregarParticipa($CI_P, $idTorneo, $idCategoria){
        
        $resultadoParticipa = $this->db->query("INSERT INTO participar (CI_P, idTorneo, idCategoria) 
        VALUES ('$CI_P', '$idTorneo', '$idCategoria')");

    }
}


?>