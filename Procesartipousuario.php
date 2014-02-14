<?php

include ("conexion.php");
$link=Conectarse(); 

$id = NULL;
$descripcion = $_POST['descripcion'];
$activo = $_POST['radSize'];


if ($_POST['agregar']) {	
	$sql= "INSERT INTO tipousuario VALUES ('".$id."', '".$descripcion."' , '".$activo."')";	
	$result = mysql_query($sql);	
	if (! $result){
	echo "La consulta SQL contiene errores.".mysql_error();
	exit();
	}else {
		echo "<center><font color='RED'>DATOS INSERTADOS CORRECTAMENTE</font><a ref='#'>Volver</a>";
	}
}

if ($_POST['modificar']) {
	echo "Modificar";
}

if ($_POST['eliminar']) {
echo "Eliminar";
}
mysql_close($link); //cierra la conexion 
?>