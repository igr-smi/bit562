<?php

/*
 * run every test for the application
 */

/**
 * Description of all_test
 *
 * @author Igr
 */
require_once('./simpletest/autorun.php');

class AllTests extends TestSuite{
    function allTests(){
        $this->TestSuite('all tests by igr');
        //template
        //$this->addFile('./name_of_test');
        //$this->addFile('./packagerTests_test.php');
        $this->addFile('./Command_test.php');
    }
    
}

?>
