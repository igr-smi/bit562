// JavaScript Document

(function() {

  function COMMANDALLCONTROL() {

  }

  $CMD = new COMMANDALLCONTROL();
  $CMD.fn = COMMANDALLCONTROL.prototype;

  $CMD.fn.init = function() {
  };

  $CMD.fn.getThis = function() {
    return this;
  };

  $CMD.fn.setUpCommands = function() {

    // Put all javascript variable declarations at the top of the function.
    var commandall = {
      pipe : "commandall",
      tableName : "commandall",
      queryType : "select"
    },
    
        commandnames = [];

    // Load the data into structure, a jagged associative array.
    post(commandall);
    
    alert($S.getType('commandall').lenght);

    commandnames = $S.getType("commandall");

    if ( commandnames.length > 0 ) {
      $F.fillCategorySelector("commands");
    }

  //Display the first data value or a clear screen.
    if ( commandnames.length > 0 ) {

      $F.clearForm("commands");
    }
 
    // Establish the carousel and set its events.
    $C.setC(commandnames);
    $C.setSelect("commandselect", $C.getC(), "commands", "commandName");
    $C.makeEventHandlers("commandscontrol", "commands", $CMD.bailout );    
    
    
  };

  // Do nothing on bailout at the moment.
  $CMD.fn.bailout = function() {
  };

})();


// Establish the helpful hints for the forms input elements.
$(document).ready( function() {
  $("fieldset").click( function() {
      $("fieldset").css("background-color", "#FFFFFF");
      $(this).css("background-color", "#DCCEA6");  
  });
});

