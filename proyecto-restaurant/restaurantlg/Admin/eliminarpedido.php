<?php

 include("inc/conexion.php");

session_start();

$Getid = $_GET['id'];

$insert = $link->query("DELETE  FROM pedidos where id='$Getid'");

$query=mysqli_query($insert);



header('Location: reposicion.php')


?>