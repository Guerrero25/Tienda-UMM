$(document).ready(function(){
  $(".producto").click(function (producto) {
    var id = producto.target.id;
    console.log(id);
    $.ajax({
      type: "POST",
      data: {id: id},
      url: "../Detalle/ver",
      success: function (response) {
        response = $.parseJSON(response);
        console.log(response);
        $("#nombre").text(response.nombre);
        $("#descripcion").text(response.descripcion);
        $('#precio').text('$ '+response.precio);

      }
    });
  });
});
