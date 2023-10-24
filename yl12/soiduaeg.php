<?php
// Küsi kasutajalt stardi ja lõppaja
$start_time = readline("Sisesta sõidu algusaeg (hh:mm): ");
$end_time = readline("Sisesta sõidu lõppaeg (hh:mm): ");

// Kontrolli, kas sisestatud ajad on vähemalt viis sümbolit pikad
if (strlen($start_time) < 5 || strlen($end_time) < 5) {
    echo "Vigane sisend. Aeg peab olema vähemalt viie sümboli pikkune (hh:mm)!";
} else {
    // Eralda tunnid ja minutid
    list($start_hour, $start_minute) = explode(":", $start_time);
    list($end_hour, $end_minute) = explode(":", $end_time);

    // Arvuta sõiduaeg tundides ja minutites
    $hours = $end_hour - $start_hour;
    $minutes = $end_minute - $start_minute;

    // Kui minutid on negatiivsed, korrigeeri neid
    if ($minutes < 0) {
        $hours--;
        $minutes += 60;
    }

    // Kuva tulemus
    echo "Sõiduaeg: $hours tundi ja $minutes minutit.";
}
?>
