<?php declare(strict_types=1);

namespace Monicaestebanponce\Tema7_3;
use Monicaestebanponce\Tema7_3\Genre;

class Book {
    protected string $title;
    protected string $author;
    protected int $isbn;
    protected Genre $genre;
    protected int $pageNum;
  
   
  
    public function __construct(string $title, string $author, int $isbn, Genre $genre, int $pageNum)
    {
        $this->title = $title;
        $this->author = $author;
        $this->isbn = $isbn;    
        $this->genre = $genre;
        $this->pageNum = $pageNum;

    }
    public function getTitle(): string
    {   
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getIsbn(): int
    {
        return $this->isbn;
    }
    public function getGenre(): string
    {
        return $this->genre->value;    
    }
    
    public function getPageNum(): int
    {   
        return $this->pageNum;  
    }




}