<?php

declare(strict_types=1);
require_once "Movie.php";
require_once "Cinema.php";

/*Imagina que has de presentar el catàleg de pel·lícules d'una cadena de cinemes. Cada cinema té un nom, una població a on pertany, i un llistat de pel·lícules. Cada pel·lícula té un nom, una duració, i un director/a.

Es tracta de fer un programa que ens permeti enregistrar aquesta informació per a després:

Per a cada cinema, mostrar les dades de cada pel·lícula.
Per a cada cinema, mostrar la pel·lícula amb major duració.
Implementa una funció que cerqui pel nom del director/a pel·lícules en diferents cinemes. No cal repetir pel·lícules.
A més, pots aprofitar aquest exercici per treballar una bona presentació amb HTML+CSS que doni suport a la lògica.*/

$cinemas = [];
do {
    $option = intval(readline("\n Choose what you want to do: \n 1. Register a cinema \n 2. Register a movie \n 3. Show the movie lineup at a cinema \n 4. Show the longest movie at a cinema \n 5. Search for movies by director \n 0. Exit the program \n"));

    switch ($option) {
        case 1:
            $cinemaName = strtolower(readline("Enter the cinema name: \n"));
            $town = strtolower(readline("Enter the town: \n"));
            $newCinema = new Cinema($cinemaName, $town);
            $cinemas[] = $newCinema;
            echo "Cinema added successfully. \n";
            break;

        case 2:
            $movieName = strtolower(readline("Enter the movie title: \n"));
            $duration = intval(readline("Enter the duration: \n"));
            $director = strtolower(readline("Enter the director's name: \n"));
            $cinemaMovie = strtolower(readline("Specify the cinema where it will be shown:\n"));
            $newMovie = new Movie($movieName, $duration, $director);
            echo addMovie2Cinema($cinemaMovie, $newMovie, $cinemas);
            break;

        case 3:
            $cinemaMovie = strtolower(readline("Enter the cinema name to see the lineup:\n"));
            echo "These are the movies showing at $cinemaMovie Cinema: \n" . "\n" . showCinemaMovies($cinemaMovie);
            break;

        case 4:
            $cinemaMovie = strtolower(readline("Enter the cinema name to see the longest movie:\n"));
            echo showLongestMovie($cinemaMovie);
            break;

        case 5:
            $directorName = strtolower(readline("Enter the director's name to see available movies: \n"));
            echo "These are the movies directed by $directorName: \n" . showDirectorMovies($directorName, $cinemas);
            break;

        case 0:
            echo "Goodbye!.";
            break;
    }
} while ($option !== 0);


//Validacion y busqueda cine
function searchCinema(string $cinemaName): ?Cinema  //?Cinema --> nullable type. Pude devolver null u objeto tipo Cinema
{
    $i = 0;
    $cinemaFound = false;
    $targetCinema = null;
    while ($i < count($GLOBALS["cinemas"]) && !$cinemaFound) {
      
        $current = $GLOBALS["cinemas"][$i];
        if ($cinemaName === $current->getName()) {
            $targetCinema = $current;
            $cinemaFound = true;
        }
        $i++;
    }
    return $targetCinema;
}
//Validacion cine para añadir película
function addMovie2Cinema(string $cinemaMovie, Movie $newMovie, array $cinemas): string
{
    $cinema = searchCinema($cinemaMovie);
    if (!isset($cinema)) {
        $output = "Cinema not found. \n";
    } else {
        $cinema->addMovie($newMovie);
        $output = "Movie correctly added.\n";
    } 
    return $output;
}
//Validacion cine para ver cartelera
function showCinemaMovies(string $cinemaMovie): string
{
    $cinema = searchCinema($cinemaMovie);
    if (!isset($cinema)) {
        $output = "Cinema not found. \n";
    } else {
        $output = $cinema->showMovieListInfo();
    }
    return $output;
}

//Validacion cine para ver película más larga
function showLongestMovie(string $cinemaMovie): string
{
    $cinema = searchCinema($cinemaMovie);
    if (!isset($cinema)) {                     
        $output = "Cinema not found. \n";
    } else {
        $output = $cinema->longestMovie();
    }
    return $output;
}

//Búsqueda pelicula por nombre de director en todos los cines
function showDirectorMovies(string $directorName): string
{
    $output = "";
    foreach ($GLOBALS["cinemas"] as $cinema) {
        $output .=  $cinema->searchDirectorMovies($directorName) . "\n";
    }
    return $output;
}
?>
