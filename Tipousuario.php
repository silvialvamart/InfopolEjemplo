<!DOCTYPE HTML>
<html lang = "en">
  <head>
    <title>Tipo Usuario</title>
    <meta charset = "UTF-8" />
  </head>
<body>
<form action="Procesartipousuario.php" method="post" name="formulariopermiso">
<table align="center">
	<tr>
		<td>Ingresar Tipo Usuario</td>				
	</tr>
	<tr>
		<td>Descripcion:</td>
		<td><input type="text" name="descripcion"></td>
	</tr>
		<td>
          <label>Radio buttons</label>            
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
		<td><input type="submit" name="agregar" value ="Agregar"><img src="Imagenes\agregar.png"></button></td>		
		<td><input type="submit" name="modificar" value ="Modificar"><img src="Imagenes\modificar.jpg"></button></td>
		<td><input type="submit" name="eliminar" value ="Eliminar"><img src="Imagenes\eliminar.gif"></button></td>
	</tr>
</Table>
</form>
</body>
</html>