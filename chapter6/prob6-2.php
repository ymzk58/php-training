<?php
    class Country{
        private $name;
        private $capital;

        function getName(){
            return $this->name;
        }
        function getCapital(){
            return $this->capital;
        }
        function setName($name){
            $this->name = $name;
        }
        function setCapital($capital){
            $this->capital = $capital;
        }
    }

    $c = new Country();
    $c->setName("Japan");
    $c->setCapital("Tokyo");
    $name = $c->getName();
    $capital = $c->getCapital();

    echo "{$name}の首都は{$capital}です";
?>