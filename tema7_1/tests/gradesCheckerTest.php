<?php

declare(strict_types=1);

namespace Monicaestebanponce\tests;

use PHPUnit\Framework\TestCase;
use Monicaestebanponce\Tema7_1\gradesChecker;

class gradesCheckerTest extends TestCase{

    public function testsIsFirstDiv() : void
    {
        //arrange
        $firstDivChecker = new gradesChecker();
             
        //act
        $isFirstDiv = $firstDivChecker->evaluateGrade(6.1);
        $isNotFirstDiv = $firstDivChecker->evaluateGrade(5.5);

        //assert
        $this->assertEquals("First Division", $isFirstDiv);
        $this->assertNotEquals("First Division", $isNotFirstDiv);
    }
    public function testIsSecondDiv() : void
    {
        //arrange
        $secondDivChecker = new gradesChecker();

        //act
        $isSecondDiv = $secondDivChecker->evaluateGrade(5.0);
        $isNotSecondDiv = $secondDivChecker->evaluateGrade(3.5);

        //assert
        $this->assertEquals("Second Division", $isSecondDiv);
        $this->assertNotEquals("Second Division", $isNotSecondDiv);
    }
    public function testIsThirdDiv() : void
    {
        //arrange
        $thirdDivChecker = new gradesChecker();
        //act
        $isThirdDiv = $thirdDivChecker->evaluateGrade(3.4);
        $isNotThirdDiv = $thirdDivChecker->evaluateGrade(2.0);

        //assert
        $this->assertEquals("Third Division", $isThirdDiv);
        $this->assertNotEquals("Third Division", $isNotThirdDiv);
    }
    public function testIsSuspended() : void
    {
        //arrange
        $suspendedChecker = new gradesChecker();

        //act
        $isSuspended = $suspendedChecker->evaluateGrade(3.0);
        $isNotSuspended = $suspendedChecker->evaluateGrade(3.4);

        //assert
        $this->assertEquals("Suspended", $isSuspended);
        $this->assertNotEquals("Suspended", $isNotSuspended);
    }
}
?>