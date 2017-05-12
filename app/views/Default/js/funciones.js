$(document).ready(function() {
  $("#Sesion").validate({
    rules: {
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 6
      }
    },

    messages: {
      email: {
        required: "<center><td colSpan='2'><font color='#CD2C24'>Debe ingresar un email.</font></td></center>"
      },
      password: {
        required: "<center><td colSpan='2'><font color='#CD2C24'>Ingrese una contraseña.</font></td></center>"
      }
    }
  });
  $("#btnLogin").click(function(){
    var email = $('form[name=Sesion] input[name=email]')[0].value;
    var password = $('form[name=Sesion] input[name=password]')[0].value;

    if (email == '' || password == '') {

    } else {
      $.ajax({
        type:"POST",
        url:"<?php echo URL;?>public/User/login",
        data:{email: email, password: password},
        success: function(response){
          if (response == '1') {
            location.href = '../Principal/index';
          }else{
            alert(response);
          }
        }
      });
    }
    return false;
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
      }
    },
    submitHandler: function() {

      var nombre = $('form[id=Registrar] input[name=nombre]').val();
      var email = $('form[id=Registrar] input[name=email]').val();
      var username = $('form[id=Registrar] input[name=username]').val();
      var password = $('form[id=Registrar] input[name=password]').val();

      $.ajax({
        type: "POST",
        url: "../User/registro",
        data: {nombre: nombre, email: email, username: username, password: password},
        success: function (response) {
          if(response=='1'){
            location.href = '../Principal/index';
          }else {
            alert(response);
          }
        }
      });
    }
  });
});
