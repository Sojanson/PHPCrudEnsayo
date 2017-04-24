<?php 
	$controlador = new ctrlEstudiante();
	$resultado =  $controlador->index();
 ?>
 
<h2>Pagina de Inicio</h2>
<table border="1">
	<thead>
		<th>Id</th>
		<th>Cedula</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Promedio</th>
		<th>Accion</th> 			
	</thead>
	<tbody>
		<?php while ($row = $resultado->fetch_array()):  ?>
			<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['cedula'];?></td>
				<td><?php echo $row['nombre'];?></td>
				<td><?php echo $row['apellido'];?></td>
				<td><?php echo $row['promedio'];?></td>
				<td>
					<a href="?cargar=ver&id=<?php echo $row['id']; ?>">Ver</a>
					<a href="?cargar=editar&id=<?php echo $row['id']; ?>">Editar</a>
					<a href="?cargar=eliminar&id=<?php echo $row['id']; ?>">Eliminar</a>
				</td>

			</tr>
		<?php endwhile; ?>
	</tbody>
	
</table>
