$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#file-upload-Dep").on("change", function(e) {
      $("#file-upload-Dep").prop('disabled', true);
      var files = e.target.files,
      filesLength = files.length;

      for (var i = 0; i < filesLength; i++) {

        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<div class='text-center'><a href='#'><span class=\"pip-Dep\">" +
            "<div class='text-center'><img style='border-radius: 4px' width='200' height='150' class=\"imageThumb-Dep\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/></div>" +
            "<br/><span class=\"remove-Dep\">Eliminar</span>" +
            "</span></a></div>").insertAfter("#file-preview-zone-Dep");

          $(".remove-Dep").click(function(){
            $(this).parent(".pip-Dep").remove();
            $("#file-upload-Dep").val('');
            $("#file-upload-Dep").prop('disabled', false);
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
    $("#file-upload-Dep-Edit").on("change", function(e) {
      $("#file-upload-Dep-Edit").prop('disabled', true);
      var files = e.target.files,
      filesLength = files.length;

      for (var i = 0; i < filesLength; i++) {

        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<div class='text-center'><a href='#'><span class=\"pip-Dep-Edit\">" +
            "<div class='text-center'><img style='border-radius: 4px' width='200' height='150' class=\"imageThumb-Dep-Edit\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/></div>" +
            "<br/><span class=\"remove-Dep-Edit\">Eliminar</span>" +
            "</span></a></div>").insertAfter("#file-preview-zone-Dep-Edit");

          $(".remove-Dep-Edit").click(function(){
            $(this).parent(".pip-Dep-Edit").remove();
            $("#file-upload-Dep-Edit").val('');
            $("#file-upload-Dep-Edit").prop('disabled', false);
          });
          
        });
        fileReader.readAsDataURL(f);

      }

    });

  } else {
    alert("Your browser doesn't support to File API")
  }
  
});




