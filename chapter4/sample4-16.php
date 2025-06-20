<?php
    $a = ["apple"=>"りんご", "banana"=>"バナナ", "orange"=>"オーレンジー色の果実すっぱくて泣いたー"];
    foreach($a as $value){
        echo $value. "<br>";
    }
    echo "<br>";
    $a = ["犬", "猫", "サル"];
    foreach($a as $key=>$value) {
        echo $key. ":". $value. "<br>";
    }
?>