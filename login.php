<?php


$el_usuario=isset($_GET['usuario']) ? $_GET['usuario'] : $_POST['usuario'];

$el_array = new stdClass();

if ($el_usuario=="Juan") {
	$el_array->Nombre = "Juan";
	$el_array->Apellido = "Gómez";
	$el_array->Edad = "18";
	$json = json_encode($el_array);
	echo $json;
} else if ($el_usuario=="Pipe") {
	$el_array->Nombre = "Pipe";
	$el_array->Apellido = "Pipeidox";
	$el_array->Edad = "40";
	$json = json_encode($el_array);
	echo $json;
} else if ($el_usuario=="Maria") {
	$el_array->Nombre = "María";
	$el_array->Apellido = "Rosenda";
	$el_array->Edad = "32";
	$json = json_encode($el_array);
	echo $json;
}

?>