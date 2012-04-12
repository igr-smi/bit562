/* 
 *   Document   : JdocPlus.js
 *   Created on : Apr 9, 2012, 11:34:38 AM
 *   Author     : Michael Olmstead
 *   Description:
 *       JdocPlus javascript.
 */

	// Base example. Put code into the variable $f.
	// This is an anonymous function because it has no name.
	// "document" means that it is talking to the DOM (document object model).
	var $f = function (id) {
		return document.getElementById(id);
	};

	// Regular function. This is a named function.
	// It hides/unhides all command key values,
	// i.e. elements with a class of ".commandKey".
	function toggleExpandAll() {
		jQuery(".commandKey").slideToggle(125);
	}

	// Execute the function.
	// Function execution needs the parentheses.
	// "onclick" is an event. Most events are ignored, until javascript attaches behavior to an event.
	$f("expandButton").onclick = toggleExpandAll;

	// Toggle text size for the objects of the classes named.
	// This function works only for the object with the #headerName id.
	// It does not work for text in table objects.
    $(".command, .commandKey, .cmdName, .cmdLongName, .cmdKey, .cmdKeyValue, #headerName")
      .click(function() { 
         $(this).toggleClass("bigcode"); 
      });

	jQuery(document).ready(function() {
        jQuery(".commandKey").hide();
		// Toggle appearance of the object's parent's siblings with a class of ".commandKey".
        jQuery(".expandCommand").click(function() {
            jQuery(this).parent().nextAll(".commandKey").slideToggle(125);
        });
    });
