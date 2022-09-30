<?php

namespace Excercises;

class ArrayChunck {

    // Using the function array_chunk
    public function execute_1(array $arr, int $size): array
    {
        return array_chunk($arr, $size);
    }

    // Using array_slice
    //TODO: need fix
    public function execute_2(array $arr, int $size): array 
    {
        $chuncked = [];
        $index = 0;
        while ($index < count($arr)) {
            array_push($chuncked, array_slice($arr, $index, $index + $size));
            $index += $size;
        }
        return $chuncked;
    }

    // Using raw PHP
    //TODO: need finish
    public function execute_3(array $arr, int $size): array
    {

        /*
        - Cria um array vazio
        - percorre o array recebido
            - Verifica se o array temporario !existe ou se o tamanho dele == o tamanho recebido
        - 
        */
        
        $out = [];
        $temp = []; // [1, 2], [3, 4]];

        foreach ($arr as $row) {

            $last = end($out);

           // print_r($last); exit;

            if (!$last || count($temp) >= $size) {

                echo "opa ";
                array_push($temp, $row);
                print_r($temp);

            } else {

                echo "apa ";
                array_push($last, $temp);

            }

            // print_r(count($temp));
            
        }

        // print_r('coisa ' . $last); exit;

        return $out;

    }

}