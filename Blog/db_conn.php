<?php

$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "blog_db";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed : " . $e->getMessage();
}

// Function to get post by ID using PDO
function getById($conn, $id) {
    $stmt = $conn->prepare("SELECT * FROM post WHERE post_id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
