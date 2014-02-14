<?php

$idusuario = $_POST['idusuario'];
$idpermiso = $_POST['idpermiso'];
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