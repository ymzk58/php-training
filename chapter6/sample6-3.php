<?php
    class Car{
        private $speed;
        private $number;

        function __construct($number) {
            $this->number = $number;
            echo "「{$this->number}」のインスタンス生成<br>";
        }
                //走行メソッド
        function drive($speed) {
            $this->speed = $speed;
            echo "「{$this->number}」が{$this->speed}km/hで走行<br>";
        }
        //停車メソッド
        function stop() {
            echo "「{$this->number}」が停車<br>";
            $this->speed = 0;
        }
    }

    $car1 = new Car("あ12-34");
    $car2 = new Car("い12-34");

    $car1->drive(50);
    $car1->stop();

    $car2->drive(100);
    $car2->stop();
?>