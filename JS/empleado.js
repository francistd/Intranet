$( document ).ready(function() {
  $('#buscarVT').focus();
  $(mostrarDatosEmp());
});


function mostrarDatosEmp(consulta,consulta2){
  $.ajax({
    url: "../Vistas/Tablas/tbl_empleados.php",
    type: "POST",
    dataType:"html",
    data:{consulta: consulta, consulta2:consulta2},
    success: function(r){
      $('#tblEmpleados').html(r);

    }

  });
}

$( document ).ready(function() {
  $("#btnBuscEmp").click(function(e){
    e.preventDefault();
    var valor = $('#buscarVT').val();
    var valor2 = $('#estadoEmpDep').val();
    

    if (valor != "" || valor2 != "") {
      mostrarDatosEmp(valor,valor2);
    }else{
      mostrarDatosEmp();
    }
  });

});

// Mascara para los telefonos
jQuery(function($){
 $("#telefono_emp").mask("999-999-9999");
 $('#telefono_empU').mask("999-999-9999");
})

// Cargamos los datos para mostrarlo en el modal Editar
function agregaEmpParaEdicion(idu){ 
  $.ajax({
    async: true,
    type: "POST",
    data: "idu=" + idu,
    url: "../Procesos/Empleados/CargarEmp.php",
    success: function (r){
      datos=jQuery.parseJSON(r);
      $("#fotoEmp").attr("src", "../Imagenes/Empleados/"+datos[0]);
      $('#idEmpU').val(datos[1]);
      $('#nombre_empU').val(datos[2]);
      $('#apellido_empU').val(datos[3]);
      $('#select_dep_empU').val(datos[4]);
      $('#correo_empU').val(datos[5]);
      $('#direccion_empU').val(datos[6]);
      $('#select_emp_generoU').val(datos[7]);
      $('#posicion_empU').val(datos[8]);
      $('#telefono_empU').val(datos[9]);
      $('#fecha_nac_empU').val(datos[10]);
      $('#fecha_cre_empU').val(datos[11]);
      $('#horaCre').val(datos[12]);
      $('#usuCre').val(datos[13]);
      $('#usuMod').val(datos[14]);
      $('#fecha_mod_empU').val(datos[15]);
      $('#horaMod').val(datos[16]);
      $('#estado_emp').val(datos[17]);
    }
  });

}


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
      $("#fotoEmp").hide();
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
            $("#fotoEmp").show();
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




// Guardar Empleados
$(document).ready(function(){ 


  $('#btn_guardar_emp').click(function(e){
    e.preventDefault();

    if ($('#file-upload-Emp').val()=="") {
      swal("Por Favor!", "Debe agregar una fotografia!","error");
      return false;
    }

    if ($('#nombre_emp').val()=="") {
      swal("Por Favor!", "Debe agregar un nombre!","error");
      return false;
    }

    if ($('#apellido_emp').val()=="") {
      swal("Por Favor!", "Debe agregar un apellido!","error");
      return false;
    }

    if ($('#select_dep_emp').val()=="") {
      swal("Por Favor!", "Debe agregar un departamento!","error");
      return false;
    }

    if ($('#correo_emp').val()=="") {
      swal("Por Favor!", "Debe agregar un correo electrónico!","error");
      return false;
    }

    if ($('#direccion_emp').val()=="") {
      swal("Por Favor!", "Debe agregar una dirección!","error");
      return false;
    }

    if ($('#select_emp_genero').val()=="") {
      swal("Por Favor!", "Debe agregar un género!","error");
      return false;
    }

    if ($('#posicion_emp').val()=="") {
      swal("Por Favor!", "Debe agregar una posición!","error");
      return false;
    }

    if ($('#telefono_emp').val()=="") {
      swal("Por Favor!", "Debe agregar un teléfono!","error");
      return false;
    }

    if ($('#fecha_nac_emp').val()=="") {
      swal("Por Favor!", "Debe agregar una fecha de nacimiento!","error");
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
        swal("Guardado","Con Exito","success");

      },
      error: function(jqXHR, textStatus, errorThrown) {
        swal("Fallo al Guardar","error","error");
        console.log(jqXHR);
     }
   });
    //Primer Ajax
  });

});
// Guardar Empleados

