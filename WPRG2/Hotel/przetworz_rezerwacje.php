<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $persons = $_POST["persons"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $credit_card = $_POST["credit_card"];
    $date = $_POST["date"];
    $arrival_time = $_POST["arrival_time"];
    $extra_bed = isset($_POST["extra_bed"]) ? "Tak" : "Nie";
    $amenities = isset($_POST["amenities"]) ? implode(", ", $_POST["amenities"]) : "Brak";

    echo "<h2>Podsumowanie Rezerwacji:</h2>";
    echo "<p>Liczba osób: $persons</p>";
    echo "<p>Imię: $name</p>";
    echo "<p>Nazwisko: $surname</p>";
    echo "<p>Adres: $address</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Numer karty kredytowej: $credit_card</p>";
    echo "<p>Data pobytu: $date</p>";
    echo "<p>Godzina przyjazdu: $arrival_time</p>";
    echo "<p>Dostawienie łóżka dla dziecka: $extra_bed</p>";
    echo "<p>Dodatkowe udogodnienia: $amenities</p>";
}
?>
