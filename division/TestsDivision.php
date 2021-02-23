<?php

use division\Division;

include('Division.php');

class TestsDivision 
{

    public function execTests() 
    {
        TestsDivision::testDivisionMain();
        TestsDivision::testDivisionCheckDivisionBy();
        TestsDivision::testDivisionAssignTrueValue();
    }

    public function testDivisionMain()
    {
        $main = new Division();
        $mainResult = $main->main();
        echo $mainResult[2] == 'Three' && $mainResult[4] == 'Five' && $mainResult[14] == 'ThreeAndFive' ?
            'pass - ' :
            'failed - ';
    }

    public function testDivisionCheckDivisionBy() 
    {
        $main = new Division();
        $trueResult = $main->checkDivisionBy(10, 10, 'TRUE');
        $falseResult = $main->checkDivisionBy(10, 9, 'FALSE');

        echo $trueResult == 'TRUE' && $falseResult == false ?
            'pass - ':
            'failed - ';

    }

    public function testDivisionAssignTrueValue()
    {
        $main = new Division();
        $mainResult = $main->assignTrueValue([false, 0, '', null, 'TRUE VALUE']);

        echo $mainResult == 'TRUE VALUE' ?
            'pass - ':
            'failed - ';
    }

}
