<?php
function fibonacci($n) {
    $fib = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}

$n = 10; 
$wynik = fibonacci($n);
echo "Nieparzyste elementy ciągu Fibonacciego do $n:\n";
foreach ($wynik as $key => $value) {
    if ($value % 2 !== 0) {
        echo "$key: $value\n";
    }
}
?>