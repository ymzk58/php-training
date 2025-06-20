<?php
    // $a, $b, $cに値を代入
    $a = "PHP";
    $b = "PHP";
    $c = "Hello";
    // $a, $b, $cを表示
    echo "\$a=$a \$b=$b \$c=$c<br>";
    // $aと$bがともに『PHP』かどうか調べる
    if ($a == "PHP" and $b == "PHP"){
        echo '$a, $bともに"PHP"です。<br>';
    }
    // $aと$cがともに『PHP』かどうか調べる
    if ($a == "PHP" and $c == "PHP"){
        echo '$a, $cともに"PHP"です。<br>';
    }
    // $aと$bのいずれかが『PHP』かどうかを調べる
    if ($a == "PHP" or $b == "PHP"){
        echo '$a, $bのいずれかが"PHP"です。<br>';
    }
    // $aと$cのいずれかが『PHP』かどうかを調べる
    if ($a == "PHP" or $c == "PHP"){
        echo '$a, $cのいずれかが"PHP"です。<br>';
    }
?>