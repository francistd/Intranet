
$(document).ready(function() {

//Agregar solicitud Compra 
  $( "#Precio, #Unidad" ).change(function() { 

    var Unidad = $("#Unidad").val();
    var Precio = $("#Precio").val();

    if (Unidad > 0 && Precio > 0) {
      var t = totalCompra(Unidad,Precio);

      var options2 = { style: 'currency', currency: 'DOP' };
      var numberFormat2 = new Intl.NumberFormat('es-do', options2);

      $("#Total").val(numberFormat2.format(t));
    }


  });
  //Agregar solicitud Compra 

  //Editar solicitud Compra 
  $( "#PrecioEditar, #UnidadEditar" ).change(function() { 

    var UnidadEditar = $("#UnidadEditar").val();
    var PrecioEditar = $("#PrecioEditar").val();

    if (UnidadEditar > 0 && PrecioEditar > 0) {
      var tEditar = totalCompra(UnidadEditar,PrecioEditar);

      var options2 = { style: 'currency', currency: 'DOP' };
      var numberFormat2 = new Intl.NumberFormat('es-do', options2);

      $("#TotalEditar").val(numberFormat2.format(tEditar));
    }


  });
  //Editar solicitud Compra 


  function totalCompra(unidad,precio){
    var total = unidad * precio;
    return total;
  }

});
