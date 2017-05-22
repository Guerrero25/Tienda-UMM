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

      $.ajax({
        type: "POST",
        url: "../../../proyecto/User/registro",
        data: {nombre: nombre, email: email, username: username, password: password},
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
        console.log(response.nombre);
      }
    });
  });
});
