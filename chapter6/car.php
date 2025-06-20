<?php
    //自動車クラス
    class Car {
        public $speed;
        public $number;
        function __construct() {
            echo "インスタンス生成<br>";
        }
        //走行メソッド
        function drive() {
            echo "「{$this->number}」が{$this->speed}km/hで走行<br>";
        }
        //停車メソッド
        function stop() {
            echo "「{$this->number}」が停車<br>";
            $this->speed = 0;
        }
    }
?>