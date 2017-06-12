$(document).ready(function() {
  $("#Sesion").validate({
    rules: {
      email: {
        required: true
      },
      password: {
        required: true,
        minlength: 6
      }
    },

  submitHandler: function(){
    var email = $('form[name=Sesion] input[name=email]')[0].value;
    var password = $('form[name=Sesion] input[name=password]')[0].value;

    $.ajax({
      type:"POST",
      url:"../../../proyecto/User/login",
      data:{email: email, password: password},
      success: function(response){
        if (response == '1') {
        location.reload(true);
        }else{
        alert(response);
        }
      }
     });
  }
  });

  $('#Registrar').validate({
    rules: {
      password: {
        required: true,
        minlength: 6
      },
      password_confirmacion: {
        equalTo: "#password"
      },
      nombre: {
        required: true
      },
      email: {
        required: true
      },
      username:{
        required: true
      },
      telefono:{
        required: true
      }
    },
    submitHandler: function() {

      var nombre = $('form[id=Registrar] input[name=nombre]').val();
      var email = $('form[id=Registrar] input[name=email]').val();
      var username = $('form[id=Registrar] input[name=username]').val();
      var password = $('form[id=Registrar] input[name=password]').val();
      var telefono = $('form[id=Registrar] input[name=telefono]').val();

      $.ajax({
        type: "POST",
        url: "../../../proyecto/User/registro",
        data: {nombre: nombre, email: email, username: username, password: password, telefono: telefono},
        success: function (response) {
          if(response=='1'){
            location.reload();
          }else {
            alert(response);
          }
        }
      });
    }
  });

  $('a[name=actualizar]').click(function(a) {
    var id = a.target.id;
    $.ajax({
      type: "POST",
      url: "../../../proyecto/User/ver",
      data: {id: id},
      success: function(response) {
        response = $.parseJSON(response);
        $('form[id=Actualizar] input[name=nombre]').val(response.nombre);
        $('form[id=Actualizar] input[name=username]').val(response.username);
        $('form[id=Actualizar] input[name=email]').val(response.email);
        $('form[id=Actualizar] input[name=password]').val(response.contraseña);
        $('form[id=Actualizar] input[name=cpassword]').val(response.contraseña);
        $('form[id=Actualizar] input[name=telefono]').val(response.telefono);
      }
    });

    $('#Actualizar').validate({
      rules: {
        password: {
          required: true,
          minlength: 6
        },
        cpassword: {
          equalTo: "#password"
        },
        nombre: {
          required: true
        },
        email: {
          required: true
        },
        username:{
          required: true
        },
        telefono:{
          required: true
        }
      },
      submitHandler: function() {

        var nombre = $('form[id=Actualizar] input[name=nombre]').val();
        var email = $('form[id=Actualizar] input[name=email]').val();
        var username = $('form[id=Actualizar] input[name=username]').val();
        var password = $('form[id=Actualizar] input[name=password]').val();
        var telefono = $('form[id=Actualizar] input[name=telefono]').val();

        $.ajax({
          type: "POST",
          url: "../../../proyecto/User/actualizar",
          data: {nombre: nombre, email: email, username: username, password: password, telefono: telefono},
          success: function (response) {
            if(response=='1'){
              location.reload();
            }else {
              alert(response);
            }
          }
        });
      }
    });
  });



  $('#nuevoPedido').validate({
    rules:{
      tema:{
        required: true,
        minlength: 7
      }
    },
    submitHandler: function () {
      var tema = $('form[name=nuevoPedido] input[name=tema]').val();
      var descripcion = $('form[name=nuevoPedido] textarea[name=descripcion]').val();
      var id_detalle = $('input[name=id]').val();

      $.ajax({
        type: 'POST',
        url: '../../../proyecto/Pedido/guardar_pedido',
        data: {tema: tema, descripcion: descripcion, id_detalle: id_detalle},
        success: function (response) {
          var confirmacion = confirm('¿Desea realizar su pago ahora??');
          if(confirmacion == true){
            document.location = '../../../proyecto/Pedido/pagar_pedido/'+response;
          }else{
            document.location = '../../../proyecto/Pedido/user';
          }

        }
      });
    }
  });
});
