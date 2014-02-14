<?php

//Esta linea es para incluir el archivo con las variables

include (“conexion.php”);

/* CONECTAR CON BASE DE DATOS **************** */

$con = mysql_connect(HOSTNAME,USER,PASS);

if (!$con){die(‘ERROR DE CONEXION CON MYSQL: ‘ . mysql_error());}

/* ********************************************** */

/* CONECTA CON LA BASE DE DATOS  **************** */

$database = mysql_select_db(“infopol”,$con);

if (!$database){die(‘ERROR CONEXION CON BD: ‘.mysql_error());}

/* ********************************************** */

?>