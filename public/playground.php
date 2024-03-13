<?php
use Illuminate\Support\Collection;

require __DIR__.'/../vendor/autoload.php';

$numbers = new Collection([
    'one', 'two', 'three', 'four', 'five'
]);

die(var_dump($numbers));