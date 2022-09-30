<?php

namespace Excercises;

class ReverseString {

    // usando strrev() do PHP
    public function _execute(string $str): string
    {
        return strrev($str);
    }

    // Usando um laço for()
    public function execute(string $str): string 
    {
        for ($i = strlen($str)-1, $j=0; $j<$i; $i--, $j++) {
            $temp = $str[$i];
            $str[$i] = $str[$j];
            $str[$j] = $temp;
        }
        return $str;
    }

}