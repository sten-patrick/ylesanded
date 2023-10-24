<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vanus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <form method="get" action="" class="mb-3">
            <div class="mb-3">
                <label for="age1" class="form-label">Esimene vanus:</label>
                <input type="number" class="form-control" id="age1" name="age1" required>
            </div>
            <div class="mb-3">
                <label for="age2" class="form-label">Teine vanus:</label>
                <input type="number" class="form-control" id="age2" name="age2" required>
            </div>
            <button type="submit" class="btn btn-primary">Võrdle vanuseid</button>
        </form>

        <?php
        if (!empty($_GET['age1']) && !empty($_GET['age2'])) {
            $age1 = $_GET['age1'];
            $age2 = $_GET['age2'];

            if ($age1 == $age2) {
                echo "<div class='alert alert-info mt-3'>Mõlemad isikud on ühevanused!</div>";
            } elseif ($age1 > $age2) {
                echo "<div class='alert alert-success mt-3'>Esimene isik on vanem!</div>";
            } else {
                echo "<div class='alert alert-success mt-3'>Teine isik on vanem!</div>";
            }
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
