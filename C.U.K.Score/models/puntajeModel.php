<?php

class puntaje_model
{
    private $db;

    private $kata;
    private $participar;
    private $categoria;
    private $torneo;
    private $participante;

    public function __construct()
    {

        $this->db = Conectar::conexion();
        $this->kata = array();
        $this->participar = array();
        $this->categoria = array();
        $this->torneo = array();
        $this->participante = array();
    }

    /* TORNEO */
    public function get_torneo()
    {
        $sql = "SELECT * FROM torneo GROUP BY idTorneo DESC";

        $resultado = $this->db->query($sql);

        while ($row = $resultado->fetch_assoc()) {
            $this->torneo[] = $row;
        }

        return $this->torneo;
    }

    public function get_torneos($idTorneo)
    {
        $sql = "SELECT * FROM torneo WHERE idTorneo='$idTorneo' LIMIT 1";

        $resultado = $this->db->query($sql);
        
        $row = $resultado->fetch_assoc();

        return $row;
    }

    /* CATEGORIA */
    public function get_categoria()
    {
        $sql = "SELECT * FROM categoria";

        $resultado = $this->db->query($sql);

        while ($row = $resultado->fetch_assoc()) {
            $this->categoria[] = $row;
        }

        return $this->categoria;
    }

    public function get_categorias($idTorneo)
    {
        $sql = "SELECT C.idCategoria, C.GeneroC, C.Equipo, C.Edad FROM categoria C
        JOIN pasa P ON P.idCategoria = C.idCategoria
        JOIN torneo T ON T.idTorneo = P.idTorneo
        WHERE T.idTorneo = '$idTorneo'";

        $resultado = $this->db->query($sql);

        $row = $resultado->fetch_assoc();

        return $row;
    }

    /* KATA */
    public function get_kata()
    {
        $sql = "SELECT * FROM kata";

        $resultado = $this->db->query($sql);

        while ($row = $resultado->fetch_assoc()) {
            $this->kata[] = $row;
        }

        return $this->kata;
    }

    /* PARTICIPAR */
    public function get_participar()
    {
        $sql = "SELECT * FROM participar";

        $resultado = $this->db->query($sql);

        while ($row = $resultado->fetch_assoc()) {
            $this->participar[] = $row;
        }

        return $this->participar;
    }

    /* PARTICIPANTES */
    public function get_participante()
    {
        $sql = "SELECT * FROM participante";

        $resultado = $this->db->query($sql);

        while ($row = $resultado->fetch_assoc()) {
            $this->participante[] = $row;
        }

        return $this->participante;
    }
}
