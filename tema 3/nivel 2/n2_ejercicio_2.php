<?php
declare(strict_types = 1);
/*Crea un programa que llisti les notes dels/les alumnes d’una classe. Per això haurem d’utilitzar un array associatiu on la clau serà el nom de cada alumne. 
Cada alumne tindrà 5 notes (valorades del 0 al 10).
A més, crea una funció que, donades les notes de tots els/les alumnes, ens mostri tant la mitjana de la nota de cada alumne, com la nota mitjana de la classe sencera.*/



$grades = [
"Ana" => [7, 5, 9, 2, 7],
"Claudia" => [5, 5, 6, 7, 9],
"Samuel" => [10, 8, 9, 9, 7],
"Paul" => [4, 6, 5, 2, 7]
];

echo gradesAvg($grades);

function gradesAvg(array $grades) : string
{
    $studentAvg = 0;
    $numGrades = 0;
    $totalGrades = 0;
    $output_1 = "";

    foreach($grades as $student => $gradesStudent) 
    {
        $studentAvg = array_sum($gradesStudent)/count($gradesStudent);
        $output_1 .= "The average grade of the student $student is $studentAvg <br/>";
        
        $totalGrades += array_sum($gradesStudent);
        $numGrades += count($gradesStudent);
    }
    
    $classAvg = $totalGrades/$numGrades;
    $output_2 = "<br> The class average grade is: $classAvg <br/>";

    return $output_1 . $output_2;

}



?>