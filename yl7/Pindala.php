<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ristküliku pindala</title>
</head>

<body>
    <?php
    function arvutaRistkulikuPindala($pikkus, $laius) {
        $pindala = $pikkus * $laius;
        echo "Ristküliku pindala on: $pindala";
    }

    arvutaRistkulikuPindala(5, 10);
    ?>
</body>

</html>
