<?php
    //クラスの読み出し
    require_once("car.php");
    //インスタンス生成
    $car = new Car();
    //フィールドの定義
    $car->number = "あ12-34";
    $car->speed = 50;
    //メソッド
    $car->drive();
    $car->stop();
?>