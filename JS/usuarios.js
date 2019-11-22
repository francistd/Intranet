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