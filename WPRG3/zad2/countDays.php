<?php
$currentYear = date("Y");

$startDate = strtotime("January 1, $currentYear");
$endDate = strtotime("December 31, $currentYear");


$daysRemaining = ceil(($endDate - time()) / (60 * 60 * 24));
echo "Liczba dni pozostałych do końca roku: $daysRemaining dni.";
?>
