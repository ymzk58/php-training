<?php
    //最大値を取得する関数
    function max_number ($n1, $n2){
        if($n1 > $n2){
            return $n1;
        }
        return $n2;
    }
    //指定した数だけ★マークを表示する関数
    function stars ($n){
        for($i = 0; $i <$n; $i++){
            echo "★";
        }
        echo "<br>";
        return;
    }
    //HelloPHPと表示する関数
    function hello (){
        echo "HelloPHP";
    }
    //max_numberの呼び出し
    $num1 = 100;
    $num2 = -100;
    echo "{$num1}と{$num2}大きいのは".max_number($num1, $num2). "です<br>";
    //starsの呼び出し
    stars(10);
    //helloの呼び出し
    hello();
?>