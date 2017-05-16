$(function() {

   
    $('#login').click(function(e){
      var user = $('#email').val();
      var pass = $('#pwd').val();

      if($.trim(user).length > 0 && $.trim(pass).length > 0){
        $.ajax({
          url:"../ajax/validar-login.php",
          method:"POST",
          data:{user:user, pass:pass},
          cache:"false",
          beforeSend:function() {
            $('#login').val("Conectando...");
          },
          success:function(data) {
            $('#login').val("Ingresar");
            if (data == 1) {
              $(location).attr('href','index.php');
            } else {
              Lobibox.notify('error', {
                  size: 'mini',
                  rounded: true,
                  delayIndicator: false,
                  msg: 'Error las credenciales no son correctas'
              });
            }
          }
        });
      }
      else {
            Lobibox.notify('warning', {
                size: 'mini',
                rounded: true,
                delayIndicator: false,
                msg: 'Rellene todos los campos por favor.'
            });
        }
        e.preventDefault();
    });


/* //LOGIN - OON BOTONES ALERTA DE BOOTSTRAP
    $('#login').click(function(e){
      var user = $('#email').val();
      var pass = $('#pwd').val();
      if($.trim(user).length > 0 && $.trim(pass).length > 0){
        $.ajax({
          url:"../ajax/validar-login.php",
          method:"POST",
          data:{user:user, pass:pass},
          cache:"false",
          beforeSend:function() {
            $('#login').val("Conectando...");
          },
          success:function(data) {
            $('#login').val("Entrar");
            if (data == 1) {
              $(location).attr('href','index.php');
            } else {
              $("#result").html("<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>×</button><strong>¡Error!</strong> las credenciales son incorrectas.</div>");
            }
          }
          });
      }
      else {
            $("#result").html("<div class='alert alert-dismissible alert-warning'><button type='button' class='close' data-dismiss='alert'>×</button>Rellene todos los campos por favor.</div>");
        }
        e.preventDefault();
    });
*/










});







