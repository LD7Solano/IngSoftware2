<!DOCTYPE html>
<html>
<head>
<?php include("modulos/head.php"); ?>

<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="validar.js"></script>

<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
<script src="js/ckeditor/skins/kama"></script>


<!-- <script type="text/javascript">
     $(function() {
       var $editors = $('textarea');
       if ($editors.length) {
         $editors.each(function() {
           var editorID = $(this).attr("texto");
           var instance = CKEDITOR.instances[editorID];
           if (instance) { CKEDITOR.remove(instance); }
           CKEDITOR.replace(editorID);
         });
       }
     });
  </script>
  -->

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
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pedido de Suministros</h3>
            </div> 


            <form method="POST" action="grabar_contenido.php" id="addcontenido" method="POST" enctype="multipart/form-data" onsubmit="return validar();">           

              <div class="alert alert-danger alert-dismissible" id="alert-msg">
                <span id="msg-error"> AQUI ENTRA EL ERROR</span>
                <span id="fechar" class="close"  aria-hidden="true"><span class="fa fa-fw fa-times"></span></span>
              </div>

             

              <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control" id="namerestaurant" name="namerestaurant" placeholder="Nombre del Restaurant" type="text">
              </div></div>    

     
<!-- EDITOR -->

    <textarea name="editor" id="editor"></textarea>
    <script>
      CKEDITOR.replace('editor', {
      height: 300, //tamaño
      toolbarCanCollapse: true,
      filebrowserBrowseUrl : 'browse.php',
      filebrowserUploadUrl : '../ajax/upload-img.php'
      });
    </script>



              


              <div class="input-group">
              <div class="box-footer">
                  <button type="submit" class="btn btn-primary" id="enviar"  value="Agregar Contenido"> Enviar Datos</button>
              </div></div> 


            <!-- Supuestamente esto cierra el form pero no funka  </form>-->
          </div> 

        </div> <!-- Columna 6 -->

         <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Formulario de Registro</h3>
            </div>


            <div class="box-body">
              <!-- Date dd/mm/yyyy -->
              <div class="form-group">
                <label>Date masks:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- Date mm/dd/yyyy -->
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- phone mask -->
              <div class="form-group">
                <label>US phone mask:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- phone mask -->
              <div class="form-group">
                <label>Intl US phone mask:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- IP mask -->
              <div class="form-group">
                <label>IP mask:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

            </div>
            <!-- /.box-body -->









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







</body>
</html>
