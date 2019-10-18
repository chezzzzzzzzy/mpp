$(".select-name").on("change",function(){
    var value = $(this).find("option:selected").text();
    if(value == "No") {
        $(".message").html("<h5>Diese Produktekonfiguration ist für den CH-Strassenverkehr Zugelassen: <span class='red'>No</span></h5>");
    } else {
        $(".message").html("<h5>Diese Produktekonfiguration ist für den CH-Strassenverkehr Zugelassen: <span class='green'>Yes</span></h5>");
    }
  });

  
  $(".use-address").click(function() {
    var $row = $(this).closest("tr");    // Find the row
    var $text = $row.find(".nr").text(); // Find the text
    
    // Let's test it out
    alert($text);
});