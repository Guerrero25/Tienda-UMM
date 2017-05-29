$(document).ready(function() {
  $('#loginAdmin').validate({
    rules: {
      user: {
        required: true
      },
      password: {
        required: true,
        minlength: 6
      }
    },
    submitHandler: function () {
      var user = $('form[name=Admin] input[name=user]').val();
      var password = $('form[name=Admin] input[name=password]').val();

      $.ajax({
        type: 'POST',
        url: '../../../proyecto/Admin/login',
        data: {user: user, password: password},
        success: function(response) {
          if(response == '1'){
            location.reload(true);
          }else{
            alert(response);
          }
        }
      });
    }
  });
});
