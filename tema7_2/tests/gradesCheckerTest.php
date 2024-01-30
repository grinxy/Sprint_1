<?php

declare(strict_types=1);

namespace Monicaestebanponce\tests;

use PHPUnit\Framework\TestCase;
use Monicaestebanponce\Tema7_2\gradesChecker;


class gradesCheckerTest extends TestCase{

    /**
     * @dataProvider validGradeProvider
     */
    public function testValidGrade() : void
    {
        $validGradeChecker = new gradesChecker();

        
        $isNotValidGrade = $validGradeChecker->evaluateGrade(10.5);
        $isValidGrade = $validGradeChecker->evaluateGrade(0.0);

        $this->assertEquals("Invalid input", $isNotValidGrade);
        $this->assertNotEquals("Invalid input", $isValidGrade);

    }
    /**
     * @dataProvider isFirstDivProvider
     */
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
    /**
     * @dataProvider isSecondDivProvider
     */
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

     /**
     * @dataProvider isThirdDivProvider
     */
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
     /**
     * @dataProvider isSuspendedProvider
     */
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

    public static function validGradeProvider() : array
    {
     return [
         [-0.2, false],
         [15.0, false],
         [10.0, true],
         [3.3, true],
         [8.5, true]
     ];
    }
    
    public static function isFirstDivProvider() : array
    {
     return [
         [2.5, false],
         [5.9, false],
         [6.0, true],
         [7.3, true],
         [8.5, true]
     ];
    }
    public static function isSecondDivProvider() : array
    {
     return [
         [4.4, false],
         [3.8, false],
         [4.5, true],
         [6.0, false],
         [5.7, true]
     ];
    }
    public static function isThirdDivProvider() : array
    {
     return [
         [3.4, true],
         [4.8, false],
         [3.0, false],
         [6.0, false],
         [4.3, true]
     ];
    }
    public static function isSuspendedProvider() : array
    {
     return [
         [3.3, true],
         [4.8, false],
         [3.0, true],
         [6.0, false],
         [1.0, true]
     ];
    }
}
?>