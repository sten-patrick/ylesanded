<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isikukood</title>
</head>

<body>
    <?php
    function kontrolliIsikukoodi($isikukood) {
        if (strlen($isikukood) === 11) {
            $sugu = $isikukood[0] % 2 === 0 ? "Naine" : "Mees";
            $sunniaeg = substr($isikukood, 5, 2) . "." . substr($isikukood, 3, 2) . "."
                . substr($isikukood, 1, 2);
            echo "Sugu: $sugu <br>";
            echo "Sünniaeg: $sunniaeg";
        } else {
            echo "Vigane isikukood!";
        }
    }

    $isikukood = "39904250315";
    kontrolliIsikukoodi($isikukood);
    ?>
</body>

</html>
