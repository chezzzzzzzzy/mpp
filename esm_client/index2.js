$(document).ready(function () {
    $('select#select_btn').change(function () {
      var sel_value = $('option:selected').val();
      if (sel_value == 0) {
        $("#form_submit").empty(); // Resetting Form
        $("#form2").css({
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
        $("div#form2").slideDown('slow');
        $("div#form2").append($("#form_submit").append($("<div/>", {
          id: 'head'
        }).append($("<h5/>").text("Rack " + i)),
  
          $("<label/>").text("Rack Location"),
          $("<input/>", {
            type: 'text',
            placeholder: 'Rack ' + i + ' - Enter rack location',
            name: 'name_' + i
          })
          
  
  
          , $("<br/>"), $("<br/>")))
      }
    }
  });
  
  