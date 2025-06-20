<?php
    $n = [5,3,2];
    $size = count($n);
    $sum = 0;
    //配列の値を表示しながら合計を計算
    for($i = 0; $i < $size; $i++){
        $sum += $n[$i];
        echo "\$n[{$i}]={$n[$i]}<br>";
    }
    $avg = $sum / $size;
    echo "合計:{$sum} 平均:{$avg}";
?>