<?php

$nombre = $_POST['txt_nombre'];
$pagina = $_POST['txt_pagina'];
$activo = $_POST['radSize'];



if ($_POST['agregar']) {
	echo "Agregar"."<br>";	 
	echo $activo;
}
if ($_POST['modificar']) {
	echo "Modificar";
}
if ($_POST['eliminar']) {
echo "Eliminar";
}
?>