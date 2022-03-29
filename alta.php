<?php

//Recibir datos de formularios y asignarlos a variables, despues imprimirlas

//var_dump($_POST);

include 'conexion.php';

$nombre = strip_tags( $_POST["nombre"]);
$apaterno = strip_tags($_POST["apaterno"]);
$amaterno = strip_tags($_POST["amaterno"]);
$correoe = strip_tags($_POST["correoe"]);


//validacion
if(preg_match('[a-z áéíóúüñ]{2, 50}/ig', $nombre)){
	echo "es un nombre valido";
}else{
	echo "no es un nombre valido";
	//header('Location: formulario.php?error=1');
}

//validacion
if(filter_var($correoe, FILTER_VALIDATE_EMAIL)){
	echo "es un correo valido";
}else{
	echo "no es un correo valido";
	header('Location: formulario.php?error=1');
}

$insercion = "insert into usuarios (nombre, apaterno, amaterno, correoe) values ('$nombre','$apaterno','$amaterno','$correoe')";
$query = pg_query($con, $insercion);

//var_dump($query);

if($query){
	echo "Se guardo el registro en la base de datos";
	echo "<br/>";
	echo "a href='formulario.html>REgresar al formulario</a>";
} else {
	echo "Hubo un error en la solititud";
}

pg_close($con);

/*
echo "Hola ".$nombre." ".$apaterno." ".$amaterno;
echo "<br/>";
echo "Tu correo es: ".$correoe;
*/

?>
