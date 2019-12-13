$( document ).ready(function() {
  $('#btnUsuCreaFiltro').focus();
  $(mostrarDatosUsu());
});

$(document).ready(function(){

 $('#btnLoginn').click(function(e){
  e.preventDefault();

  if ($('#usuari').val()==="") {
    swal("Por Favor!", "Debes introducir un usuario!","error");
    return false;
  }
  if ($('#pwd').val()==="") {
    swal("Por Favor!", "Debes introducir una contraseña!","error");
    return false;
  }
  datos=$('#formLogin').serialize();
  $.ajax({
    type:"POST",
    url:"Procesos/Login/Login.php",
    data:datos,
    success:function(r){
      if (r==1) {
        window.location="Vistas/inicio.php";
        console.log(r);
      }else{
        swal({title: "Usuario/Contraseña incorrectas",icon: "error"});
        console.log(r);
      }

    }
  });

});

});

// Mostrar datos en Tabla
function mostrarDatosUsu(consultaUsu,consultaUsu2){
  $.ajax({
    url: "../Vistas/Tablas/tbl_usuarios.php",
    type: "POST",
    dataType:"html",
    data:{consultaUsu: consultaUsu, consultaUsu2:consultaUsu2},
    success: function(r){
      $('#tblUsuarios').html(r);

    }
    
  });
}
// Mostrar datos en Tabla

// Cargar Datos en modal Editar
function agregaUsuParaEdicion(idu){ 
  $.ajax({
    async: true,
    type: "POST",
    data: "idu=" + idu,
    url: "../Procesos/Usuarios/CargarUsu.php",
    success: function (r){
      datos=jQuery.parseJSON(r);
      $('#ID_Cre_usu_editar').val(datos[0]);
      $('#nom_Cre_usu_editar').val(datos[1]+' '+datos[2]);
      $('#dep_Cre_usu_editar').val(datos[3]);
      $('#usrName_Cre_usu_editar').val(datos[4]);
      $('#tipoUsu_Cre_usu_editar').val(datos[5]);
      $('#fecha_Cre_usu_editar').val(datos[6]);
      $('#hora_Cre_usu_editar').val(datos[7]);
      $('#fechaMod_Cre_usu_editar').val(datos[8]);
      $('#usu_Cre_usu_editar').val(datos[9]);
      $('#usuMod_Cre_usu_editar').val(datos[10]);
      $('#horaMod_Cre_usu_editar').val(datos[11]);
      $('#estado_Cre_usu_editar').val(datos[12]);
    }
  });

}
// Cargar Datos en modal Editar

// Filtro Busqueda
$( document ).ready(function() {
  $("#btnUsuCreaFiltro").click(function(e){
    e.preventDefault();
    var valor = $('#buscarCreaUsu').val();
    var valor2 = $('#SelectDepCreUsu').val();
    

    if (valor != "" || valor2 != "") {
      mostrarDatosUsu(valor,valor2);
    }else{
      mostrarDatosUsu();
    }
  });

});
// Filtro Busqueda

//Comprobar Usuario Existente
$(document).ready(function(){ 
  $("#existe").hide();
  $("#noexiste").hide();

  $("#nom_usu_agre").keyup(function() {

    if ($("#nom_usu_agre").val()) {
      // $("#validar").show();

      jQuery.ajax({
        url: "../Procesos/Usuarios/ComprobarUsuExiste.php",
        data:'nom_usu='+$("#nom_usu_agre").val(),
        type: "POST",
        success:function(data){

          if (data == 1) {
            $("#noexiste").hide();
            $("#existe").show();
            $('#btn_crea_usu').attr("disabled", true);
          } 
          else if(data == 0){
            $("#existe").hide();
            $("#noexiste").show();
            $('#btn_crea_usu').attr("disabled", false);
          }
          
        }

      });

    }else {
      $("#existe").hide();
      $("#noexiste").hide();
      $('#btn_crea_usu').attr("disabled", false);

    }

  });
});
//Comprobar Usuario Existente


