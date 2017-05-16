<?php

$host = "localhost";
$user = "root";
$pw = "123456";
  
$link = mysqli_connect($host, $user, $pw);
  
mysqli_select_db($link, "restaurant");
mysqli_query($link, "SET NAMES 'UTF8'"); //Para que se inserten las tildes correctamente
session_start();

?>


<!DOCTYPE html>
<html>
<head>
<?php include("modulos/head.php"); ?>

<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="validar.js"></script>

<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
<script src="js/ckeditor/skins/kama"></script>



</head>
<body class="hold-transition skin-blue sidebar-mini">


<div class="wrapper">

<?php include("modulos/header.php"); ?>
<?php include("modulos/siderbar.php"); ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<?php include("modulos/contheader.php"); ?>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-11">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">alidar Pedio</h3>
            </div> 


<?php

$id=$_GET['id'];

$query="SELECT id,nomrestaurant,descpedido, fecha, estado FROM pedidos WHERE id='$id'"; // dato bueno del video

//$query = mysqli_query($link, "SELECT email, pass FROM user WHERE id='$id'");

//$resultado=$link->query($query);

$resultado=mysqli_query($link,$query);


$row=$resultado->fetch_assoc();


?>


            <form method="POST" action="actualizarpedido.php" id="addcontenido" method="POST" enctype="multipart/form-data" onsubmit="return validar();">   

            <input type="hidden" name="id" value="<?php echo $id; ?>">        

              <div class="alert alert-danger alert-dismissible" id="alert-msg">
                <span id="msg-error"> AQUI ENTRA EL ERROR</span>
                <span id="fechar" class="close"  aria-hidden="true"><span class="fa fa-fw fa-times"></span></span>
              </div>             

              <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" id="namerestaurant" name="namerestaurant" value="<?php echo $row['nomrestaurant']; ?>" type="text">
              </div></div>    


<div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" id="namerestaurant" name="namerestaurant" value="<?php echo $row['fecha']; ?>" type="text">
              </div></div>  

              <div class="form-group">
        <label class="control-label col-xs-3">Estado:</label>
        <div class="col-xs-2">
            <label class="radio-inline">
                <input type="radio"   name="genderRadios2" value="Espera" <?php if( $row['estado'] == "Espera" ) { ?>checked="checked"<?php } ?> required> ESPERA
            </label>
        </div>
        <div class="col-xs-2">
            <label class="radio-inline">
                <input type="radio"   name="genderRadios2" value="Aceptado"  <?php if( $row['estado'] == "Aceptado" ) { ?>checked="checked"<?php } ?> required> ACEPTADO<br>
                <span>Seleccione Aceptado para la Aceotacion de este PEDIDO</span>
            </label>
        </div>
    </div><br><br>


          <div class="input-group">
              <div class="box-footer">
                  <button type="submit" class="btn btn-primary" id="enviar"  value="Agregar Contenido"> REGISTRAR ACEPTACION DE PEDIDO</button>
              </div></div> 

     
<!-- EDITOR -->

    <textarea name="editor" id="editor"><spam><?php echo $row['descpedido']; ?></spam> </textarea> </b>

 



  




        


           
          </div> 

        </div> <!-- Columna 6 -->

        

      </div> <!-- /.row -->





     
     

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("modulos/footer.php"); ?>

  <!-- Control Sidebar -->
  

  <?php include("modulos/controlsiderbar.php"); ?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>


  <?php include("modulos/querys.php"); ?>


 <script>
      CKEDITOR.replace('editor', {
      height: 300, //tamaño
      toolbarCanCollapse: true,
      filebrowserBrowseUrl : 'browse.php',
      filebrowserUploadUrl : '../ajax/upload-img.php'
       });
    </script>




</body>
</html>
