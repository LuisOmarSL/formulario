<?php

include 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apaterno = $_POST['apaterno'];
$amaterno = $_POST['amaterno'];
$correoe = $_POST['correoe'];
$query = "update usuarios set nombre= '$nombre', apaterno= '$apaterno', amaterno= '$amaterno', correoe= '$correoe' where id = $id";

$resultado = pg_query($con, $query);

if($resultado){
	echo "El registro fue actualizado";
	echo "<br />";
	echo "<a href='consulta.php'>Regresar</a>";
} else {
	echo "Hubo un problema con la consulta";
}


?>
