<?php

$host = "localhost";
$user = "root";
$pw = "123456";

$link = mysqli_connect($host, $user, $pw);

//	if ($link){
mysqli_select_db($link, "restaurant");
//	print("<strong>Conectado a la base de datos correctamente</strong>");
//	}	else{
//	die("<strong>Error al conectar con loa base de adatos</strong>");
//}

mysqli_query($link, "SET NAMES 'UTF8'"); //Para que se inserten las tildes correctamente
?>
