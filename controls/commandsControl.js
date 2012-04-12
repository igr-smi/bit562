// JavaScript Document

(function() {

  function COMMANDSCONTROL() {

  }

  $CMD = new COMMANDSCONTROL();
  $CMD.fn = COMMANDSCONTROL.prototype;

  $CMD.fn.init = function() {
  };

  $CMD.fn.getThis = function() {
    return this;
  };

  $CMD.fn.setUpCommands = function() {

    // Put all javascript variable declarations at the top of the function.
    var commands = {
      pipe : "commands",
      tableName : "commands",
      queryType : "select",
      object_ID : "%"
    },
        commandnames = [];

    // Load the data into structure, a jagged associative array.
    post(commands);

    commandnames = $S.getType("commands");

    // Set up the commandName selector.
    // Assumes the data objects have a category member.
    
    if ( commandnames.length > 0 ) {
      $F.fillCategorySelector("commands", "selectCommand");
      //$F.fillCategorySelector("commands");
    }

    // Display the first data value or a clear screen.    
    if ( commandnames.length > 0 ) {
      $F.present("commands", commandnames[0]);
    } else {
      $F.clearForm("commands");
    }
    
    // Establish the carousel and set its events.
    $C.setC(commandnames);
    $C.setSelect("selectCommand", $C.getC(), "commands", "commandName");
    $C.makeEventHandlers("commandcontrol", "commands", $CMD.bailout );
    
    // Put an event on the category selector.
    $("#selectCommand")
      .change(function(e) {
        $F.categorySelector(this, "selectCommand", "commandnames");
      });
  };

  // Do nothing on bailout at the moment.
  $CMD.fn.bailout = function() {
  };

})();


// Establish the helpful hints for the forms input elements.
$(document).ready( function() {
  $("fieldset").click( function() {

    var top = 0,
    topStr = "",
    message = "",
    formLocation = {};

  $("fieldset").css("background-color", "#FFFFFF");
  $(this).css("background-color", "#DCCEA6");
  formLocation = $(this).position();
  top = Math.floor(formLocation.top) + 90;
  topStr = top + "px";
  $("#helpComments").css("top", topStr);
  switch ($(this).attr("id")) {

     default:
      message = "";
      break;
  }
  $("#helpComments").html(message);
  });
});

