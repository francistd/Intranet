// Agregar Noticia
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#file-upload-Noticia").on("change", function(e) {
      $("#file-upload-Noticia").prop('disabled', true);
      var files = e.target.files,
      filesLength = files.length;

      for (var i = 0; i < filesLength; i++) {

        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<div class='text-center'><a href='#'><span class=\"pip-Noticia\">" +
            "<div class='text-center'><img style='border-radius: 4px' width='200' height='150' class=\"imageThumb-Noticia\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/></div>" +
            "<br/><span class=\"remove-Noticia\">Eliminar</span>" +
            "</span></a></div>").insertAfter("#file-preview-zone-Noticia");

          $(".remove-Noticia").click(function(){
            $(this).parent(".pip-Noticia").remove();
            $("#file-upload-Noticia").val('');
            $("#file-upload-Noticia").prop('disabled', false);
          });
          
        });
        fileReader.readAsDataURL(f);

      }

    });

  } else {
    alert("Your browser doesn't support to File API")
  }
  
});
// Agregar Noticia

// Editar Noticia
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#file-upload-Editar-Noticia").on("change", function(e) {
      $("#file-upload-Editar-Noticia").prop('disabled', true);
      var files = e.target.files,
      filesLength = files.length;

      for (var i = 0; i < filesLength; i++) {

        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<div class='text-center'><a href='#'><span class=\"pip-Editar-Noticia\">" +
            "<div class='text-center'><img style='border-radius: 4px' width='200' height='150' class=\"imageThumb-Editar-Noticia\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/></div>" +
            "<br/><span class=\"remove-Editar-Noticia\">Eliminar</span>" +
            "</span></a></div>").insertAfter("#file-preview-zone-Editar-Noticia");

          $(".remove-Editar-Noticia").click(function(){
            $(this).parent(".pip-Editar-Noticia").remove();
            $("#file-upload-Editar-Noticia").val('');
            $("#file-upload-Editar-Noticia").prop('disabled', false);
          });
          
        });
        fileReader.readAsDataURL(f);

      }

    });

  } else {
    alert("Your browser doesn't support to File API")
  }
  
});
// Editar Noticia



