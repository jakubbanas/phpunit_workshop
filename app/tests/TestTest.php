<?php

use PHPUnit\Framework\TestCase;
use App\Model\{ Foo, Bar };

final class TestTest extends TestCase
{
    public function testBar(): void
    {
        $this->expectOutputString('test bar');
        print (new Bar())->test();
    }

    public function testFoo(): void
    {
        $this->expectOutputString('whatever');

        $bar = $this->createMock(Bar::class);
        $bar->method('test')
            ->willReturn("whatever");
            
        new Foo($bar);
    }
}