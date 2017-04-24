<?php 
	$controlador = new ctrlEstudiante();

	if (isset($_POST['enviar'])) {
		$res = $controlador->crear(
			$_POST['cedula'],
			$_POST['nombre'],
			$_POST['apellido'],
			$_POST['fono'],
			$_POST['edad'],
			$_POST['nota1'],
			$_POST['nota2'],
			$_POST['nota3']);

		if ($res) {
			echo "Registro exitoso!";
		}else{
			echo "Error, Cedula repetida";
		}
	}
 ?>
<h2><b>Registro de estudiante</b></h2>
<hr>
<form action="" method="POST">
	<label for="cedula">Cedula</label><br>
	<input type="number" name="cedula" minlength="8"  maxlength="9" required>
	<br><br>
	<label for="nombre">Nombre</label><br>
	<input type="text" name="nombre" required>
	<br><br>
	<label for="apellido">Apellido</label><br>
	<input type="text" name="apellido" required>
	<br><br>
	<label for="fono">Telefono</label><br>
	<input type="number" name="fono" minlength="9"  maxlength="12" required>
	<br><br>
	<label for="edad">Edad</label><br>
	<input type="number" name="edad" min="1"  maxlength="3" required>
	<br><br>
	<label for="nota1">Nota1</label>
	<input type="number" name="nota1" min="1" max="70"  maxlength="2" required>
	<br>
	<label for="nota2">Nota2</label>
	<input type="number" name="nota2" min="1" max="70"  maxlength="2" required>
	<br>
	<label for="nota3">Nota3</label>
	<input type="number" name="nota3" min="1" max="70" maxlength="2" required>
	<br><br>
	<input type="submit" name="enviar" value="crear">

</form>