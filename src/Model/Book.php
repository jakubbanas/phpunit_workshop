<?php

namespace App\Model;

class Book
{
    private $id;
    private $title;

    public function getId(): integer
    {
        return $this->id;
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