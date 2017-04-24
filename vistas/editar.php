<?php 
	$controlador = new ctrlEstudiante();
	if (isset($_GET['id'])) {
		$row = $controlador->ver($_GET['id']);		
	}else{
		header("location: index.php");
	}
	if (isset($_POST['enviar'])) {
		$controlador->editar($_GET['id'],
			$_POST['nombre'],
			$_POST['apellido'],
			$_POST['edad'],
			$_POST['fono']);
			
		header("location: index.php");
	}
 ?>
 <form action="" method="POST">
 	<label for="cedula">Cedula</label><br>
	<input type="number" name="cedula" value="<?php echo $row['cedula']; ?>"  disabled>
	<br><br>
	<label for="nombre">Nombre</label><br>
	<input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required>
	<br><br>
	<label for="apellido">Apellido</label><br>
	<input type="text" name="apellido" value="<?php echo $row['apellido']; ?>" required>
	<br><br>
	<label for="fono">Telefono</label><br>
	<input type="number" name="fono" minlength="9"  maxlength="12" value="<?php echo $row['telefono']; ?>" required>
	<br><br>
	<label for="edad">Edad</label><br>
	<input type="number" name="edad" min="1"  maxlength="3" value="<?php echo $row['edad']; ?>" required>
	<br><br>
	<label for="promedio">Promedio</label>
	<input type="number" name="promedio" min="1" max="70"  maxlength="2" value="<?php echo $row['promedio']; ?>" disabled>	
	<br><br>
	<input type="submit" name="enviar" value="crear">