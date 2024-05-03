<?php

if (isset($_GET['birthdate'])) {

    $birthdate = strtotime($_GET['birthdate']);

    $dayOfWeek = date("l", $birthdate);
    echo "Użytkownik urodził się w dniu tygodnia: $dayOfWeek. <br>";

    $yearsOld = date("Y") - date("Y", $birthdate);

    if (date("md") < date("md", $birthdate)) {

        $yearsOld--;
        
    }
    echo "Użytkownik ma $yearsOld lat. <br>";

 
    $nextBirthday = strtotime(date("Y-m-d", $birthdate) . " +$yearsOld years");
    if ($nextBirthday < time()) {

        $nextBirthday = strtotime(date("Y-m-d", $birthdate) . " +".($yearsOld + 1)." years");

    }
    $daysToNextBirthday = ceil(($nextBirthday - time()) / (60 * 60 * 24));
    echo "Do najbliższych urodzin użytkownika pozostało $daysToNextBirthday dni.";
}
?>
