<!DOCTYPE HTML>
<html>
  <head>
  <script type="text/javascript">
	function validar(){
	alert('hola');
	var clave=document.getElementById('clave').value;
	alert(clave);
	return (clave!=''&passwor'');
	}
  </script>
    <title>Usuario</title>
    <meta charset = "UTF-8" />
  </head>
<body>
<form action="Procesarusuario.php" method="post" name="formulariousuario" onsubmit="return validar();">
<table align="center">
	<tr>
		<td>Ingresar nuevo usuario</td>				
	</tr>
	<tr>
		<td>Clave:</td>
		<td><input type="text" name="txt_clave" id="clave"></td>		
	</tr>
	<tr>
		<td>Contaseña</td>
		<td><input type="password" name="txt_contrasena"id="contra"></td>		
	</tr>
	<tr>
		<td>Nombre:</td>
		<td><input type="text" name="txt_nombre" id="nombre"></td>		
	</tr>
	<tr>
		<td>Titulo:</td>
		<td><input type="text" name="txt_titulo" id="titulo"></td>
	</tr>
	<tr>
		<td>Tipo Usuario:</td>
		<td>
		<?php 
		include ("conexion.php");		
		$link=Conectarse(); 		
		$sql=mysql_query("select * from tipousuario",$link); 
		?>

		<select name="variable" id="tipo">
		<?php
		while($lista=mysql_fetch_array($sql))
			echo "<option  value='".$lista["Id"]."'>".$lista["Descripcion"]."</option>";  
		?>
		</select>
		</td>
	</tr>	
    <tr>
	<td>
          <label>ACTIVO</label>            
          <input type = "radio"
                 name = "radSize"
                 id = "sizeSmall"
                 value = "1"
                 checked = "checked" />
          <label for = "sizeSmall">Si</label>
	</td>
	<td>          
          <input type = "radio"
                 name = "radSize"
                 id = "sizeMed"
                 value = "0" />
          <label for = "sizeMed">No</label>
	</td>    
	</tr>     
	<tr>
		<td><input type="submit" name="agregar" value ="Agregar" id="agregar"><img src="Imagenes\agregar.png"></button></td>		
		<td><input type="submit" name="modificar" value ="Modificar"id="modificar"><img src="Imagenes\modificar.jpg"></button></td>
		<td><input type="submit" name="eliminar" value ="Eliminar"id="eliminar"><img src="Imagenes\eliminar.gif"></button></td>
	</tr>
</table>
</form>
</body>
</html>