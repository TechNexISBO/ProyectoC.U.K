<?php
	
	class Participantes_model {
		
		private $db;
		private $participantes;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->participantes = array();
		}
		
		public function get_participantes()
		{
			$sql = "SELECT * FROM participantes";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->participantes[] = $row;
			}
			return $this->participantes;
		}
		
		public function insertar($nombre, $apellido, $ci, $fnac, $escuela, $pais){
			
			$resultado = $this->db->query("INSERT INTO participantes (nombre, apellido, ci, fnac, escuela, pais) VALUES ('$nombre', '$apellido', '$ci', '$fnac', '$escuela', '$pais')");
			
		}
		
		public function modificar($id,$nombre, $apellido, $ci, $fnac, $escuela, $pais){
			
			$resultado = $this->db->query("UPDATE participantes SET nombre='$nombre', apellido='$apellido', ci='$ci', fnac='$fnac', escuela='$escuela', pais='$pais' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM participantes WHERE id = '$id'");
			
		}
		
		public function get_participante($id)
		{
			$sql = "SELECT * FROM participantes WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>