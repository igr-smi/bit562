// JavaScript Document

(function() {

  function KVPAIRSCONTROL() {

  }

  $KV = new KVPAIRSCONTROL();
  $KV.fn = KVPAIRSCONTROL.prototype;

  $KV.fn.init = function() {
  };

  $KV.fn.getThis = function() {
    return this;
  };

  $KV.fn.setUpKVPairs = function() {

    // Put all javascript variable declarations at the top of the function.
    var obj = $("object_ID").text();
    
    var keyvalues = {
      pipe : "commandKeys",
      tableName : "commandKeys",
      queryType : "select",
      FK_command : obj //????????????
    },
    
    keyvaluepairs = [];

    // Load the data into structure, a jagged associative array.
    post(keyvalues);

    keyvaluepairs = $S.getType("keyvalues");

    // Display the first data value or a clear screen.
    if ( keyvaluepairs.length > 0 ) {

      $F.clearForm("keyvalues");
    }

  };



  // Do nothing on bailout at the moment.
  $KV.fn.bailout = function() {
  };

})();


// Establish the helpful hints for the forms input elements.
$(document).ready( function() {
  $("fieldset").click( function() {    
    $("fieldset").css("background-color", "#FFFFFF");
    $(this).css("background-color", "#DCCEA6");  
  });
});

