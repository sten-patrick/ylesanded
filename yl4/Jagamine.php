<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jagamine</title>
    <!-- Boostrap 5.3.2 CSS-faili lingi lisamine -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <form method="get" action="" class="mb-3">
            <div class="mb-3">
                <label for="number1" class="form-label">Esimene number:</label>
                <input type="number" class="form-control" id="number1" name="number1" required>
            </div>
            <div class="mb-3">
                <label for="number2" class="form-label">Teine number:</label>
                <input type="number" class="form-control" id="number2" name="number2" required>
            </div>
            <button type="submit" class="btn btn-primary">Jaga</button>
        </form>

        <?php
        if (!empty($_GET['number1']) && !empty($_GET['number2'])) {
            $number1 = $_GET['number1'];
            $number2 = $_GET['number2'];

            if ($number2 != 0) {
                $result = $number1 / $number2;
                echo "<div class='alert alert-success mt-3'>Tulemus: $result</div>";
            } else {
                echo "<div class='alert alert-danger mt-3'>Nulliga jagamine ei ole lubatud!</div>";
            }
        }
        ?>
    </div>
    <!-- Bootstrap 5.3.2 JS-faili ja Popper.js-faili lingid (vajalik Bootstrap komponentide jaoks) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
