<?php
	
	class ParticipantesController {
		
		public function __construct(){
			require_once "models/ParticipanteModel.php";
		}
		
		public function index(){
			
			
			$participante = new Participantes_model();
			$data["titulo"] = "Participante";
			$data["participante"] = $participante->get_participantes();
			
			require_once "views/participante/participantes.php";	
		}
		
		public function nuevo(){
			
			$data["titulo"] = "Participante";
			require_once "views/participante/participantes_nuevo.php";
		}
		
		public function guarda(){
			
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$ci = $_POST['ci'];
			$fnac = $_POST['fnac'];
			$escuela = $_POST['escuela'];
			$pais = $_POST['pais'];
			
			$participante = new Participantes_model();
			$participante->insertar($nombre, $apellido, $ci, $fnac, $escuela, $pais);
			$data["titulo"] = "participante";
			$this->index();
		}
		
		public function modificar($id){
			
			$participante = new Participantes_model();
			
			$data["id"] = $id;
			$data["participante"] = $participante->get_participante($id);
			$data["titulo"] = "Participante";
			require_once "views/participante/participantes_modifica.php";
		}
		
		public function actualizar(){

			$id = $_POST['id'];
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$ci = $_POST['ci'];
			$fnac = $_POST['fnac'];
			$escuela = $_POST['escuela'];
			$pais = $_POST['pais'];

			$participante = new Participantes_model();
			$participante->modificar($id, $nombre, $apellido, $ci, $fnac, $escuela, $pais);
			$data["titulo"] = "Participante";
			$this->index();
		}
		
		public function eliminar($id){
			
			$participante = new Participantes_model();
			$participante->eliminar($id);
			$data["titulo"] = "participante";
			$this->index();
		}	
	}
