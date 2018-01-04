<?php

$container = require __DIR__ . '/../app/bootstrap.php';

dump($container->get("\App\Model\Book"));