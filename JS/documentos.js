//Agregar Empleado
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#file-upload-Doc").on("change", function(e) {
      $("#file-upload-Doc").prop('disabled', true);
      var files = e.target.files,
      filesLength = files.length;

      for (var i = 0; i < filesLength; i++) {

        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<div class='text-center'><a href='#'><span class=\"pip-Doc\">" +
            "<div class='text-center'><embed class=\"imageThumb-Doc\" src=\"" + e.target.result + "\" title=\"" + 'Foto' + "\" type='application/pdf' width='100%' height='150'></div>" +
            "<br/><span class=\"remove-Doc\">Eliminar</span>" +
            "</span></a></div>").insertAfter("#file-preview-zone-Doc");


          $(".remove-Doc").click(function(){
            $(this).parent(".pip-Doc").remove();
            $("#file-upload-Doc").val('');
            $("#file-upload-Doc").prop('disabled', false);
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