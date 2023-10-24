<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ülesanded</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

    <div class="mb-5">
        <h2>Genereeri arvud 1-100 ja lisab punktid</h2>
        <?php
        for ($i = 1; $i <= 100; $i++) {
            echo "$i. ";
            if ($i % 10 == 0) {
                echo "<br>";
            }
        }
        ?>
    </div>

    <div class="mb-5">
        <h2>Rida - vertikaalsest reast horisontaalne rida</h2>
        <?php
        for ($i = 0; $i < 10; $i++) {
            echo "* ";
        }
        ?>
    </div>

    <div class="mb-5">
        <h2>Rida II - horisontaalsest reast vertikaalne rida</h2>
        <?php
        for ($i = 0; $i < 10; $i++) {
            echo "*<br>";
        }
        ?>
    </div>

    <div class="mb-5">
        <h2>Ruut - tärnidest ruut, kasutaja suurusega</h2>
        <form action="" method="post">
            <label for="size">Sisesta ruudu suurus:</label>
            <input type="number" id="size" name="size" required>
            <button type="submit">Kuva ruut</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $size = $_POST["size"];
            for ($i = 0; $i < $size; $i++) {
                for ($j = 0; $j < $size; $j++) {
                    echo "* ";
                }
                echo "<br>";
            }
        }
        ?>
    </div>

    <div class="mb-5">
        <h2>Kahanevad paarisarvud 10-0</h2>
        <?php
        for ($i = 10; $i >= 0; $i -= 2) {
            echo "$i ";
        }
        ?>
    </div>

    <div class="mb-5">
        <h2>Kolmega jagunevad arvud 1-100</h2>
        <?php
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0) {
                echo "$i ";
            }
        }
        ?>
    </div>

    <div class="mb-5">
        <h2>Massiivid ja tsüklid</h2>
        <?php
        $girls = array("Anna", "Emma", "Olivia", "Ava", "Mia");
        $boys = array("Liam", "Noah", "Oliver", "Elijah", "William");

        for ($i = 0; $i < count($girls); $i++) {
            echo $girls[$i] . " ja " . $boys[$i] . "<br>";
        }

        $girlsCopy = $girls;
        $boysCopy = $boys;

        shuffle($girlsCopy);
        shuffle($boysCopy);

        for ($i = 0; $i < count($girlsCopy); $i++) {
            echo $girlsCopy[$i] . " ja " . $boysCopy[$i] . "<br>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
