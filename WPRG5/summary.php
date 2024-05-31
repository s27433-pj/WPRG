<?php
session_start();

if (!isset($_SESSION['people_data'])) {
    header('Location: index.php');
    exit();
}
?>

<!doctype html>
<html>
<head><title>Summary Page</title></head>
<body>
    <h1>Summary</h1>
    <p>Card Number: <?php echo $_SESSION['card_number']; ?></p>
    <p>Customer Name: <?php echo $_SESSION['customer_name']; ?></p>
    <p>Number of People: <?php echo $_SESSION['people_count']; ?></p>
    <h2>People Data:</h2>
    <ul>
        <?php foreach ($_SESSION['people_data'] as $person): ?>
            <li><?php echo $person['name']; ?> - <?php echo $person['age']; ?> years old</li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
