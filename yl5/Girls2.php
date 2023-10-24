<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tüdrukud II</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Tüdrukud II</h1>
        <?php
        // Tüdrukute massiiv
        $girls = array("Anna", "Emma", "Olivia", "Ava", "Mia", "Sophia", "Amelia", "Isabella");
        
        // Kuvame esimesed 3 nime
        echo "<div class='mb-3'>Esimene kolmik: " . implode(", ", array_slice($girls, 0, 3)) . "</div>";
        
        // Kuvame viimase nime
        echo "<div class='mb-3'>Viimane nimi: " . end($girls) . "</div>";
        
        // Kuvame suvalise nime
        $randomIndex = rand(0, count($girls) - 1);
        echo "<div>Suvaline nimi: " . $girls[$randomIndex] . "</div>";
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
