<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['card_number'] = $_POST['card_number'];
    $_SESSION['customer_name'] = $_POST['customer_name'];
    $_SESSION['people_count'] = (int)$_POST['people_count'];
    header('Location: second_page.php');
    exit();
}
?>

<!doctype html>
<html>
<head><title>First Page</title></head>
<body>
    <form method="POST">
        <label>Card Number:</label><input type="text" name="card_number"><br>
        <label>Customer Name:</label><input type="text" name="customer_name"><br>
        <label>Number of People:</label><input type="number" name="people_count"><br>
        <button type="submit">Next</button>
    </form>

    <?php


$visits = 0;
$visit_threshold = 10; 

if (isset($_COOKIE['visits'])) {
    $visits = (int)$_COOKIE['visits'];
}

$current_time = time();

if (!isset($_SESSION['last_visit']) || ($current_time - $_SESSION['last_visit']) > $visit_threshold) {
    $visits++;
    setcookie('visits', $visits, time() + 3600); 
    $_SESSION['last_visit'] = $current_time;
}

if ($visits >= 5) {
    echo "Odwiedziłeś tę stronę $visits razy.";
} else {
    echo "To jest Twoja $visits wizyta na tej stronie.";
}
?>


</body>
</html>
