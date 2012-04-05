<?php

/**
 * Description of Command
 *
 * @author Edwin-Lap
 */

class Command {

    private $object_ID;
    private $fileName;
    private $fileLine;
    private $commandName;
    private $kvPairs = array();
    /*
    function __construct( $kvString, $file, $location) {        
        $this->fileLine = $location;
        $this->fileName = $file;
        $this->object_ID = "";

        $commandPieces = explode("::", $kvString);
        $commandPieces = array_map('trim', $commandPieces);
        $this->commandName = $commandPieces[0];

        for($i=1; $i<count($commandPieces); $i+=1) {
            $nameValuePair = explode("=", $commandPieces[$i]);
            $nameValuePair = array_map('trim', $nameValuePair);
            $this->kvPairs[$nameValuePair[0]] = $nameValuePair[1];
        }

    }
    */
    
    function __construct( $kvString, $file, $location) {        
        
            if (func_num_args() != 3)
                throw new Exception('Number of the parameters is not 3');
            $this->setFileLine($location);
            $this->setFileName($file);        
            $this->object_ID = "";
            $this->setCommandNameAndKVPairs($kvString);
    }
    
    
    
    protected function setFileLine($location){
        if(empty($location))
            throw new Exception('$location is empty', 101);
        $this->fileLine = $location;       
    }

    protected function setFileName($file){
        if (empty($file))
            throw new Exception('$file is empty', 201);
        $this->fileName = $file;
        
    
    }
    
    protected function setCommandNameAndKVPairs($kvString){
        if (empty($kvString))
            throw new Exception('$kvString is empty', 301);
        
        $commandPieces = explode("::", $kvString);
        $commandPieces = array_map('trim', $commandPieces);
        $this->commandName = $commandPieces[0];

        for($i=1; $i<count($commandPieces); $i+=1) {
            $nameValuePair = explode("=", $commandPieces[$i]);
            $nameValuePair = array_map('trim', $nameValuePair);
            $this->kvPairs[$nameValuePair[0]] = $nameValuePair[1];
        }
        
    }
    
    public function getCommandName() {
        return $this->commandName;
    }

    public function getKVPairs() {
        return $this->kvPairs;
    }

    public function getValue($key) {
        return $this->kvPairs[$key];
    }

    public function matchObjectID($objectID) {
        return $objectID === $this->object_ID;
    }

    public function getObjectID() {
        return $this->object_ID;
    }
}

?>
