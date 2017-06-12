$(document).ready(function(){
  $(".producto").click(function (producto) {
    var id = producto.target.id;
    $('span').remove('.label');
    $.ajax({
      type: "POST",
      data: {id: id},
      url: "../../../proyecto/Detalle/ver",
      success: function (response) {
        response = $.parseJSON(response);
        $("#nombre").text(response.nombre);
        $("#descripcion").text(response.descripcion);
        $('#precio').text('$ '+response.precio);
        $('#imagen').attr('src','data:image/jpeg;base64,'+response.imagen);
        $('#comprar').attr('href', response.comprar);
        $.each(response.especificaciones, function (i,value) {
          $('#esp').append('<span class="label label-info">'+value+'</span>');
        });
      }
    });
  });
});
