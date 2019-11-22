// Agregar Departamento
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#file-upload-Depart").on("change", function(e) {
      $("#file-upload-Depart").prop('disabled', true);
      var files = e.target.files,
      filesLength = files.length;

      for (var i = 0; i < filesLength; i++) {

        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<div class='text-center'><a href='#'><span class=\"pip-Depart\">" +
            "<div class='text-center'><img style='border-radius: 4px' width='200' height='150' class=\"imageThumb-Depart\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/></div>" +
            "<br/><span class=\"remove-Depart\">Eliminar</span>" +
            "</span></a></div>").insertAfter("#file-preview-zone-Depart");

          $(".remove-Depart").click(function(){
            $(this).parent(".pip-Depart").remove();
            $("#file-upload-Depart").val('');
            $("#file-upload-Depart").prop('disabled', false);
          });
          
        });
        fileReader.readAsDataURL(f);

      }

    });

  } else {
    alert("Your browser doesn't support to File API")
  }
  
});
// Agregar Departamento

// Editar Departamento
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#file-upload-editar-Depart").on("change", function(e) {
      $("#file-upload-editar-Depart").prop('disabled', true);
      var files = e.target.files,
      filesLength = files.length;

      for (var i = 0; i < filesLength; i++) {

        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<div class='text-center'><a href='#'><span class=\"pip-editar-Depart\">" +
            "<div class='text-center'><img style='border-radius: 4px' width='200' height='150' class=\"imageThumb-editar-Depart\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/></div>" +
            "<br/><span class=\"remove-editar-Depart\">Eliminar</span>" +
            "</span></a></div>").insertAfter("#file-preview-zone-editar-Depart");

          $(".remove-editar-Depart").click(function(){
            $(this).parent(".pip-editar-Depart").remove();
            $("#file-upload-editar-Depart").val('');
            $("#file-upload-editar-Depart").prop('disabled', false);
          });
          
        });
        fileReader.readAsDataURL(f);

      }

    });

  } else {
    alert("Your browser doesn't support to File API")
  }
  
});
// Editar Departamento



