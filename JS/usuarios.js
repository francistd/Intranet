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
