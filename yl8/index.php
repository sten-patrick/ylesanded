<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ülesanded</title>
</head>

<body>
    <h1>Ülesanded</h1>

    <?php
    echo "<h2>1. Kuupäev ja kellaaeg</h2>";
    echo date("d.m.Y H:i");

    echo "<h2>2. Kasutaja vanus</h2>";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $synniaasta = $_POST["synniaasta"];
        $vanus = date("Y") - $synniaasta;
        echo "Sul on või saad sel aastal $vanus aastat vanaks.";
    } else {
        echo "<form method='post' action='#'>
                Sünniaasta: <input type='number' name='synniaasta' required>
                <input type='submit' value='Kuva vanus'>
              </form>";
    }

    echo "<h2>3. Käesoleva kooliaasta lõpuni jäänud päevad</h2>";
    $kooliaasta_lopp = strtotime("31 May " . date("Y"));
    $paevade_arv = ceil(($kooliaasta_lopp - time()) / (60 * 60 * 24));
    echo "Käesoleva kooliaasta lõpuni on jäänud $paevade_arv päeva!";

    echo "<h2>4. Vastavalt aastaajale pilt</h2>";
    $kuu = date("n");
    if ($kuu >= 3 && $kuu <= 5) {
        echo "<img src='kevad.jpg' alt='Kevad'>";
    } elseif ($kuu >= 6 && $kuu <= 8) {
        echo "<img src='suvi.jpg' alt='Suvi'>";
    } elseif ($kuu >= 9 && $kuu <= 11) {
        echo "<img src='sugis.jpg' alt='Sügis'>";
    } else {
        echo "<img src='talv.jpg' alt='Talv'>";
    }
    ?>

</body>

</html>
