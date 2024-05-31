<?php
include 'db.php';

if (!isset($_GET['id'])) {
    echo "ID samochodu nie zostało podane.";
    exit();
}

$id = (int)$_GET['id'];
$sql = "SELECT * FROM cars WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $car = $result->fetch_assoc();
} else {
    echo "Samochód o podanym ID nie istnieje.";
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Szczegóły samochodu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Portal samochodowy</h1>
    </header>
    <nav>
        <table>
            <tr>
                <td><a href="index.php">Strona główna</a></td>
                <td><a href="cars.php">Wszystkie samochody</a></td>
                <td><a href="add_car.php">Dodaj samochód</a></td>
            </tr>
       
