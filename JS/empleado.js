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
            "<div class='text-center'><img style='border-radius: 4px' width='200' height='150' class=\"imageThumb-Emp\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/></div>" +
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