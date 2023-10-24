<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juubel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <form method="get" action="" class="mb-3">
            <div class="mb-3">
                <label for="birthYear" class="form-label">Sisesta sünniaasta:</label>
                <input type="number" class="form-control" id="birthYear" name="birthYear" required>
            </div>
            <button type="submit" class="btn btn-primary">Kontrolli</button>
        </form>

        <?php
        if (!empty($_GET['birthYear'])) {
            $birthYear = $_GET['birthYear'];

            if ((date("Y") - $birthYear) % 5 == 0) {
                echo "<div class='alert alert-success mt-3'>See on juubeliaasta!</div>";
            } else {
                echo "<div class='alert alert-info mt-3'>See ei ole juubeliaasta.</div>";
            }
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
