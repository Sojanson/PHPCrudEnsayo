<?php 
	include_once('clases/Estudiante.php');

	Class ctrlEstudiante{

		private $Estudiante;

		public function __construct(){
			$this->Estudiante = new Estudiante();
		}

		public function index(){
			$resultado = $this->Estudiante->listar();
			return $resultado;
		}
		public function crear($cedula,$nombre,$apellido,$telefono,$edad,$nota1,$nota2,$nota3){

			$promedio = ($nota1 + $nota2 + $nota3) / 3;

			$this->Estudiante->set("cedula",$cedula);
			$this->Estudiante->set("nombre",$nombre);
			$this->Estudiante->set("apellido",$apellido);
			$this->Estudiante->set("telefono",$telefono);
			$this->Estudiante->set("edad",$edad);
			$this->Estudiante->set("promedio",$promedio);

			$resultado = $this->Estudiante->create();
			return $resultado;
		}
		public function eliminar($id){
			$this->Estudiante->set("id",$id);
			$this->Estudiante->delete();
		}
		public function ver($id){
			$this->Estudiante->set("id",$id);
			$res = $this->Estudiante->read();
			return $res;
		}
		public function editar($id,$nombre,$apellido,$edad,$telefono){
			$this->Estudiante->set('id',$id);
			$this->Estudiante->set('nombre',$nombre);
			$this->Estudiante->set('apellido',$apellido);
			$this->Estudiante->set('edad',$edad);
			$this->Estudiante->set('telefono',$telefono);			
			$this->Estudiante->update();
		}


	}


 ?>