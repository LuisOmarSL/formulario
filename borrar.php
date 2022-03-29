<?php

include 'conexion.php';

$id = $_POST['id']
$query = "delete from usuarios where id = $id";
$resultado = pg_query($con, $query);

if($resultado){
	echo "El registro se elimino";
	echo "<br />";
	echo "<a href='consulta.php'>Regresar</a>";
} else {
	echo "Hubo un problema al eliminar";
}

?>
