<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keskmised palgad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Keskmised palgad</h1>
        <?php
        // Palgade massiiv
        $salaries = array(1220,1213,1295,1312,1298,1354,1296,1286,1292,1327,1369,1455);
        
        // Leia keskmine palk
        $averageSalary = array_sum($salaries) / count($salaries);
        echo "<div>Keskmine palk: " . number_format($averageSalary, 2) . "</div>";
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
