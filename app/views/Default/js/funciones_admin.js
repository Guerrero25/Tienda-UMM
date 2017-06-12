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
      var user = $('form[id=loginAdmin] input[name=user]').val();
      var password = $('form[id=loginAdmin] input[name=password]').val();

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

  $('#nuevoDetalle').validate({
    rules: {
      imagen: {
        required: true,
        accept: 'image/*'
      },
      nombre:{
        required: true
      },
      precio: {
        required: true
      },
      descripcion:{
        required: true
      },
      categoria: {
        required: true
      }
    },
    submitHandler: function () {
      var formData = new FormData(document.getElementById('nuevoDetalle'));
      $.ajax({
        type: 'POST',
        url: '../Detalle/nuevo',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
          alert(response);
        }
      });
    }
  });

  $('form[id=editarDetalle]').validate({
    rules: {
      id: {
        required: true
      },
      nombre:{
        required: true
      },
      precio: {
        required: true
      },
      descripcion:{
        required: true
      },
      categoria: {
        required: true
      }
    },
    submitHandler: function () {
      var formData = new FormData($('form[id=editarDetalle]')[0]);
      $.ajax({
        type: 'POST',
        url: '../Detalle/editar',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
          alert(response);
        }
      });
    }
  });

  $('#pedidosTable').DataTable({
    "bDeferRender": false,
		"bPaginate": false,
    "bSort": true,
    "ajax": {
      "url" : "../Pedido/ver",
      "type" : "POST"
    },
    "columns": [
      {"data": "tema"},
      {"data": "descripcion"},
      {"data": "estado"},
      {"data": "opciones"}
    ]
  });

  $('#detallesTable').DataTable({
    "bDeferRender": false,
		"bPaginate": false,
    "bSort": true,
    "ajax": {
      "url" : "../Detalle/buscar",
      "type" : "POST"
    },
    "columns": [
      {"data": "nombre"},
      {"data": "precio"},
      {"data": "descripcion"},
      {"data": "especificaciones"},
      {"data": "categoria"},
      {"data": "opciones"}
    ]
  });

  $(document).on('click','button[name=usuario_id]', function (b) {
    id_user = b.target.id;
    $.ajax({
      type: 'POST',
      url: '../User/ver',
      data: {id: id_user},
      success: function (response) {
        response = $.parseJSON(response);
        $('#nombreH4').text(response.nombre);
        $('#correoH4').text(response.email);
        $('#telefonoH4').text(response.telefono);
      }
    });
  });

  $(document).on('click','button[name=confirm_pedido]', function (b) {
    id = b.target.id;
    $.ajax({
      type: 'POST',
      url: '../Pedido/confirmar',
      data: {id: id},
      success: function (response) {
        alert(response);
        location.reload(true);
      }
    });
  });

  $(document).on('click','button[name=delete_detalle]', function (b) {
    id = b.target.id;
    $.ajax({
      type: 'POST',
      url: '../Detalle/eliminar',
      data: {id: id},
      success: function (response) {
        if(response == '1'){
          alert('Se elimino correctamente');
          location.reload(true);
        }else{
          alert(response);
        }
      }
    });
  });

  $(document).on('click','button[name=edit_detalle]', function (b) {
    id = b.target.id;
    $.ajax({
      type: 'POST',
      url: '../Detalle/ver',
      data: {id: id},
      success: function (response) {
        response = JSON.parse(response || 'null');
        $('form[id=editarDetalle] input[name=id]').val(response.id);
        $('form[id=editarDetalle] input[name=nombre]').val(response.nombre);
        $('form[id=editarDetalle] input[name=precio]').val(response.precio);
        $('form[id=editarDetalle] input[name=categoria]').val(response.categoria);
        $('form[id=editarDetalle] textarea[name=descripcion]').val(response.descripcion);
      }
    });
  });
});
