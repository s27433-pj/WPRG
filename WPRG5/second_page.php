<?php
session_start();

if (!isset($_SESSION['people_count'])) {
    header('Location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $people_data = [];
    for ($i = 0; $i < $_SESSION['people_count']; $i++) {
        $person = [
            'name' => $_POST['name_' . $i],
            'age' => $_POST['age_' . $i]
        ];
        $people_data[] = $person;
    }
    $_SESSION['people_data'] = $people_data;
    header('Location: summary.php');
    exit();
}
?>

<!doctype html>
<html>
<head><title>Second Page</title></head>
<body>
    <form method="POST">
        <?php for ($i = 0; $i < $_SESSION['people_count']; $i++): ?>
            <h3>Person <?php echo $i + 1; ?></h3>
            <label>Name:</label><input type="text" name="name_<?php echo $i; ?>"><br>
            <label>Age:</label><input type="number" name="age_<?php echo $i; ?>"><br>
        <?php endfor; ?>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
