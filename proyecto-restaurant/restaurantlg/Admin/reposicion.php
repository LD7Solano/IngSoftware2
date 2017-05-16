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





  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">







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
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Reposicion de Suministros</h3>
            </div> 




 <div class="box">
           
           <?php
           $result = mysqli_query($link,"SELECT * FROM pedidos where estado like 'e%' ");
              $html="  
            <div class='box-body'>
              <table id='example1' class='table table-bordered table-striped'>
                <thead>
                <tr>
                  <th>ID</th>
                  <th>RESTAURANT</th>
                  <th>DESCRIPCION DEL PEPIDO</th>
                  <th>FECHA</th>
                  <th>ESTADO</th>
                </tr>
                </thead>";
            $x=0;

while ($fila = mysqli_fetch_array($result)){$x++;
   
    $idx=$fila["id"];



             $html.="<tr role='row' class='odd'>

                  <td>".$fila["id"]."</td>
                  <td>".$fila["nomrestaurant"]."</td>
                  <td>".$fila["descpedido"]."</td> 
                  <td>".$fila["fecha"]."</td>                   
                  <td>".$fila["estado"]."</td>

                  <th class='table-active bg-success'><a href='editareposicion.php?id=$idx'><center><span class='glyphicon glyphicon-edit'></span></center></th>
        <th class='table-active bg-danger'><a href='eliminarpedido.php?id=$idx'><center><span class='glyphicon glyphicon-trash'></span></center></th>
                      

               
                  
                </tr>";
        }
        $html.="
                
              </table>
            </div>";
    echo $html;
       


            ?>
          </div>
       



























          </div> <!-- div primary -->

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






<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>


  <?php include("modulos/querys.php"); ?>


<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>




</body>
</html>
