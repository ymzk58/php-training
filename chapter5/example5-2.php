<?php
    //変数の用意
    $var = ["abc", "123", "999f", "100"];
    //検証
    foreach($var as $v){
        if(preg_match("/^([1-9][0-9]*|0)$/", $v) == 1){
            echo "{$v}は0以上の整数です。<br>";
        } else{
            echo "{$v}は0以上の整数ではありません。<br>";
        }
    }
?>