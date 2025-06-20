<?php
    require_once("car.php");
    $car1 = new Car();
    $car2 = new Car();

    $car1->number = "あ12-34";
    $car1->speed = 50;

    $car2->number ="い12-34";
    $car2->speed = 100;

    $car1->drive();
    $car1->stop();

    $car2->drive();
    $car2->stop();
?>