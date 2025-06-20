<?php
    $num = 0;
    $i = 0;
    $j = 0;
    echo "<h1>繰り返し処理</h1>";
    echo "<h2>while文による処理</h2>";
    while ($i < $num){
        echo "*";
        $i++;
    }

    echo "<h2>do while文による処理</h2>";
    do {
        echo "*";
        $j++;
    } while ($j < $num)
?>