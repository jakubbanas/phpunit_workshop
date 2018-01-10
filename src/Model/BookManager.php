<?php

namespace App\Model;

use App\Core\Database;
use Model\Book;

class BookManager
{

    /** @var Database */
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAll(): Array
    {
        /** @TODO: add query here */
        return $this->db->execute("add query here");
    }

    public function getAllById(int $id): Book
    {
        
    }

    public function save(Book $book): void
    {
        
    }

    public function delete(Book $book): void
    {
        
    }

}
