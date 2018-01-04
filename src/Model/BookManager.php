<?php

namespace App\Model;

use App\Core\Database;

class BookManager
{
    /** @var Database */
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAll(){}
    public function getAllById(){}
}