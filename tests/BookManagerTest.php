<?php

use PHPUnit\Framework\TestCase;
use App\Model\{ BookManager, Book };
use App\Core\Database;

final class BookManagerTest extends TestCase
{
    /** @var BookManager */
    private $bm;

    public function testGetAllBooks()
    {
        $db = $this->createMock(Database::class);
        $this->bm = new BookManager($db);

        $books = $this->bm->getAll();
        $this->assertCount(5, $books);
    }
}