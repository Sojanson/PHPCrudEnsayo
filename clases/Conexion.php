<?php 

	Class Conexion{

		// Atributos

		private $host;
		private $user;
		private $pass;
		private $bd;

		//Methods

		public function Conectar(){

			$this->host = "localhost";
			$this->user = "root";
			$this->pass = "";
			$this->bd = "practicapoo";

			$con = new \mysqli($this->host, $this->user, $this->pass, $this->bd);

			if ($con->connect_error) {
				die('Error de conexion'. $con->connect_error);
			}
			return $con;
		}
		/*public function __construct(){
			$this->con = new \mysqli($this->datosCon['host'],$this->datosCon['user'], $this->datosCon['pass'],$this->datosCon['db']);
		}

		public function consultaSimple($sql){
			$this->con->query($sql);
		}

		public function consultaRetorno($sql){
			$datos= $this->con->query($sql);
			return $datos;
		}*/
		public function simpleQuery($sql){
			$this->Conectar()->query($sql);
		}

		public function returnQuery($sql){
			$consulta = $this->Conectar()->query($sql);
			return $consulta;
		}
	}

 ?>