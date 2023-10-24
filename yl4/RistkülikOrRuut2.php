<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ristkülik või ruut II</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <form method="get" action="" class="mb-3">
            <div class="mb-3">
                <label for="length" class="form-label">Sisesta arv:</label>
                <input type="number" class="form-control" id="length" name="length" required>
            </div>
            <div class="mb-3">
                <label for="area" class="form-label">Arvuta pindala:</label>
                <input type="number" class="form-control" id="area" name="area" required>
            </div>
            <button type="submit" class="btn btn-primary">Kontrolli</button>
        </form>

        <?php
        if (!empty($_GET['length']) && !empty($_GET['area'])) {
            $length = $_GET['length'];
            $area = $_GET['area'];

            if ($length > 0) {
                if ($length * $length == round($area)) {
                    echo "<div class='alert alert-success mt-3'>See on ruut!</div>";
                } else {
                    echo "<div class='alert alert-success mt-3'>See on ristkülik!</div>";
                }
            } else {
                echo "<div class='alert alert-danger mt-3'>Sisestatud arv peab olema suurem kui null!</div>";
            }
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
