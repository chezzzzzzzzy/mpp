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

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#blah')
        .attr('src', e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  }
}

$(document).ready(function () {
  $('select#select_btn').change(function () {
    var sel_value = $('option:selected').val();
    if (sel_value == 0) {
      $("#form_submit").empty(); // Resetting Form
      $("#form1").css({
        'display': 'none'
      });
    } else {
      $("#form_submit").empty(); //Resetting Form
      // Below Function Creates Input Fields Dynamically
      create(sel_value);
      // Appending Submit Button To Form
      $("#form_submit").append( "<a href='allForms.php'>Test</a>" );
    }
  });
  function create(sel_value) {
    for (var i = 1; i <= sel_value; i++) {
      $("div#form1").slideDown('slow');
      $("div#form1").append($("#form_submit").append($("<div/>", {
        id: 'head'
      }).append($("<h5/>").text("Rack " + i)),

        $("<label/>").text("Rack Size (Length in mm)"),
        $("<input/>", {
          type: 'text',
          placeholder: 'Rack ' + i + ' - Enter rack size (length)',
          name: 'name_' + i
        }),
        $("<label/>").text("Rack Size (Breadth in mm)"),
        $("<input/>", {

          type: 'text',
          placeholder: 'Rack ' + i + ' - Enter rack size (breadth)',
          name: 'name_' + i
        }),
        $("<label/>").text("Breaker Size"),
        $("<input/>", {

          type: 'text',
          placeholder: 'Rack ' + i + ' - Enter breaker size',
          name: 'name_' + i
        }),
        $("<label/>").text("Breaker Quantity"),
        $("<input/>", {

          type: 'text',
          placeholder: 'Rack ' + i + ' - Enter breaker quantity',
          name: 'name_' + i
        })


        , $("<br/>"), $("<br/>")))
    }
  }
});




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


$(document).ready(function () {
  $('#js-date').datepicker();
});
