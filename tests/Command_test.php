<?php


require_once ('../classes/Command.php');
require_once ('./simpletest/autorun.php');

class CommandTesting extends UnitTestCase {
    
    function testCommandClassExistance(){
        $this->assertEqual(TRUE, class_exists('Command'), 'Command Class exists');                  
    }
    
    function testCommandObjInicializationWithNoParameters(){
        $this->expectException();
        $command = new Command();
    }
    
    function testCommandObjInicializationWithBlankParameters(){
        $kvString = '';
        $file = '';
        $location = '';        
        $this->expectException();
        $command = new Command($kvString, $file, $location);
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
