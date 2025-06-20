<?php
    function add($n1, $n2){
        return $n1 + $n2;
    }
    function sub($n1, $n2){
        return $n1 - $n2;
    }

    $a = 2;
    $b = 3;
    echo "\$a=$a \$b=$b<br>";
    echo '$a + $b = '.add($a,$b)."<br>";
    echo '%a - $b = '.sub($a,$b);
?>