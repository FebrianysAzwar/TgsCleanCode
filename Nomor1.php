<?php

$text = 'Pegadaian';

$key = 3;


function encryption(string $text, int $key)
{
    $alphabetArray = range('A', 'Z');

    $index = 0;

    $result = '';

    while ($index < strlen($text)) {

        $char = strtoupper($text[$index]);

        $indexChar = array_search($char, $alphabetArray);

        $indexEncrypt = $indexChar + $key;

        if ($indexEncrypt > 26) {

            $indexEncrypt - 25;
        }

        $result .= $alphabetArray[$indexEncrypt];

        $index++;
    }
    return $result;
}
echo encryption($text,$key);
?>