<?php

function transposeEncryption($data, $key)
{
    $arrayOfChar = str_split($data);
    $twoDimensionArray = array_chunk($arrayOfChar, $key);
    $transposedArray = transpose($twoDimensionArray);
    return implode_all($transposedArray);
}

function transpose($array_one)
{
    $array_two = [];
    foreach ($array_one as $key => $item) {
        foreach ($item as $subkey => $subitem) {
            $array_two[$subkey][$key] = $subitem;
        }
    }
    return $array_two;
}

function implode_all($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        if (is_array($arr[$i]))
            $arr[$i] = implode_all($arr[$i]);
    }
    return implode("", $arr);
}

echo transposeEncryption("PEGADAIAN", 4);
