<?php

require_once('../classes/packagerTests.php');
require_once ('../classes/Packager.php');
require_once ('../classes/PackagerFactory.php');
require_once ('./simpletest/autorun.php');

class TestingPackagerTests extends UnitTestCase {
    
//    function test___ (){
//    
//    }
    
    function testLineIsCommand(){
    $lines = array(
        'asdasd',
        '//asdasd',
        '/*asdasd',
        'asd//asd',
        'asd/*asd',
        'asdasd//',
        'asdasd/*',
        '*/asdasd',
        'asd*/asd',
        'asdasd*/'
    );
    
    $wrapper = array(
        TRUE,
        FALSE
    );
    
    $block = array(
        TRUE,
        FALSE
    );
    
    $packager = new Packager(array('comment'));        
    foreach ($lines as $l){        
//        foreach ($wrapper as $w) {
//            foreach ($block as $b) {
                $wrappedline = $packager->packager($l, &$braceCount);
                $this->assertEqual('<span class="comment">', substr($wrappedline,0,22), 'This is comment');
//            }            
  
//            }
    }
        
    }
    
    
}
        

?>
