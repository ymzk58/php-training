<?php
    class Person {
        private $name;

        function setName($name){
            $this->name = $name;
        }
        function getName(){
            return $this->name;
        }
    }

    $p = new Person();
    $p->setName("てきとーな男Junji Takada");
    echo $p->getName();
?>