// Guardar Usuario
$(document).ready(function(){ 


  $('#btn_crea_usu').click(function(e){
    e.preventDefault();

    if ($('#select_usu_nom').val()=="") {
      swal("Por Favor!", "Debe buscar un nombre!","error");
      return false;
    }

    if ($('#dep_crea_usu').val()=="") {
      swal("Por Favor!", "Debe buscar un departamento!","error");
      return false;
    }

    if ($('#nom_usu_agre').val()=="") {
      swal("Por Favor!", "Debe agregar un nombre de usuario!","error");
      return false;
    }

    if ($('#contraseña_agre').val()=="") {
      swal("Por Favor!", "Debe agregar una contraseña!","error");
      return false;
    }

    if ($('#contraseña_agre').val().length < 8) {
    swal("Contraseña!", " Introduzca almenos 8 caracteres!","error");
    return false;
  }

   if ($('#contraseña_agre').val() !== $('#confirmarContraseña').val()) {
    swal("Por Favor!", "Contraseñas no coinciden","error");
    return false;
  }

    if ($('#select_tipo_usu').val()=="") {
      swal("Por Favor!", "Debe seleccionar un tipo de usuario!","error");
      return false;
    }


    //Primer Ajax
    var inputSelectNombre = document.getElementById("select_usu_nom").value;
    var inputSelectDepart = document.getElementById("dep_crea_usu").value;
    var inputNomUsu = document.getElementById("nom_usu_agre").value;
    var inputPwdUsu = document.getElementById("contraseña_agre").value;
    var inputTipoUsu = document.getElementById("select_tipo_usu").value;

    var formdata = new FormData();
    formdata.append('select_usu_nom',inputSelectNombre);
    formdata.append('dep_crea_usu',inputSelectDepart);
    formdata.append('nom_usu_agre',inputNomUsu);
    formdata.append('contraseña_agre',inputPwdUsu);
    formdata.append('select_tipo_usu',inputTipoUsu);
    
    $.ajax({
      url: "../Procesos/Usuarios/GuardarUsuarios.php",
      type: "post",
      dataType: "JSON",
      data: formdata,
      cache: false,
      contentType: false,
      processData: false,
      success: function(data){
        $('#frmAgregaUsu')[0].reset();
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
// Guardar Usuario


// Actualizar Usuarios
$(document).ready(function(){ 

 $('#btnEditarCrearUsuario').click(function(e){
  e.preventDefault();

  if ($('#ID_Cre_usu_editar').val()=="") {
    swal("Por Favor!", "Identificador incorrecto!","error");
    return false;
  }

  if ($('#tipoUsu_Cre_usu_editar').val()=="") {
    swal("Por Favor!", "Debe seleccionar un tipo de usuario!","error");
    return false;
  }

  if ($('#estado_Cre_usu_editar').val()=="") {
    swal("Por Favor!", "Debe agregar un estado!","error");
    return false;
  }

      //Primer Ajax
      var inputidIdUsuEdit = document.getElementById("ID_Cre_usu_editar").value;
      var inputnom_Edit = document.getElementById("tipoUsu_Cre_usu_editar").value;
      var inputape_Edit = document.getElementById("estado_Cre_usu_editar").value;

      var formdataUserEdit = new FormData();
      formdataUserEdit.append('ID_Cre_usu_editar',inputidIdUsuEdit);
      formdataUserEdit.append('tipoUsu_Cre_usu_editar',inputnom_Edit);
      formdataUserEdit.append('estado_Cre_usu_editar',inputape_Edit);

      $.ajax({
        url: "../Procesos/Usuarios/ActualizarUsu.php",
        type: "post",
        dataType: "html",
        data: formdataUserEdit,
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


});

});
// Actualizar Usuarios


// Eliminar Usuario
function eliminarDatosUsu(id_usu){
  swal({
    title: "Deseas Eliminar este Registro?",
    text: "Una vez Eliminado no podra ser Recuperado!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      $.ajax({
        type: "POST",
        data: "id_usu=" + id_usu,
        url: "../Procesos/Usuarios/BorrarUsuario.php",
        success: function (r){
          if (r==1) {
            console.log(r);
            mostrarDatosUsu();
            swal("Eliminado","Con Exito","success");
          }else{
            swal("Fallo al Eliminar");
            console.log(r);
          }
        }
      });
    } 
  });
}
// Eliminar Usuario