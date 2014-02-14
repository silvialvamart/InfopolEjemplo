<?php

include ("conexion.php");
$link=Conectarse(); 
$id = NULL;
$clave = $_POST['txt_clave'];
$contrasena = $_POST['txt_contrasena'];
$contrasenacodificado = md5($contrasena);
$nombre = $_POST['txt_nombre'];
$titulo = $_POST['txt_titulo'];
$activo = $_POST['radSize'];
$tipousuario = $_POST['variable'];



if ($_POST['agregar']) {
	$sql= "INSERT INTO usuario VALUES ('".$id."', '".$clave."' , '".$contrasenacodificado."', '".$nombre."', '".$titulo."', '".$activo."' ,'".$tipousuario."')";
	echo $sql;
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