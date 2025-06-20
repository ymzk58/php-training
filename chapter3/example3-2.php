<?php
    $temp = 100;
    if($temp >= 100){
        echo "水の温度{$temp}度<br>";
        echo "水蒸気です";
    } else if($temp <= 0) {
        echo "水の温度{$temp}度<br>";
        echo "氷(固体)です";
    } else{
        echo "水の温度{$temp}度";
        echo "水(液体)です";
    }
?>