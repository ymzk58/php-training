<?php
    $a = 0;
    echo "\$a={$a}<br>";
    if($a > 0) {
        echo "\$aは正の数です";
    } else if($a < 0) {
        echo "\$aは負の数です";
    } else{
        echo "\$aは0または、数字ではありません";
    }
?>