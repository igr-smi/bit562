<?php


require_once ('../classes/Command.php');
require_once ('./simpletest/autorun.php');

class CommandTesting extends UnitTestCase {
    
    function testCommandClassExistance(){
        $this->assertEqual(TRUE, class_exists('Command'), 'Command Class exists');                  
    }
    
    function testCommandObjInicializationWithNoParameters(){
        $command = new Command();
        $this->assertIsA($command, 'Command');        
    }
    
    function testCommandObjInicializationWithBlankParameters(){
        $kvString = '';
        $file = '';
        $location = '';
        $command = new Command($kvString, $file, $location);
        $this->assertIsA($command, 'Command');        
    }
    
    function testCommandObjInicializationWithValidParameters(){
        $kvString = '';
        $file = '';
        $location = '';
        $command = new Command($kvString, $file, $location);
        $this->assertIsA($command, 'Command');        
        
    }
    
    function testCommandObjInicializationWithUnvalidParameters(){
        
    }
    
    function testParsingKVPairsWithValidParametersOnCommandObjInicialization(){
        
    }
    
    function testParsingKVPairsWithUnvalidParametersOnCommandObjInicialization(){
        
    }
    
    function testGetCommandNameWithNotInicializedProperty(){
        
    }
    
    function testGetCommandNameWithBlankProperty(){
        
    }
    
    function testGetCommandNameWithValidProperty(){
        
    }

    
    
}
?>
