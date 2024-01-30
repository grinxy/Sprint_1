<?php declare(strict_types=1);
require_once "Path.php";

$fileName = "Path.php";
$file_1 = new Path($fileName);

echo "The file $fileName is located in the following path: " . $file_1->getFile() . "<br/>";
echo "And it is within the directory: " . $file_1->getDir() . "<br/>";

//override toString
echo $file_1 . $file_1->getFile() . "<br/>" ;
?>