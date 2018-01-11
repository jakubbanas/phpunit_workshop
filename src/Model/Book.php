<?php

namespace App\Model;

class Book
{
    private $id;
    private $title;

    public function getId(): int
    {
        return $this->id;
    }
    
    public function setId(int $id): Book
    {
        $this->id = $id;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }
}