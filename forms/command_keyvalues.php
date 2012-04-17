<?php
session_start();

if ($_SESSION['loggedIn'] != true)
  header('location:../forms/login.php');

?>

<html>
  <head>
    <title>Commands</title>

      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>

      <link rel="stylesheet" href="../css/bit561.css" type="text/css" />
  </head>
  <body>

    <div id="leftside">
      <img src="../images/leftside.jpg" width="125" height="1275"></img>
    </div>

    <div id="rightside">
      <img src="../images/rightside.jpg" width="125" height="1275"></img>
    </div>

    <div id="topside">
      <h2 align="center" id="pagetitle">Commands</h2>
    </div>

    <div id="helpComments">
    </div>

    <div id="bgframe">
      <div id="instructions">
      </div>

      <div id="main">

        <h3>Commands Full Definition</h3>

        <select id="commandselect" class="wideSelect">        
          <option value="No Command Selected">No Command Selected</option>
        </select>
        <br />        

        <form id="commandscontrol" class="dataControl">
          <br />
          <img src="../images/prevArrow.jpg"
            title="Look at the previous file in the dropdown list." />
          <img src="../images/SaveData.jpg"
            title="Save the current file information." />
          <img src="../images/NewData.jpg"
            title="Blank the form to create a new file." />
          <img src="../images/DeleteData.jpg"
            title="Remove the current file from the database." />
          <img src="../images/ExitData.jpg" title="Exit the file form." />
          <img src="../images/nextArrow.jpg"
            title="Look at the next file in the dropdown list." />
          <input type="hidden" class="formdata dirtyFlag" value="false" />          
        </form>

        <form name="commands" id="commands">
          <fieldset id="object_ID" class="required">
            <table border="0" cellspacing="9" cellpadding="0">
              <tr>
                <td class="fields">object_ID:</td>
              </tr>
              <tr>
                <td>
                  <input type="text" class="formdata object_ID"
                    size="84" value="" />
                </td>
              </tr>
            </table>
          </fieldset>
            
          <fieldset id="commandName" class="required">
            <table border="0" cellspacing="9" cellpadding="0">
              <tr>
                <td class="fields">Command name
                  <span class="asterisk">&nbsp;*</span>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="text" class="formdata commandName" size="84"
                    value="" />
                </td>
              </tr>
                <tr>
                  <td class="undertitle">Name of the Command. (It should 
                      be capitalized)</td>
                </tr>
            </table>
          </fieldset>
          
          <fieldset id="name" class="required">
            <table border="0" cellspacing="9" cellpadding="0">
              <tr>
                <td colspan="2" class="fields">Name
                  <span class="asterisk">&nbsp;*</span>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="text" class="formdata name" size="84"
                    value="" />
                </td>
              </tr>
                <tr>
                  <td class="undertitle">Short description of the Command</td>
                </tr>
            </table>
          </fieldset>
            
          <fieldset id="description" class="required">
            <table border="0" cellspacing="9" cellpadding="0">
              <tr>
                <td colspan="2" class="fields">Description
                  <span class="asterisk">&nbsp;*</span>
                </td>
              </tr>
              <tr>
                <td>
                  <textarea class="formdata description" rows="9" 
                            cols="63" >
                  </textarea>
                </td>
              </tr>
              <tr>
                <td class="undertitle">Full description of the Command</td>
              </tr>
            </table>
          </fieldset>        
       </form>
      </div>
    </div>

    <script src="../tools/request.js" type="text/javascript"></script>
    <script src="../tools/utilities.js" type="text/javascript"></script>
    <script src="../javascript/tools/getElements/getElements.js"
      type="text/javascript"></script>
    <script src="../base/structure.js" type="text/javascript"></script>
    <script src="../base/carousel.js" type="text/javascript"></script>
    <script src="../base/formhandler.js" type="text/javascript"></script>
    <script src="../base/view.js" type="text/javascript"></script>
    <script src="../base/validator.js" type="text/javascript"></script>
    <script src="../controls/commandsControl.js"
      type="text/javascript"></script>

    <script>

      $CMD.setUpCommands();

    </script>
  </body>
</html>
