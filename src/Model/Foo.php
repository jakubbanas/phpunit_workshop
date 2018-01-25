<?php

namespace App\Model;

use App\Model\Bar;

class Foo
{
    public function __construct(Bar $bar)
    {
        print $bar->test();
    }
}