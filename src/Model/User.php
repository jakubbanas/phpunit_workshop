<?php

namespace App\Model;

class User
{
    private $id;
    private $name;
    
    public function getId(): integer
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $Name;
    }
}