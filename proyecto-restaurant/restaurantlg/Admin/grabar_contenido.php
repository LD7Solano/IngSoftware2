<?php




$host = "localhost";
$user = "root";
$pw = "123456";
	
$link = mysqli_connect($host, $user, $pw);
	
mysqli_select_db($link, "restaurant");
mysqli_query($link, "SET NAMES 'UTF8'"); //Para que se inserten las tildes correctamente
session_start();



$namerestaurant=$_REQUEST["namerestaurant"];
$editor=$_REQUEST["editor"];
$estado="Espera";


$insert = $link->query("INSERT INTO pedidos (nomrestaurant,descpedido,fecha,estado)
VALUES ('$namerestaurant','$editor',NOW(),'$estado')");

header("Location: formulario.php");	






















?>


