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
                    new Book(),
                    new Book(),
                    new Book()
        ]);
        $bm = new BookManager($db);

        $books = $this->bm->getAll();
        $this->assertCount(3, $books);
    }

}
