<?php declare(strict_types=1);

namespace Monicaestebanponce\tests;
use PHPUnit\Framework\TestCase;
use Monicaestebanponce\Tema7_3\Library;
use Monicaestebanponce\Tema7_3\Book;
use Monicaestebanponce\Tema7_3\Genre;

class LibraryTest extends TestCase{

    public function testAddBook()
    {
        $book = new Book("Harry Potter", "JK Rowling", 8478884459, Genre::Science, 200);
        $library = new Library($book);   
        $book1 = new Book("Manolito Gafotas", "Elvira Lindo", 9788432214233, Genre::Adventures, 344);
        $library->addBook($book1);

        $this->assertTrue($library->bookExists($book1));
            
    }

    public function testRemoveBook()
    {
        $book = new Book("Vardo", "Kiran Millwood", 9788417743611, Genre::Adventures, 344);
        $library = new Library($book);   

        $this->assertTrue($library->bookExists($book));
        $library->removeBook($book);
        $this->assertFalse($library->bookExists($book));
    }

    public function testModifyBook()
    {
        $book = new Book("Manolito Gafotas", "Elvira Lindo", 9788432214233, Genre::Adventures, 344);
        $library = new Library($book);   
        $this->assertTrue($library->bookExists($book));

        $modifiedBook = new Book ("Manolito Gafotas", "E. Lindo", 9788432214233, Genre::Adventures, 344);
        $library->modifyBook($book, $modifiedBook);
        $this->assertTrue($library->bookExists($modifiedBook));

        $this->assertNotSame($book, $modifiedBook);

    }

    public function testGetBookTitle()
    {
        $book = new Book("Manolito Gafotas", "Elvira Lindo", 9788432214233, Genre::Adventures, 344);
        $library = new Library($book);   

        $this->assertEquals($library->getBookTitle($book),"Manolito Gafotas");
    }

    public function testGetBookGenre()
    {
        $book = new Book("Manolito Gafotas", "Elvira Lindo", 9788432214233, Genre::Adventures, 344);
        $library = new Library($book);   

        $this->assertEquals($library->getBookGenre($book),"adventures");
    }

    public function tesGetBookISBN()
    {
        $book = new Book("Manolito Gafotas", "Elvira Lindo", 9788432214233, Genre::Adventures, 344);
        $library = new Library($book);   

        $this->assertEquals($library->getBookISBN($book),9788432214233);
    }

    public function testGetBookAuthor()
    {
        $book = new Book("Manolito Gafotas", "Elvira Lindo", 9788432214233, Genre::Adventures, 344);
        $library = new Library($book);   

        $this->assertEquals($library->getBookAuthor($book),"Elvira Lindo");
    }

    public function testLargeBooksList()
    {
        $book1 = new Book("El Jilguero", "Donna Tartt", 9788466338837, Genre::Crime, 1152);
        $book2 = new Book("El Fin de los Dias", "Adam Neville", 9788465300230, Genre::Paranormal, 785);
        $book3 = new Book("1984", "George Orwell", 9788499890944, Genre::Dystopia, 239);
        $library = new Library($book1);   
        $library ->addBook($book2);
        $library ->addBook($book3);
       
        $largeBooksList = $library->largeBooksList();
     
        $this->assertEquals(2,count($largeBooksList));
        
    }
}
?>