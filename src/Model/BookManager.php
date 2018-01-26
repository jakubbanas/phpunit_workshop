<?php

namespace App\Model;

use App\Core\Database;
use App\Model\Book;

class BookManager
{

    /** @var Database */
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAll(): array
    {
        /** @TODO: add query here */
        return $this->db->execute("add query here");
    }

    public function getOneById(int $id): Book
    {
        $books = $this->db->execute("add query here");
        foreach ($books as $book) {
            if ($book->getId() === $id) {
                return $book;
            }
        }
    }

    public function save(Book $book): void
    {
        
    }

    public function delete(Book $book): void
    {
        
    }

}
