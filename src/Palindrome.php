<?php

namespace Excercises;

class Palindrome {


    public function execute(string $str): bool
    {

        $temp2 = $str;
        for ($i = strlen($str)-1, $j=0; $j<$i; $i--, $j++ ) 
        {
            $temp = $str[$i];
            $str[$i] = $str[$j];
            $str[$j] = $temp;
        }

        if ($temp2 == $str) {
            return true;
        }
        
        return false;

    }

}