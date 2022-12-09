<?php

class challange
{
    function sockMerchant()
    {

        $ar = [10, 20, 20, 10, 10, 30, 50, 10, 20];
        // 10 => 4/2 = 2
        // 20 => 2/2 = 1
        //30 => 1/2 = 0.5
        //50 => 1/2 = 0.5
        // result = 2+1+0+0=3
        $result = 0;
        $counted = array_count_values($ar);
        foreach ($counted as $value) {
            $result += floor($value / 2);
        }
        return $result;
    }

    function countingValleys()
    {

        // valley level = 0;

        $path = "UDDDUDUU";
        $lvl = 0;
        $result = 0;
        $array = str_split($path, 1);
        foreach ($array as $value) {
            if ($value === 'U') {
                ++$lvl;
                if ($lvl === 0) {
                    ++$result;
                };
            };
            if ($value === 'D') {
                --$lvl;
            }
        };

        return $result;
    }


    function triangleOrNot()
    {

        $result = [];
        $a = [7, 10, 7];
        $b = [2, 3, 4];
        $c = [2, 7, 4];
        for ($i = 0; $i < 3; $i++) { // 0,1,2 indexes

            if ($a[$i] > $b[$i]) { // $a[0] > $b[0]
                $flag = $b[$i] + $c[$i] > $a[$i];
            } elseif ($b[$i] > $c[$i]) {
                $flag = $a[$i] + $c[$i] > $b[$i];

            } else {
                $flag = $a[$i] + $b[$i] > $c[$i];
            }
            if ($flag) {
                $flag = "Yes";
            } else {
                $flag = "NO";

            }
            array_push($result, $flag);
        }

        return $result;
    }


    function diagonalDifference($arr)
    {
        // Write your code here

        (int)$matrix_size = count($arr);

        $left_sum = 0;
        $right_sum = 0;

        // The primary diagonal
        for ($i = 0; $i <= $matrix_size - 1; $i++) {
            $left_sum += $arr[$i][$i];
        }

        //The secondary diagonal
        for ($i = 0, $j = $matrix_size - 1; $i <= $matrix_size - 1; $i++, $j--) {
            $right_sum += $arr[$i][$j];
        }

        return abs($left_sum - $right_sum);

    }

    function fizzBuzz()
    {
        // Write your code here
        $n = 4;
        $result = null;
        for ($i = 1; $i < $n; $i++) {
            $i % 3 === 0 ? $result = "fizz" : $result;
            $i % 5 === 0 ? $result = "Buzz" : $result;
            $i % 3 && $i % 5 !== 0 ? $result = $i : $result;


        }
        echo $result;
    }

    function primeNumber($n){
        $result = 1;
        for ($i = 2; $i < $n; $i++) {
            $n % $i == 0 ? $result = $n / $i : $result;

        }
        return $result;
    }

}
