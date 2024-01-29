<?php declare(strict_types=1);
namespace Monicaestebanponce\Tema7_3;

use Monicaestebanponce\Tema7_3\Book;


class Library {

    protected array $books = [];

    public function __construct(Book $book)
    {
    $this->books[]=$book;    
    }

    public function getBooks(): array
    {
        return $this->books;
    }

    public function addBook(Book $book): void
    {
        $this->books[]=$book;
    }
    public function removeBook(Book $book): void
    {
        $searchedBookIndex = array_search($book, $this->books);
        unset($this->books[$searchedBookIndex]);
    }
    public function modifyBook(Book $book1, Book $bookModified) : void  
    {
        
        $i = 0;

        while($i < count($this->books))
        {
            $book = $this->books[$i];
            if($book->getIsbn() === $book1->getIsbn()){
              $book1 = $bookModified;
            }
            $i++;
        }
    }
  
    public function bookExists(Book $bookSearched) : bool
    {
        $output = false;
        $i = 0;

        while($i < count($this->books))
        {
            $book = $this->books[$i];
            if($book->getIsbn() === $bookSearched->getIsbn()){
                $output =  true;
            }
            $i++;
        }

        return $output;
    }
    public function getBookTitle(Book $bookSearched): string
    {
        $i = 0;
        $output = "Book not found";

        while($i < count($this->books))
        {
            $book = $this->books[$i];
            if($book->getIsbn() === $bookSearched->getIsbn()){
                $output =  $book->getTitle();
            }
            $i++;
        }
        return $output;
    }
    public function getBookAuthor(Book $bookSearched): string
    {
        $i = 0;
        $output = "Book not found";
        while($i < count($this->books))
        {
            $book = $this->books[$i];
            if($book->getIsbn() === $bookSearched->getIsbn()){
                $output =  $book->getAuthor();
            }
            $i++;
        }
        return $output;
    }

    public function getBookISBN(Book $bookSearched) : string
    {
        $i = 0;
        $output = "Book not found";
        while($i < count($this->books))
        {
            $book = $this->books[$i];
            if($book->getIsbn() === $bookSearched->getIsbn()){
                $output =  $book->getIsbn();
            }
            $i++;
        }
        return $output;
    }

    public function getBookGenre(Book $bookSearched) : string
    {
        $i = 0;
        $output = "Book not found";
        while($i < count($this->books))
        {
            $book = $this->books[$i];
            if($book->getIsbn() === $bookSearched->getIsbn()){
                $output = $book->getGenre();
            }
            $i++;
        }
        return $output;
    }

    public function largeBooksList() : array
    {
        $largebooks = [];

        foreach($this->books as $book)
        {
            if($book->getPageNum() > 500)
            {
                $largebooks[] = $book;
            }
        }
        return $largebooks;
    }
}