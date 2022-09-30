<?php

namespace Excercises;

class FizzBuzz {


    // Run fizbuzz from 0 to $n and return an array (or print in some cases)
    public function execute(int $n): array
    {

        $arr = [];

        for ($i=1;$i<=$n;$i++) {
            $val = '';
            if ($i % 3 === 0 && $i % 5 === 0) { $val = 'fizzbuzz'; }
            else if ($i % 3 === 0 ) { $val = 'fizz'; }
            else if ($i % 5 === 0) { $val = 'buzz'; }
            else { $val = $i; }
            array_push($arr, $val);
        }

        return $arr;

    }

}