<?php 
	include "Conexion.php";

	Class Estudiante{

		private $id;
		private $cedula;
		private $nombre;
		private $apellido;
		private $telefono;
		private $edad;
		private $promedio;
		private $fecha;

		private $con;


		public function __construct(){
			$this->con = new Conexion();
			$this->con->Conectar();
		}

		public function set($atributo,$contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function listar(){
			$sql = "SELECT * FROM estudiantes";
			$resultado = $this->con->returnQuery($sql);
			return $resultado;
		}

		public function create(){
			$sql2 = "SELECT * FROM estudiantes WHERE cedula = '{$this->cedula}'";
			$resultado = $this->con->returnQuery($sql2);
			$num = mysqli_num_rows($resultado);
			if ($num != 0 ) {
				return false;
			}else{
				$sql = "INSERT INTO estudiantes (cedula, nombre, apellido, telefono, edad, promedio, fecha)
					VALUES ('{$this->cedula}','{$this->nombre}','{$this->apellido}','{$this->telefono}','{$this->edad}','{$this->promedio}',NOW())";

				$this->con->simpleQuery($sql);
				return true;
			}
		}

		public function read(){
			$sql = "SELECT * FROM estudiantes WHERE id = '{$this->id}'";
			$resultado = $this->con->returnQuery($sql);
			$row = $resultado->fetch_array();			

			return $row;
		}

		public function update(){
			$sql = "UPDATE estudiantes SET nombre = '{$this->nombre}', apellido = '{$this->apellido}', telefono = '{$this->telefono}', edad = '{$this->edad}' WHERE id = '{$this->id}'";
			$this->con->simpleQuery($sql);

		}

		public function delete(){
			$sql = "DELETE FROM estudiantes WHERE id = '{$this->id}'";
			$this->con->simpleQuery($sql);
		}

		
	}


 ?>