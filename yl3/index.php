<!DOCTYPE html>
<html>
<head>
    <title>Ülesanne</title>
</head>
<body>
    <h2>Ülesanne</h2>
    <?php
        // Ülesanne 3
        // Rasmus Kasemaa
        // Kp: 24.10.2023

        // HTML vorm kasutajalt sisendite küsimiseks
        echo "<h3>Sisesta trapetsi andmed:</h3>";
        echo '<form method="post" action="">';
        echo 'Alumine alus: <input type="number" name="alus1" step="0.1" required><br>';
        echo 'Ülemine alus: <input type="number" name="alus2" step="0.1" required><br>';
        echo 'Kõrgus: <input type="number" name="korgus" step="0.1" required><br>';
        echo '<input type="submit" value="Arvuta">';
        echo '</form>';

        // PHP osa, mis arvutab ja väljastab trapetsi pindala
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $alus1 = $_POST["alus1"];
            $alus2 = $_POST["alus2"];
            $korgus = $_POST["korgus"];
            $trapetsi_pindala = 0.5 * ($alus1 + $alus2) * $korgus;
            $trapetsi_pindala_umardatud = round($trapetsi_pindala, 1);

            echo "<h2>Tulemused:</h2>";
            echo "<p>Trapetsi pindala on $trapetsi_pindala_umardatud ruutühikut.</p>";
        }

        // HTML vorm kasutajalt sisendite küsimiseks
        echo "<h3>Sisesta rombi andmed:</h3>";
        echo '<form method="post" action="">';
        echo 'Külg: <input type="number" name="kulgi_pikkus" step="0.1" required><br>';
        echo '<input type="submit" value="Arvuta">';
        echo '</form>';

        // PHP osa, mis arvutab ja väljastab rombi ümbermõõdu
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $kulgi_pikkus = $_POST["kulgi_pikkus"];
            $rombi_umbermoot = 4 * $kulgi_pikkus;
            $rombi_umbermoot_umardatud = round($rombi_umbermoot, 1);

            echo "<h2>Tulemused:</h2>";
            echo "<p>Rombi ümbermõõt on $rombi_umbermoot_umardatud ühikut.</p>";
        }
    ?>
</body>
</html>
