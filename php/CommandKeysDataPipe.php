<?php

/**********************************************************
 *  Post for this data pipe with:
 *     {
            "pipe" : "commandkeys",
 *          "queryType" : "select",
 *          "tableName" : "commandkeys",
 *          "FK_command" : "object_id from commands"
 *      }
 **********************************************************/

class CommandKeysDataPipe extends BaseDataPipe{
    protected $FK_command;
    function __construct($mapMgr, $dataManager) {
        parent::__construct($mapMgr, $dataManager);
        $this->FK_command = $_REQUEST['FK_command'];
    }
    
    function where() {
        return "WHERE FK_command = '".$this->FK_command."'";
    }

}

?>
