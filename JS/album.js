//Agregar Album
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#file-upload-Album").on("change", function(e) {
      $("#file-upload-Album").prop('disabled', true);
      var files = e.target.files,
      filesLength = files.length;

      for (var i = 0; i < filesLength; i++) {

        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<div class='text-center'><a href='#'><span class=\"pip-Album\">" +
            "<div class='text-center'><img  class=\"imageThumb-Album\" width='100%' height='200' src=\"" + e.target.result + "\" title=\"" + 'Foto' + "\"/></div>" +
            "<br/><span class=\"remove-Album\">Eliminar</span>" +
            "</span></a></div>").insertAfter("#file-preview-zone-Album");

          $(".remove-Album").click(function(){
            $(this).parent(".pip-Album").remove();
            $("#file-upload-Album").val('');
            $("#file-upload-Album").prop('disabled', false);
          });
          
        });
        fileReader.readAsDataURL(f);

      }

    });

  } else {
    alert("Your browser doesn't support to File API")
  }
  
});
//Agregar Album

//Agregar Foto
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#file-upload-Foto").on("change", function(e) {
      $("#file-upload-Foto").prop('disabled', true);
      var files = e.target.files,
      filesLength = files.length;

      for (var i = 0; i < filesLength; i++) {

        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<div class='text-center'><a href='#'><span class=\"pip-Foto\">" +
            "<div class='text-center'><img  class=\"imageThumb-Foto\" width='100%' height='200' src=\"" + e.target.result + "\" title=\"" + 'Foto' + "\"/></div>" +
            "<br/><span class=\"remove-Foto\">Eliminar</span>" +
            "</span></a></div>").insertAfter("#file-preview-zone-Foto");

          $(".remove-Foto").click(function(){
            $(this).parent(".pip-Foto").remove();
            $("#file-upload-Foto").val('');
            $("#file-upload-Foto").prop('disabled', false);
          });
          
        });
        fileReader.readAsDataURL(f);

      }

    });

  } else {
    alert("Your browser doesn't support to File API")
  }
  
});
//Agregar Foto