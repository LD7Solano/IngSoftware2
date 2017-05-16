<!DOCTYPE html>
<html>
<head>
 <?php include("modulos/head.php"); ?>
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
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>System LG</h3>

              <p>Gonzales Gamarra Luis</p>
                <p>Solano Luis David</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
   
   
      </div>
      <!-- /.row -->
     

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

<?php include("modulos/querys.php"); ?>
</body>
</html>
