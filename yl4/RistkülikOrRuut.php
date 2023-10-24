<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ristkülik või ruut</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <form method="get" action="" class="mb-3">
            <div class="mb-3">
                <label for="side1" class="form-label">Esimene külg:</label>
                <input type="number" class="form-control" id="side1" name="side1" required>
            </div>
            <div class="mb-3">
                <label for="side2" class="form-label">Teine külg:</label>
                <input type="number" class="form-control" id="side2" name="side2" required>
            </div>
            <button type="submit" class="btn btn-primary">Kontrolli</button>
        </form>

        <?php
        if (!empty($_GET['side1']) && !empty($_GET['side2'])) {
            $side1 = $_GET['side1'];
            $side2 = $_GET['side2'];

            if ($side1 == $side2) {
                echo "<div class='alert alert-success mt-3'>See on ruut!</div>";
            } else {
                echo "<div class='alert alert-success mt-3'>See on ristkülik!</div>";
            }
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
