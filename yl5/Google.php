<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Google</h1>
        <?php
        $searchName = "Leib";
        
        $searchResults = array("Sai", "Leib", "Karu", "Kaur");
        
        if (in_array($searchName, $searchResults)) {
            echo "<div class='alert alert-success mt-3'>$searchName on olemas!</div>";
        } else {
            echo "<div class='alert alert-danger mt-3'>$searchName ei leitud!</div>";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
