<?php

// This file is just for debug.

require __DIR__ . '/vendor/autoload.php';

use Excercises\ArrayChunck;

$teste = new ArrayChunck();
print_r($teste->execute_2([1, 2, 3, 4, 5], 2));