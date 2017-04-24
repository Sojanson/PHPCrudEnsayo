<?php 

	Class Enrutador{

		public function cargaVista($vista){
			switch ($vista) {
				case 'crear':
					include_once("vistas/".$vista.".php");
					break;
				case 'ver':
					include_once("vistas/".$vista.".php");
					break;
				case 'editar':
					include_once("vistas/".$vista.".php");
					break;
				case 'eliminar':
					include_once("vistas/".$vista.".php");
					break;
				default:
					include_once("vistas/error.php");
					break;
			}
		}

	}


 ?>