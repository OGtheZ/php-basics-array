<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

$valueToCheck = (int) readline("Enter the value to search for: ");

if(in_array($valueToCheck, $numbers))
{
    echo "It's there" . PHP_EOL;
}else
{
    echo "It's not there" . PHP_EOL;
}