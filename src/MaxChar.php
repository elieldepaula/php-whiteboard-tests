<?php

namespace Excercises;

class MaxChar {

    public function execute(string $str): string
    {
        
        $arr = [];
        $max = 0;
        $maxVal = '';

        // Create an array with the words.
        for ($i=0; $i < strlen($str); $i++) {
            (!isset($arr[$str[$i]])) ? $arr[$str[$i]] = 1 : $arr[$str[$i]]++;
        }

        // Walk into the array and discover the most used char in the string.
        foreach ($arr as $key => $val) {
            if ($val >= $max) {
                $max = $val;
                $maxVal = $key;
            }
        }

        return $maxVal;

    }

}