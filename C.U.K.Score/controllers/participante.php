<?php

class participanteController {

    public function __construct()
    {
        require_once "models/participanteModel.php";
    }

    public function participante(){
        $user = new participante_Model();
        $participanteData = $user->get_participante();

        require_once "views/coach/participanteCoach.php";
        
    }

     // GUARDA LA INFORMACION NECESARIA PARA CREAR UN USUARIO COACH
     public function guarda()
     {
         // OBTIENE LOS DATOS DEL FORMULARIO
         $CI = $_POST['CI'];
         $Nombre = $_POST['Nombre'];
         $Apellido = $_POST['Apellido'];
         $Escuela = $_POST['Escuela'];
         $Pais = $_POST['Pais'];
         $Fnac = $_POST['Fnac'];
 
         // LLAMA A LA FUNCION DE usuarioModel.php
         $user = new participante_Model();
         $user->insertar($CI, $Nombre, $Apellido, $Escuela, $Pais, $Fnac);
         $this->participante();
     }

}

?>