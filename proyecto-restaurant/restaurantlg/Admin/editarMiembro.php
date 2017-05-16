
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
<html lang="es-ES" xml:lang="es" dir="ltr">
<head>


<title>Creando Ficha | SeriesCom</title>





</head>

<body>



    <div class="warp-main">


        <ul class="breadcrumb">
  <li><a>Administración</a></li>
  <li><a>Crear</a></li>
  <li class="active">ficha</li>
</ul>
<div class="row input-p">




    <div class="col-xs-12 col-sm-6 col-lg-8">




<?php

$id=$_GET['id'];

$query="SELECT id,nomrestaurant,descpedido, fecha, estado FROM pedidos WHERE id='$id'"; // dato bueno del video

//$query = mysqli_query($link, "SELECT email, pass FROM user WHERE id='$id'");

//$resultado=$link->query($query);

$resultado=mysqli_query($link,$query);


$row=$resultado->fetch_assoc();


?>


 <center><h3> Editar Miembos</h3></center>

  <form name="modificar_miembro" method="POST" action="actualizarMiembro.php">
<input type="hidden" name="id" value="<?php echo $id; ?>">


    <div class="form-group">
        <label class="control-label col-xs-3">Nombres:</label>
        <div class="col-xs-9">
            <input type="text" id="txtnombre" name="txtnombre" class="form-control" value="<?php echo $row['nomrestaurant']; ?>"required>
        </div>
    </div><br><br>

    <div class="form-group">
        <label class="control-label col-xs-3" >Telefono:</label>
        <div class="col-xs-9">
            <input type="tel" id="txttelefono" name="txttelefono"class="form-control" value="<?php echo $row['descpedido']; ?>">
        </div>
    </div><br><br>

  <div class="form-group">
        <label class="control-label col-xs-3">Direccion:</label>
        <div class="col-xs-9">
            <input type="text" id="txtdireccion" name="txtdireccion" class="form-control" value="<?php echo $row['fecha']; ?>" required>
        </div>
    </div><br><br>



  <div class="form-group">
        <label class="control-label col-xs-3">Fecha de Nacimiento::</label>
        <div class="col-xs-9">
            <input class="form-control" id="date" name="date"  type="text" value="<?php echo $row['estado']; ?>" />
        </div>
    </div><br><br>


    <br>


    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">



           <input type="submit" class="btn btn-primary"  name="Guardar" value="Guardar Edicion de Registro">
            <input type="reset" class="btn btn-default" value="Limpiar">
        </div>
    </div>


</form>


    </div>




</div>

    <script type="text/javascript" src="../js/jquery-ui.js"></script>

    </div>



  <script>
  $(document).ready(function(){
    var date_input=$('input[name="date"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
      format: 'mm/dd/yyyy',
      container: container,
      todayHighlight: true,
      autoclose: true,
    })
  })
</script>



</body>
</html>
