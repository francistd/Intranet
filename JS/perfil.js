//Agregar Foto Perfil
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#file-upload-FotoPerfil").on("change", function(e) {
      $("#file-upload-FotoPerfil").prop('disabled', true);
      var files = e.target.files,
      filesLength = files.length;

      for (var i = 0; i < filesLength; i++) {

        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<div class='text-center'><a href='#'><span class=\"pip-FotoPerfil\">" +
            "<div class='text-center'><img  class=\"imageThumb-FotoPerfil\" width='200' height='200' src=\"" + e.target.result + "\" title=\"" + 'Foto' + "\"/></div>" +
            "<br/><span class=\"remove-FotoPerfil\">Eliminar</span>" +
            "</span></a></div>").insertAfter("#file-preview-zone-FotoPerfil");

          $(".remove-FotoPerfil").click(function(){
            $(this).parent(".pip-FotoPerfil").remove();
            $("#file-upload-FotoPerfil").val('');
            $("#file-upload-FotoPerfil").prop('disabled', false);
          });
          
        });
        fileReader.readAsDataURL(f);

      }

    });

  } else {
    alert("Your browser doesn't support to File API")
  }
  
});
//Agregar Foto Perfil