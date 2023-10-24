<?php
// Loe andmefaili "tootajad.csv" ja lae andmed massiivi
$employees = file("tootajad.csv", FILE_IGNORE_NEW_LINES);

$male_salaries = [];
$female_salaries = [];

// Liigu iga töötaja andmete juurde ja eralda sugu ja palk
foreach ($employees as $employee) {
    list($name, $gender, $salary) = explode(";", $employee);

    // Lisa palk vastavasse sugu kategooriasse
    if ($gender === "m") {
        $male_salaries[] = (int)$salary;
    } elseif ($gender === "n") {
        $female_salaries[] = (int)$salary;
    }
}

// Arvuta meeste ja naiste palgade keskmised
$avg_male_salary = array_sum($male_salaries) / count($male_salaries);
$avg_female_salary = array_sum($female_salaries) / count($female_salaries);

// Leia suurimad palgad meeste ja naiste seas
$max_male_salary = max($male_salaries);
$max_female_salary = max($female_salaries);

// Kuva tulemused
echo "Meeste keskmine palk: $avg_male_salary\n";
echo "Naiste keskmine palk: $avg_female_salary\n";
echo "Suurim meeste palk: $max_male_salary\n";
echo "Suurim naiste palk: $max_female_salary\n";
?>
