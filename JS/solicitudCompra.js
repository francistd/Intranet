
$(document).ready(function() {

  $( "#Precio, #Unidad" ).change(function() { 
    var numero = 1E6 + 56 / 100; //Un millón y 56 centésimas

    var Unidad = $("#Unidad").val();
    var Precio = $("#Precio").val();

    if (Unidad > 0 && Precio > 0) {
      var t = totalCompra(Unidad,Precio);

      var options2 = { style: 'currency', currency: 'DOP' };
      var numberFormat2 = new Intl.NumberFormat('es-do', options2);

      $("#Total").val(numberFormat2.format(t));


    }

  });


  function totalCompra(unidad,precio){
    var total = unidad * precio;
    return total;
  }

});