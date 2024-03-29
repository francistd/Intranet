$(document).ready(function() {

// Fecha para agregar Vacaciones
  $( "#Final" ).change(function() { 
   var fecha1 = moment($("#Inicial").val()).format("DD/MM/YYYY");
   var F1 = moment(fecha1, "DD/MM/YYYY");

   var fecha2 = moment($("#Final").val()).format("DD/MM/YYYY");
   var F2 = moment(fecha2, "DD/MM/YYYY");

   if (F1 > 0 && F2 > 0) {
    var days = workingDays(F1,F2);
    $( "#dias" ).val(days);
  }

});
// Fecha para agregar Vacaciones

// Fecha para Editar Vacaciones
$( "#EditarFinal" ).change(function() { 
   var fecha1 = moment($("#EditarInicial").val()).format("DD/MM/YYYY");
   var F1 = moment(fecha1, "DD/MM/YYYY");

   var fecha2 = moment($("#EditarFinal").val()).format("DD/MM/YYYY");
   var F2 = moment(fecha2, "DD/MM/YYYY");

   if (F1 > 0 && F2 > 0) {
    var days = workingDays(F1,F2);
    $( "#diasEditar" ).val(days);
  }

});
// Fecha para Editar Vacaciones

  function workingDays(dateFrom, dateTo) {
    var from = moment(dateFrom, 'DD/MM/YYYY'),
    to = moment(dateTo, 'DD/MM/YYYY'),
    days = 0;
    
    while (!from.isAfter(to)) {
    // Si no es sabado ni domingo
    if (from.isoWeekday() !== 6 && from.isoWeekday() !== 7) {
      days++;
    }
    from.add(1, 'days');
  }
  return days;
}

});