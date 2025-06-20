<?php
    $m = 6;
    if ($m >= 1 and $m <= 12) {
        if ($m === 2) {
            $d = "28もしくは29";
        } else if($m === 4 or $m === 6 or $m === 9 or $m === 11) {
            $d = "30";
        } else {
            $d = "31";
        }
        echo "{$m}月の日数:{$d}日";
    } else {
        echo "{$m}月は存在しません";
    }
?>