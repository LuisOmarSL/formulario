<?php
include 'conexion.php';
$id = $_GET['id'];
$query = "select nombre, apaterno, amaterno, correoe from usuarios where id=".$id;
$ejecucion = pg_query($con, $query);
$resultado = pg_fetch_assoc($ejecucion);
?>


<!DOCTYPE html>

<html>

    <head>
	<meta charset="utf-8">
    </head>

    <body>

	<p>El siguiente registro sera eliminado:</p>

	<table>
		<tr>
			<th>Nombre</th>
			<th>Apellido Paterno</th>
			<th>Apallido Materno</th>
			<th>Correo electronico</th>
		</tr>

		<tr>
			<td><?php echo $resultado['nombre']; ?> </td>
			<td><?php echo $resultado['apaterno']; ?> </td>
			<td><?php echo $resultado['amaterno']; ?> </td>
			<td><?php echo $resultado['correoe']; ?> </td>
		</tr>
	</table>

	<form name="eliminar" action="borrar.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id;?>">
		<input type="submit" value="Eliminar">
	</form>
    </body>
</html>


