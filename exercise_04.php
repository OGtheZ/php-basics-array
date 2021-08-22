<?php

$array = [];
for ($i = 0; $i < 10; $i++)
{
   array_push($array, rand(1,100));
}

$anotherArray = $array;

array_pop($array);
array_push($array, -7);

echo "Array 1: " . implode(" ", $array) . PHP_EOL;
echo "Array 2: " . implode(" ", $anotherArray) . PHP_EOL;