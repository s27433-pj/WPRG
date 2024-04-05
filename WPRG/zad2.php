<?php
function czyLiczbaPierwsza($liczba) {
    if ($liczba <= 1) return false;
    for ($i = 2; $i <= sqrt($liczba); $i++) {
        if ($liczba % $i === 0) {
            return false;
        }
    }
    return true;
}

$zakres = 20; // Zakres, z którego chcesz wypisać liczby pierwsze
echo "Liczby pierwsze z zakresu od 2 do $zakres:\n";
for ($i = 2; $i <= $zakres; $i++) {
    if (czyLiczbaPierwsza($i)) {
        echo "$i\n";
    }
}
?>