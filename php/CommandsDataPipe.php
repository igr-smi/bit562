<?php

/**********************************************************
 *  Post for this data pipe with:
 *     {
            "pipe" : "commands",
 *          "queryType" : "select",
 *          "tableName" : "commands",
 *          "object_ID" : "%"
 *      }
 **********************************************************/
class CommandsDataPipe extends baseDataPipe {

    function __construct($tableMapManager, $dataManager) {
        parent::__construct($tableMapManager, $dataManager);        
    }

    function where() {
        return "WHERE object_ID LIKE '".$this->object_ID."'";
    }

}

