<?php

$container = require __DIR__ . '/../app/bootstrap.php';

class Foo
{
    public function __construct(Bar $bar)
    {
        $bar->test();
    }
}

class Bar
{
    public function test()
    {
        print "test bar";
    }
}

$container->get("Foo");