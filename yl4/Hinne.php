<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hinne</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <form method="get" action="" class="mb-3">
            <div class="mb-3">
                <label for="points" class="form-label">Sisesta punktide arv:</label>
                <input type="number" class="form-control" id="points" name="points" required>
            </div>
            <button type="submit" class="btn btn-primary">Kontrolli</button>
        </form>

        <?php
        if (!empty($_GET['points'])) {
            $points = $_GET['points'];

            if ($points > 10) {
                echo "<div class='alert alert-success mt-3'>SUPER!</div>";
            } elseif ($points >= 5 && $points <= 9) {
                echo "<div class='alert alert-success mt-3'>TEHTUD!</div>";
            } elseif ($points < 5) {
                echo "<div class='alert alert-danger mt-3'>KASIN!</div>";
            }
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
