<!DOCTYPE html>
<html>
<head>
    <title>Informacje o dacie i czasie</title>
</head>
<body>
    <?php
    
    $currentTime = time();

    $dayOfWeek = date("l", $currentTime);
    echo "<p>Nazwa dnia tygodnia: $dayOfWeek</p>";
    $fullDate = date("Y-m-d", $currentTime);
    echo "<p>Pełna data: $fullDate</p>";
  
    $time12hFormat = date("h:i:s A", $currentTime);
    echo "<p>Czas w formacie dwunastogodzinnym: $time12hFormat</p>";

    $timeZoneOffset = date("O", $currentTime);
    echo "<p>Różnica w stosunku do czasu GMT: $timeZoneOffset</p>";
    ?>
</body>
</html>
