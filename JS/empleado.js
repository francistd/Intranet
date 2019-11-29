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



$(document).ready(function(){ 
  $('#btn_guardar_emp').click(function(e){
    e.preventDefault();
    if ($('#nombre_emp').val()=="") {
      swal("Por Favor!", "Debe agregar un nombre de categoria!","error");
      return false;
    }

    if ($('#file-upload-Emp').val()=="") {
      swal("Por Favor!", "Debe agregar un nombre de categoria!","error");
      return false;
    }


    //Primer Ajax
    var inputFileImage = document.getElementById("file-upload-Emp");
    var inputNombre = document.getElementById("nombre_emp").value;
    var inputApellido = document.getElementById("apellido_emp").value;
    var inputDep = document.getElementById("select_dep_emp").value;
    var inputCorreo = document.getElementById("correo_emp").value;
    var inputDireccion = document.getElementById("direccion_emp").value;
    var inputGenero = document.getElementById("select_emp_genero").value;
    var inputPosicion = document.getElementById("posicion_emp").value;
    var inputTel = document.getElementById("telefono_emp").value;
    var inputFecha = document.getElementById("fecha_nac_emp").value;

    var file = inputFileImage.files[0];
    var formdata = new FormData();
    formdata.append('file-upload-Emp',file);
    formdata.append('nombre_emp',inputNombre);
    formdata.append('apellido_emp',inputApellido);
    formdata.append('select_dep_emp',inputDep);
    formdata.append('correo_emp',inputCorreo);
    formdata.append('direccion_emp',inputDireccion);
    formdata.append('select_emp_genero',inputGenero);
    formdata.append('posicion_emp',inputPosicion);
    formdata.append('telefono_emp',inputTel);
    formdata.append('fecha_nac_emp',inputFecha);
    
    $.ajax({
      url: "../Procesos/Empleados/GuardarEmpleados.php",
      type: "post",
      dataType: "JSON",
      data: formdata,
      cache: false,
      contentType: false,
      processData: false,
      success: function(data){
        $('#frmAgregaEmp')[0].reset();
        $(this).parent(".pip-Emp").remove();
        console.log("success");
      },
      error: function(jqXHR, textStatus, errorThrown) {
       console.log(textStatus, errorThrown);
     }
    });
    //Primer Ajax
  });

});