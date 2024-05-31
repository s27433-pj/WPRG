<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $marka = $_POST['marka'];
    $model = $_POST['model'];
    $cena = $_POST['cena'];
    $rok = $_POST['rok'];
    $opis = $_POST['opis'];

    $sql = "INSERT INTO cars (marka, model, cena, rok) VALUES ('$marka', '$model', '$cena', '$rok')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Nowy samochód został dodany pomyślnie.";
    } else {
        echo "Błąd: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dodaj samochód</title>
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
        </table>
    </nav>
    <main>
        <h2>Dodaj nowy samochód</h2>
        <form method="POST">
            <label>Marka:</label><input type="text" name="marka" required><br>
            <label>Model:</label><input type="text" name="model" required><br>
            <label>Cena:</label><input type="number" step="0.01" name="cena" required><br>
            <label>Rok:</label><input type="number" name="rok" required><br>
            <label>Opis:</label><textarea name="opis" required></textarea><br>
            <button type="submit">Dodaj</button>
        </form>
    </main>
</body>
</html>
