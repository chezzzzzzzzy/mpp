(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Get the forms we want to add validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
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

$(document).ready(function() {
    $('select#select_btn').change(function() {
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
    $("#form_submit").append($("<input/>", {
    type: 'submit',
    value: 'Register'
    }))
    }
    });
    function create(sel_value) {
    for (var i = 1; i <= sel_value; i++) {
    $("div#form1").slideDown('slow');
    $("div#form1").append($("#form_submit").append($("<div/>", {
    id: 'head'
    }).append($("<h3/>").text("Registration Form" + i)), $("<input/>", {
    type: 'text',
    placeholder: 'Name' + i,
    name: 'name_' + i
    }), $("<br/>"), $("<input/>", {
    type: 'text',
    placeholder: 'Email' + i,
    name: 'email_' + i
    }), $("<br/>"), $("<textarea/>", {
    placeholder: 'Message' + i,
    type: 'text',
    name: 'msg_' + i
    }), $("<br/>"), $("<hr/>"), $("<br/>")))
    }
    }
	});
	


	


	function previewImages() {

		var preview = document.querySelector('#preview');
		
		if (this.files) {
		  [].forEach.call(this.files, readAndPreview);
		}
	  
		function readAndPreview(file) {
	  
		  // Make sure `file.name` matches our extensions criteria
		  if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
			return alert(file.name + " is not an image");
		  } // else...
		  
		  var reader = new FileReader();
		  
		  reader.addEventListener("load", function() {
			var image = new Image();
			image.height = 100;
			image.title  = file.name;
			image.src    = this.result;
			preview.appendChild(image);
		  });
		  
		  reader.readAsDataURL(file);
		  
		}
	  
	  }
	  
	  document.querySelector('#file-input').addEventListener("change", previewImages);