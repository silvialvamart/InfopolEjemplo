<?php 
		function Conectarse() 
		{ 
		   if (!($link=mysql_connect("localhost","root","chivis"))) 
		   { 
			  echo "Error conectando a la base de datos."; 
			  exit(); 
		   } 
		   if (!mysql_select_db("infopol",$link)) 
		   { 
			  echo "Error seleccionando la base de datos."; 
			  exit(); 
		   } 
		   return $link; 
		} 
		
		$link=Conectarse(); 		
		$sql=mysql_query("select * from tipousuario",$link); 
		?>

		<select name="variable">
		<?php
		while($lista=mysql_fetch_array($sql))
			echo "<option  value='".$lista["Id"]."'>".$lista["Descripcion"]."</option>";  
		?>