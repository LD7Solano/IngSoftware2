<?php
session_start();

if (isset($_SESSION['admin'])){
  header('Location: index.php');
}
else{}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

  <script src="../js/jquery-2.1.4.min.js"></script>

  <?php include("modulos/head.php"); ?>

  <link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
  

  
</head>
<body>

  <div id="background">
    <div id="container-fluid">
      <div id="formBody">
        <div id="formHeader">
          <h3>INICIAR SESIÓN</h3>
        </div>
        <div id="loginForm">
          <form role="form" method="post">
            <div class="form-group">
              <label for="email">Usuario:</label>
              <input type="text" class="form-control" id="email" name="user" placeholder="usuario o email" autofocus="">
            </div>
            <div class="form-group">
              <label for="pwd">Contraseña:</label>
              <input type="password" class="form-control" id="pwd" name="pass" placeholder="contraseña">
            </div>
            <div class="checkbox">
              <label><input type="checkbox"> Mentener conectado</label>
            </div>
            <div class="form-group">
              <input type="button" name="login" id="login" value="Entrar" class="btn btn-default">
            </div>
            <br><br>
            <span id="result"></span>
          </form>
        </div>
        <div id="copyrights"><a href="#"><p>&#169; CholomachoTUBE</p></a></div>
      </div>
    </div>
  </div>
  
  
</body>
</html>