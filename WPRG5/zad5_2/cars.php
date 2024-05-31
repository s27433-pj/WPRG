<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wszystkie samochody</title>
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
        <h2>Wszystkie samochody</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Marka</th>
                <th>Model</th>
                <th>Cena</th>
                <th>Rok</th>
                <th>Akcja</th>
            </tr>
            <?php
            $sql = "SELECT id, marka, model, cena, rok FROM cars ORDER BY rok DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>".$row['id']."</td>
                            <td>".$row['marka']."</td>
                            <td>".$row['model']."</td>
                            <td>".$row['cena']."</td>
                            <td>".$row['rok']."</td>
                            <td><a href='car_details.php?id=".$row['id']."'>Szczegóły</a></td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Brak samochodów</td></tr>";
            }

            $conn->close();
            ?>
        </table>
    </main>
</body>
</html>
