$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#file-upload").on("change", function(e) {
      $("#file-upload").prop('disabled', true);
      var files = e.target.files,
      filesLength = files.length;

      for (var i = 0; i < filesLength; i++) {

        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<div class='text-center'><a href='#'><span class=\"pip\">" +
            "<div class='text-center'><img style='border-radius: 4px' width='200' height='150' class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/></div>" +
            "<br/><span class=\"remove\">Eliminar</span>" +
            "</span></a></div>").insertAfter("#file-preview-zone");

          $(".remove").click(function(){
            $(this).parent(".pip").remove();
            $("#file-upload").val('');
            $("#file-upload").prop('disabled', false);
          });
          
        });
        fileReader.readAsDataURL(f);

      }

    });

  } else {
    alert("Your browser doesn't support to File API")
  }
  
});

$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#file-upload-Edit").on("change", function(e) {
      $("#file-upload-Edit").prop('disabled', true);
      var files = e.target.files,
      filesLength = files.length;

      for (var i = 0; i < filesLength; i++) {

        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<div class='text-center'><a href='#'><span class=\"pip-Edit\">" +
            "<div class='text-center'><img style='border-radius: 4px' width='200' height='150' class=\"imageThumb-Edit\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/></div>" +
            "<br/><span class=\"remove-Edit\">Eliminar</span>" +
            "</span></a></div>").insertAfter("#file-preview-zone-Edit");

          $(".remove-Edit").click(function(){
            $(this).parent(".pip-Edit").remove();
            $("#file-upload-Edit").val('');
            $("#file-upload-Edit").prop('disabled', false);
          });
          
        });
        fileReader.readAsDataURL(f);

      }

    });

  } else {
    alert("Your browser doesn't support to File API")
  }
  
});




