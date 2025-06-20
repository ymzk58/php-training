<?php
    function min_number($n1, $n2){
        if($n1 < $n2){
            return $n1;
        }
        return $n2;
    }
    $a = 10;
    $b = 20;

    echo "\$a = {$a}<br>";
    echo "\$a = {$b}<br>";
    echo "{$a}と{$b}のうち、最小のものは".min_number($a, $b)."です。"
?>