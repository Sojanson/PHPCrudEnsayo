<?php 
	$controlador = new ctrlEstudiante();
	if (isset($_GET['id'])) {
		$row = $controlador->ver($_GET['id']);		
	}else{
		header("location: index.php");
	}
	if (isset($_POST['enviar'])) {
		$controlador->eliminar($_GET['id']);
		header("location: index.php");
	}

 ?>

 <h3><b>De verdad desea Eliminar al estudiante <?php echo $row['nombre'] ." ". $row['apellido']; ?></b></h3>

 <form action="" method="POST">
 	<input type="submit" name="enviar" value="Si">
 	<input type="button" onclick="window:location.href='index.php'" value="No">
 </form>