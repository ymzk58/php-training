<?php
function isPrime($n) {
    if ($n < 2) return false; // 2未満は素数じゃない
    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i === 0) return false; // 割り切れたら素数じゃない
    }
    return true;
}

for ($num = 1; $num <= 100; $num++) {
    if (isPrime($num)) {
        echo $num . "<br>";
    }
}
?>