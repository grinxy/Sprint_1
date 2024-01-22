<?php

declare(strict_types=1);

class Movie
{

    private $movieName;
    private $duration;
    private $director;

    public function __construct(string $movieName, int $duration, string $director)
    {
        $this->movieName = $movieName;
        $this->duration = $duration;
        $this->director = $director;
    }
    //Getters
    public function getMovieName() : string
    {
        return $this->movieName;
    }
    public function getduration() : int
    {
        return $this->duration;
    }

    public function getDirector() : string
    {
        return $this->director;
    }

    public function __toString() : string
    {
        return "Movie: $this->movieName \n Duration: $this->duration min \n Director: $this->director \n";
    }
}
?>