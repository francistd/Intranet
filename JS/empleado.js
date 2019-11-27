//Agregar Empleado
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#file-upload-Emp").on("change", function(e) {
      $("#file-upload-Emp").prop('disabled', true);
      var files = e.target.files,
      filesLength = files.length;

      for (var i = 0; i < filesLength; i++) {

        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<div class='text-center'><a href='#'><span class=\"pip-Emp\">" +
            "<div class='text-center'><img  class=\"imageThumb-Emp\" src=\"" + e.target.result + "\" title=\"" + 'Foto' + "\"/></div>" +
            "<br/><span class=\"remove-Emp\">Eliminar</span>" +
            "</span></a></div>").insertAfter("#file-preview-zone-Emp");

          $(".remove-Emp").click(function(){
            $(this).parent(".pip-Emp").remove();
            $("#file-upload-Emp").val('');
            $("#file-upload-Emp").prop('disabled', false);
          });
          
        });
        fileReader.readAsDataURL(f);

      }

    });

  } else {
    alert("Your browser doesn't support to File API")
  }
  
});
//Agregar Empleado


// Editar Empleado
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#file-upload-Editar-Emp").on("change", function(e) {
      $("#file-upload-Editar-Emp").prop('disabled', true);
      var files = e.target.files,
      filesLength = files.length;

      for (var i = 0; i < filesLength; i++) {

        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<div class='text-center'><a href='#'><span class=\"pip-Editar-Emp\">" +
            "<div class='text-center'><img  class=\"imageThumb-Editar-Emp\" src=\"" + e.target.result + "\" title=\"" + 'Foto' + "\"/></div>" +
            "<br/><span class=\"remove-Editar-Emp\">Eliminar</span>" +
            "</span></a></div>").insertAfter("#file-preview-zone-Editar-Emp");

          $(".remove-Editar-Emp").click(function(){
            $(this).parent(".pip-Editar-Emp").remove();
            $("#file-upload-Editar-Emp").val('');
            $("#file-upload-Editar-Emp").prop('disabled', false);
          });
          
        });
        fileReader.readAsDataURL(f);

      }

    });

  } else {
    alert("Your browser doesn't support to File API")
  }
  
});
// Editar Empleado


// Agregar Empleado

function guardarEmp(){

  if ($('#nombre_emp').val()=="") {
    swal("Por Favor!", "Debe agregar un nombre de categoria!","error");
    return false;
  }


  $.ajax({
    type: "POST",
    url: "../Procesos/Empleados/GuardarEmpleados.php",
    data: $("#frmAgregaEmp").serialize(),
    success:function(r){
      if (r==1) {
        $("#frmAgregaEmp")[0].reset();
        // mostrarDatosCAT();
        // $('body').removeClass('modal-open');
        // $('.modal-backdrop').remove();
        swal("Agregado","Con Exito","success");
      }else{
        swal("Fallo al Agregar","error","error");
        console.log(r);
      }
    }

  });
}