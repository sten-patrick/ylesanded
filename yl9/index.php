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
    echo "<h2>1. Tervitus nimepidi</h2>";
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["nimi"])) {
        $nimi = ucfirst(strtolower($_POST["nimi"]));
        echo "Tere, $nimi!";
    } else {
        echo "<form method='post' action='#'>
                Nimi: <input type='text' name='nimi' required>
                <input type='submit' value='Tervita'>
              </form>";
    }

    echo "<h2>2. Teksti iga tähe järgi punkti lisamine</h2>";
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["tekst"])) {
        $tekst = $_POST["tekst"];
        $punktid = implode(". ", str_split($tekst));
        echo "$punktid.";
    } else {
        echo "<form method='post' action='#'>
                Tekst: <input type='text' name='tekst' required>
                <input type='submit' value='Lisa punktid'>
              </form>";
    }

    echo "<h2>3. Ropud sõnad asendatakse tärnidega</h2>";
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["sonum"])) {
        $sonum = $_POST["sonum"];
        $roopud_sonad = array("Pede", "Homo", "Taun");
        $puhastatud_sonum = str_ireplace($roopud_sonad, "*", $sonum);
        echo "Puhastatud sõnum: $puhastatud_sonum";
    } else {
        echo "<form method='post' action='#'>
                Sõnum: <input type='text' name='sonum' required>
                <input type='submit' value='Asenda ropud sõnad'>
              </form>";
    }

    echo "<h2>4. Kasutaja emaili loomine eesnime ja perenime põhjal</h2>";
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["eesnimi"]) && !empty($_POST["perenimi"])) {
        $eesnimi = strtolower(str_replace(array('ä', 'ö', 'ü', 'õ'), array('a', 'o', 'u', 'o'), $_POST["eesnimi"]));
        $perenimi = strtolower(str_replace(array('ä', 'ö', 'ü', 'õ'), array('a', 'o', 'u', 'o'), $_POST["perenimi"]));
        $email = $eesnimi . "." . $perenimi . "@tthk.ee";
        echo "Email: $email";
    } else {
        echo "<form method='post' action='#'>
                Eesnimi: <input type='text' name='eesnimi' required><br>
                Perenimi: <input type='text' name='perenimi' required><br>
                <input type='submit' value='Genereeri email'>
              </form>";
    }
    ?>

</body>

</html>
