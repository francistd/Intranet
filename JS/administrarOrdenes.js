$(document).ready(function() {

//Administrar solicitud Compra 
  $( "#PrecioAdm, #UnidadAdm" ).change(function() { 

    var UnidadAdm = $("#UnidadAdm").val();
    var PrecioAdm = $("#PrecioAdm").val();

    if (UnidadAdm > 0 && PrecioAdm > 0) {
      var tAdm = totalCompra(UnidadAdm,PrecioAdm);

      var options2 = { style: 'currency', currency: 'DOP' };
      var numberFormat2 = new Intl.NumberFormat('es-do', options2);

      $("#TotalAdm").val(numberFormat2.format(tAdm));
    }


  });
  //Administrar solicitud Compra 


  function totalCompra(unidad,precio){
    var total = unidad * precio;
    return total;
  }

});
