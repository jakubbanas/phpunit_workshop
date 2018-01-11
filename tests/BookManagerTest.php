<?php

use PHPUnit\Framework\TestCase;
use App\Model\{
    BookManager,
    Book
};
use App\Core\Database;

final class BookManagerTest extends TestCase
{

    public function testGetAllBooks()
    {
        $db = $this->createMock(Database::class);
        $db->method("execute")
                ->willReturn([
                    (new Book())->setId(1),
                    new Book(),
                    new Book()
        ]);
        $bm = new BookManager($db);

        $books = $bm->getAll();
        $this->assertCount(3, $books);
    }
    
    public function testGetOneBookById()
    {
        $db = $this->createMock(Database::class);
        $db->method("execute")
                ->willReturn([
                    (new Book())->setId(1),
                    (new Book())->setId(2),
                    (new Book())->setId(3)
        ]);
        $bm = new BookManager($db);

        $book = $bm->getOneById(2);
        $this->assertInstanceOf(Book::class, $book);
        $this->assertEquals(2, $book->getId());
    }

}
