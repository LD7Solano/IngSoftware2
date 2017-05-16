<?php

 include("inc/conexion.php");

session_start();

  $id=$_POST['id'];
  $estado=$_POST['genderRadios2'];



  $query="UPDATE pedidos SET estado='$estado' WHERE id='$id'";


  $resultado=mysqli_query($link,$query);


header('Location: reposicion.php')

?>