// Actualizar Empleados
$(document).ready(function(){ 

 $('#btn_actualizar_emp').click(function(e){
  e.preventDefault();

  if ($('#nombre_empU').val()=="") {
    swal("Por Favor!", "Debe agregar un nombre!","error");
    return false;
  }

  if ($('#apellido_empU').val()=="") {
    swal("Por Favor!", "Debe agregar un apellido!","error");
    return false;
  }

  if ($('#select_dep_empU').val()=="") {
    swal("Por Favor!", "Debe agregar un departamento!","error");
    return false;
  }

  if ($('#correo_empU').val()=="") {
    swal("Por Favor!", "Debe agregar un correo electrónico!","error");
    return false;
  }

  if ($('#direccion_empU').val()=="") {
    swal("Por Favor!", "Debe agregar una dirección!","error");
    return false;
  }

  if ($('#select_emp_generoU').val()==="") {
    swal("Por Favor!", "Debe agregar un género!","error");
    return false;
  }

  if ($('#posicion_empU').val()=="") {
    swal("Por Favor!", "Debe agregar una posición!","error");
    return false;
  }

  if ($('#telefono_empU').val()=="") {
    swal("Por Favor!", "Debe agregar un teléfono!","error");
    return false;
  }

  if ($('#fecha_nac_empU').val()=="") {
    swal("Por Favor!", "Debe agregar una fecha de nacimiento!","error");
    return false;
  }

  if ($('#estado_emp').val()=="") {
    swal("Por Favor!", "Debe agregar un estado!","error");
    return false;
  }

  if ($('#file-upload-Editar-Emp').val() !=="") {

      //Primer Ajax
      var inputFileImageEdit = document.getElementById("file-upload-Editar-Emp");
      var inputidEmpleadoEdit = document.getElementById("idEmpU").value;
      var inputnom_Edit = document.getElementById("nombre_empU").value;
      var inputape_Edit = document.getElementById("apellido_empU").value;
      var inputdepartamento_Edit = document.getElementById("select_dep_empU").value;
      var inputcorre_Edit = document.getElementById("correo_empU").value;
      var inputdireccion_Edit = document.getElementById("direccion_empU").value;
      var inputgenero_Edit = document.getElementById("select_emp_generoU").value;
      var inputposicion_Edit = document.getElementById("posicion_empU").value;
      var inputtel_Edit = document.getElementById("telefono_empU").value;
      var inputfecha_nac_Edit = document.getElementById("fecha_nac_empU").value;
      var inputestado_Edit = document.getElementById("estado_emp").value;


      var fileEdit = inputFileImageEdit.files[0];
      var formdataEdit = new FormData();
      formdataEdit.append('file-upload-Editar-Emp',fileEdit);
      formdataEdit.append('idEmpU',inputidEmpleadoEdit);
      formdataEdit.append('nombre_empU',inputnom_Edit);
      formdataEdit.append('apellido_empU',inputape_Edit);
      formdataEdit.append('select_dep_empU',inputdepartamento_Edit);
      formdataEdit.append('correo_empU',inputcorre_Edit );
      formdataEdit.append('direccion_empU',inputdireccion_Edit);
      formdataEdit.append('select_emp_generoU',inputgenero_Edit);
      formdataEdit.append('posicion_empU',inputposicion_Edit);
      formdataEdit.append('telefono_empU',inputtel_Edit);
      formdataEdit.append('fecha_nac_empU',inputfecha_nac_Edit);
      formdataEdit.append('estado_emp',inputestado_Edit);


      $.ajax({
        url: "../Procesos/Empleados/ActualizarEmp.php",
        type: "post",
        dataType: "html",
        data: formdataEdit,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data){
          swal("Actualizado","Con Exito","success");
          console.log(data);
        },
        error: function(jqXHR, textStatus, errorThrown) {
         swal("Fallo al Actualizar","error","error");
       }
     });
    //Primer Ajax


  }else {


      //Segundo Ajax
      var inputidEmpleadoEdit = document.getElementById("idEmpU").value;
      var inputnom_Edit = document.getElementById("nombre_empU").value;
      var inputape_Edit = document.getElementById("apellido_empU").value;
      var inputdepartamento_Edit = document.getElementById("select_dep_empU").value;
      var inputcorre_Edit = document.getElementById("correo_empU").value;
      var inputdireccion_Edit = document.getElementById("direccion_empU").value;
      var inputgenero_Edit = document.getElementById("select_emp_generoU").value;
      var inputposicion_Edit = document.getElementById("posicion_empU").value;
      var inputtel_Edit = document.getElementById("telefono_empU").value;
      var inputfecha_nac_Edit = document.getElementById("fecha_nac_empU").value;
      var inputestado_Edit = document.getElementById("estado_emp").value;


      var formdataEdit = new FormData();
      formdataEdit.append('idEmpU',inputidEmpleadoEdit);
      formdataEdit.append('nombre_empU',inputnom_Edit);
      formdataEdit.append('apellido_empU',inputape_Edit);
      formdataEdit.append('select_dep_empU',inputdepartamento_Edit);
      formdataEdit.append('correo_empU',inputcorre_Edit );
      formdataEdit.append('direccion_empU',inputdireccion_Edit);
      formdataEdit.append('select_emp_generoU',inputgenero_Edit);
      formdataEdit.append('posicion_empU',inputposicion_Edit);
      formdataEdit.append('telefono_empU',inputtel_Edit);
      formdataEdit.append('fecha_nac_empU',inputfecha_nac_Edit);
      formdataEdit.append('estado_emp',inputestado_Edit);


      $.ajax({
        url: "../Procesos/Empleados/ActualizarEmp.php",
        type: "post",
        dataType: "html",
        data: formdataEdit,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data){
          swal("Actualizado","Con Exito","success");
        },
        error: function(jqXHR, textStatus, errorThrown) {
         swal("Fallo al Actualizar","error","error");
       }
     });
    //Segundo Ajax.
  }



});

});
// Actualizar Empleados