<?php

declare(strict_types=1);

class Cinema
{
    private $cinemaName;  // string $cinemaName;    
    private $town;        // string $town;
    private $movieList;   // array $movieList;


    public function __construct(string $cinemaName, string $town)
    {
        $this->cinemaName = $cinemaName;
        $this->town = $town;
        $this->movieList = [];
    }
    //Getters
    public function getName(): string
    {
        return $this->cinemaName;
    }
    public function getTown(): string
    {
        return $this->town;
    }
    public function getMovieList(): array
    {
        return $this->movieList;
    }

    //Añadir película a cartelera del cine
    public function addMovie(Movie $movie): void
    {
        $this->movieList[] = $movie;
    }

    //Mostrar cartelera del cine
    public function showMovieListInfo(): string
    {
        $output = "";
        foreach ($this->movieList as $movie) {
            $output .= $movie->__tostring() . "\n";
        }
        return $output;
    }

    //Buscar película más larga
    public function longestMovie(): string
    {
        $longestMovie = null;
        $longestDuration = 0;
        for ($i = 1; $i < count($this->movieList); $i++) {
            $currentMovie = $this->movieList[$i];
            if ($currentMovie->getDuration() > $longestDuration) {
                $longestMovie = $currentMovie;
            }
        }

        return ($longestMovie !== null) ? "The longest movie in $this->cinemaName Cinema is: \n" . $longestMovie->__toString() : "No Movies to show.";
    }

    //Buscar películas de un director
    public function searchDirectorMovies(string $directorName): string
    {
        $directorMovies = [];

        foreach($this->movieList as $movie) {

            if ($directorName === $movie->getDirector()) {
                $directorMovies[] = $movie->__toString() . "\n";
              
            }
        }
        return (!empty($directorMovies)) ? ("In $this->cinemaName Cinema: \n" . "\n" . implode("\n", $directorMovies)) : "Director not found";
    }

    public function __toString(): string
    {
        return "The cinema  $this->cinemaName  located in $this->town has the following movies available: " . $this->getMovieList();
    }
}
?>
