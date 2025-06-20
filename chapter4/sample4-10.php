<?php
    echo "<br>(1)配列の初期値<br>";
    $ar = ["orange", "apple", "banana"];
    print_r($ar);
    echo "<br>(2)3つ目の値を[pinapple]に変更<br>";
    $ar[2];
    print_r($ar);
    echo "<br>(3)配列の末尾を削除<br>";
    array_pop($ar);
    print_r($ar);
    echo "<br>(4)配列の末尾に情報を追加<br>";
    array_push($ar, "cherry", "lemon");
    print_r($ar);
    echo "<br>(5)配列の先頭を削除<br>";
    array_shift($ar);
    print_r($ar);
    echo "<br>(6)配列の先頭に情報を追加<br>";
    array_unshift($ar, "peach");
    print_r($ar);
    echo "<br>(7)配列の情報を削除[2]<br>";
    unset($ar[2]);
    print_r($ar);
    echo "<br>配列の添字を振りなおす<br>";
    $ar = array_values($ar);
    print_r($ar);
?>