<?php

/**
 * Task 1
 * Callback function to print the strings with char length more than 10 symbols
 */
class Odd
{
    public function __invoke($str)
    {
        return strlen($str) > 10;
    }
}

$strArr = ["One", "One thousand", "Three", "Two thousand"];

$arrCallback = array_filter(
    $strArr,
    new Odd()
);

echo "<pre>";
print_r($arrCallback);
echo "</pre>";


/**
 * Task 2
 * Pass the keys not the values to the callback function
 */

$arr = [
    'first' => 'John',
    'last' => 'Doe',
    'password' => 'secret',
    'email' => 'john.doe@example.com'
];

$filtered = array_filter(
    $arr,
    function ($key) {
        return $key !== 'password';
    },
    ARRAY_FILTER_USE_KEY
);


echo "<pre>";
print_r($filtered);
echo "</pre>";