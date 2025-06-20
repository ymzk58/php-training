<?php
    //  $aの初期値の代入(自由に値を変更してください)
    $a = 1;
    echo '$aの値による処理の分岐(switch文の場合)<br>';
    //  switchｎよる複数条件
    switch($a){
        case 1:
            echo '$aの値は1です。';
            break;
        case 2:
            echo '$aの値は2です。';
            break;
        case 3:
            echo '$aの値は3です。';
            break;
        default:
            echo '$aの値は1,2,3以外の値です。';
    }
?>