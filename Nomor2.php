<?php

$text = 'Pegadaian';
$letterMap = array('C', 'F', 'H', 'K', 'M', 'P', 'R', 'N', 'S', 'O', 'Q', '4', '1', '0', 'U', '3', 'B', 'Z', 'Y', 'L', 'X', '7', '8', '2', '5', '6');
function encryption(string $text, array $letterMap)
{
    $alphabetArray = range('A', 'Z');
    $index = 0;
    $result = '';

    while ($index < strlen($text)) {
        $char = strtoupper($text[$index]);
        $indexChar = array_search($char, $alphabetArray);
        $result .= $letterMap[$indexChar];
        $index++;
    }
    return $result;
}

echo encryption($text, $letterMap);
