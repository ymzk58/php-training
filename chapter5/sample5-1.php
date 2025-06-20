<?php
    // 平均値を求めるサンプル関数avg
    function avg($n1, $n2){
        $n = ($n1 + $n2) / 2.0;
        return $n;
    }
    //  avg関数の利用
    $n1 = 16;
    $n2 = 10;
    $avg1 = avg($n1,$n2);
    $avg2 = avg(100,999);
    echo "{$n1}と{$n2}の平均値は:{$avg1}です<br>";
    echo "100と999の平均値は{$avg2}です";
?>