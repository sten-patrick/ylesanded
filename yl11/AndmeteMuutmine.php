<?php
$fail = fopen("andmefail.txt", "r+");

$esimene_rida = fgets($fail);

$uus_rida = "\nTelefon: 555-1234\nAadress: 123 Main Street";

fwrite($fail, $esimene_rida . $uus_rida);

fclose($fail);

echo "Andmed on muudetud ja salvestatud faili.";
?>
