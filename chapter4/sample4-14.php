<?php
    $animals = ["dog"=>"犬", "cat"=>"猫", "bird"=>"鳥"];
    print_r($animals);
    $animals["dog"] = "いぬ";
    echo "<br>";
    print_r($animals);
    $animals["hourse"] = "馬";
    echo "<br>";
    print_r($animals);
    unset($animals["cat"]);
    echo "<br>";
    print_r($animals);
?>