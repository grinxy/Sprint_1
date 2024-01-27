<?php
declare(strict_types=1);
/*__FILE__	magic constant that gives you the filesystem path to the current . php file
__DIR__	The directory of the file. If used inside an include, the directory of the included file is returned. This is equivalent to dirname(__FILE__). This directory name does not have a trailing slash unless it is the root directory.*/

class Path {

    private string $fileName;
    private string $filePath;
    private string $fileDirectory;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
        $this->filePath = __FILE__;
        $this->fileDirectory = __DIR__;
    }
    public function getFile() : string
    {
        return $this->filePath;
    }
    public function getDir() : string
    {
        return $this->fileDirectory;
    }
//sobreescribir un metodo magico
    public function __toString()
    {
        return "The file " . $this->fileName . " is in the following path: \n" . $this->filePath;
    }

}