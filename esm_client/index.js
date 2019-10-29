(function () {
  'use strict';
  window.addEventListener('load', function () {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();








function previewFiles() {

  var preview = document.querySelector('#preview');
  var files = document.querySelector('input[type=file]').files;

  function readAndPreview(file) {

    // Make sure `file.name` matches our extensions criteria
    if (/\.(jpe?g|png|gif)$/i.test(file.name)) {
      var reader = new FileReader();


      reader.addEventListener("load", function () {
        var image = new Image();
        image.height = 200;
        image.title = file.name;
        image.style.marginTop = '10px';
        image.style.marginRight = '10px';
        image.style.borderRadius = '3px';



        image.src = this.result;
        preview.appendChild(image);
      }, false);

      reader.readAsDataURL(file);
    }

  }

  if (files) {
    [].forEach.call(files, readAndPreview);
  }

}


// datepicker 
// $(document).ready(function () {
//   $('#js-date').datepicker({
//     format: 'dd/mm/yyyy'
//   });
// });



