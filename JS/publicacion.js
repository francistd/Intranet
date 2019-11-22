//Agregar Publicacion
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#file-upload-FotoPub").on("change", function(e) {
      $("#file-upload-FotoPub").prop('disabled', true);
      var files = e.target.files,
      filesLength = files.length;

      for (var i = 0; i < filesLength; i++) {

        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<div class='text-center'><a href='#'><span class=\"pip-FotoPub\">" +
            "<div class='text-center'><img  class=\"imageThumb-FotoPub\" width='200' height='200' src=\"" + e.target.result + "\" title=\"" + 'Foto' + "\"/></div>" +
            "<br/><span class=\"remove-FotoPub\">Eliminar</span>" +
            "</span></a></div>").insertAfter("#file-preview-zone-FotoPub");

          $(".remove-FotoPub").click(function(){
            $(this).parent(".pip-FotoPub").remove();
            $("#file-upload-FotoPub").val('');
            $("#file-upload-FotoPub").prop('disabled', false);
          });
          
        });
        fileReader.readAsDataURL(f);

      }

    });

  } else {
    alert("Your browser doesn't support to File API")
  }
  
});
//Agregar Publicacion