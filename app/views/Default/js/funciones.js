$().ready(function() {
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
});
