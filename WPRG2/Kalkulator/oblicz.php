<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynik</title>
</head>
<body>
    <h2>Wynik</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];

        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                echo "<p>$num1 + $num2 = $result</p>";
                break;
            case "subtract":
                $result = $num1 - $num2;
                echo "<p>$num1 - $num2 = $result</p>";
                break;
            case "multiply":
                $result = $num1 * $num2;
                echo "<p>$num1 * $num2 = $result</p>";
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    echo "<p>$num1 / $num2 = $result</p>";
                } else {
                    echo "<p>Nie można dzielić przez zero!</p>";
                }
                break;
            default:
                echo "<p>Nieprawidłowa operacja</p>";
        }
    }
    ?>
</body>
</html>
