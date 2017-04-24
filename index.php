<?php 
	include_once("modulos/Enrutador.php");
	include_once("modulos/Estudiantectrl.php");
 ?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<title>Practica PHPOO</title>
 </head>
 <body>
 	<h1>Sean Bienvenidos todos!</h1>
 	<nav>
 		<ul>
 			<li><a href="index.php">Inicio</a></li>
 			<li><a href="?cargar=crear">Registrar</a></li>
 		</ul>
 	</nav>
 	<section>
 		<?php
 			if (isset($_GET['cargar'])) {
 				$enrutador = new Enrutador();
 				$enrutador->cargaVista($_GET['cargar']);
 			}else{
 				include_once ("vistas/inicio.php");
 			} 				
 		 ?>
 	</section>

 </body>
 </html>