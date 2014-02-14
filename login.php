<?php 
session_start(); 
include ("conexion.php");
$link=Conectarse();  
  
if ($_POST['user']) {
//Comprobacion del envio del nombre de usuario y password
$username=$_POST['user'];
$password=$_POST['password'];
if ($password==NULL) {
echo "La password no fue enviada";
}else{
$query = mysql_query("SELECT Nombre,Contrasena FROM usuario WHERE Nombre = '".$username."'") or die(mysql_error());
$data = mysql_fetch_array($query);
if($data['Contrasena'] != $password) {
echo "Login incorrecto";
}else{
$query = mysql_query("SELECT Nombre,Contrasena FROM usuario WHERE Nombre = '".$username."'") or die(mysql_error());
$row = mysql_fetch_array($query);
$_SESSION["s_username"] = $row['user'];
echo "Has sido logueado correctamente ".$_SESSION['s_username']." y puedes acceder al index.php.";
}
}
}
?> 

<html>
  <head>
    <title>Usuario</title>
    <meta charset = "UTF-8" />
  </head>
<body>
<form action="" method="post" class="login"> 
    <div><label>Username</label><input name="user" type="text" ></div> 
    <div><label>Password</label><input name="password" type="password"></div> 
    <div><input name="login" type="submit" value="login"></div> 
</form>
</form>
</body>
</html>