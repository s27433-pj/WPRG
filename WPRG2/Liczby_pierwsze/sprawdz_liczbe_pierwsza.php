<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];

    function isPrime($num) {
        if ($num <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    if (is_numeric($number) && $number > 0) {
        if (isPrime($number)) {
            echo "$number jest liczbą pierwszą.";
        } else {
            echo "$number nie jest liczbą pierwszą.";
        }
    } else {
        echo "Wprowadź poprawną liczbę całkowitą dodatnią.";
    }
}
?>
