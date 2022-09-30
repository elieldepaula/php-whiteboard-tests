<?php

namespace Excercises;

class ReverseInt
{

    public function execute(int $num): int
    {

        $num = (string) $num;

        for ($i=strlen($num)-1, $j=0; $j<$i; $i--, $j++) {
            $temp = $num[$i];
            $num[$i] = $num[$j];
            $num[$j] = $temp;
        }

        return (int) $num;
    }

}