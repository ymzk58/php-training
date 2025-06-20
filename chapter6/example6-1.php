<?php
    class Person {
        private $name;
        private $age;
        private $sex;
        function __construct($name, $age, $sex) {
            $this->name = $name;
            $this->age = $age;
            $this->sex = $sex;
        }

        function show(){
            echo "{$this->name} 年齢:{$this->age} 性別:{$this->sex}<br>";
        }
    }

    $p1 = new Person("山田太郎",12,"男");
    $p2 = new Person("ままならない",21,"男");
    $p3 = new Person("ももかっぱ", "謎", "謎");

    $p1->show();
    $p2->show();
    $p3->show();
?>