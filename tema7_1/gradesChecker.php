<?php declare(strict_types=1);
namespace Monicaestebanponce\Tema7_1;

class gradesChecker {

    public function __construct()
    {}

    function evaluateGrade(float $grade): string
{
    if($grade >= 6.0){
        $output = "First Division";
    }elseif($grade >= 4.5){
        $output = "Second Division";
    }elseif($grade >= 3.3){ 
        $output = "Third Division";
    }elseif($grade < 3.3){
        $output = "Suspended";
    }   

return $output;
} 

}