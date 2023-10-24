<?php
$fail = fopen("andmefail.txt", "w");

$andmed = array(
    "Nimi" => "John Doe",
    "Email" => "johndoe@tthk.ee",
    "Vanus" => 30,
    "Hobi" => "Jalgrattasõit"
);

fwrite($fail, serialize($andmed));

fclose($fail);

echo "Andmed on salvestatud faili.";
?>
