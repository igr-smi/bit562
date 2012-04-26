<?php

/**********************************************************
 *  Post for this data pipe with:
 *     {
            "pipe" : "commandall",
 *          "queryType" : "select",
 *          "tableName" : "commandall",
 *      }
 **********************************************************/

class CommandAllDataPipe extends BaseDataPipe{
    function __construct($mapMgr, $dataManager) {
        parent::__construct($mapMgr, $dataManager);
    }
    
    function select() {
        $sql = "SELECT ";
        $fieldList = "";
        $fieldList = $this->fieldlist($fieldList);
        $from = " FROM commands ";
        $join = "LEFT OUTER JOIN commandkeys ";
        $on = "ON commands.object_ID = commandkeys.FK_command";
        return $sql.$fieldList.$from.$join.$on;        
    }
    
}

?>
