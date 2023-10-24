<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riigid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Riigid</h1>
        <?php
        $countries = array("Indonesia","Canada","Kyrgyzstan","Germany","Philippines", "Philippines","Canada","Philippines","South Sudan","Brazil", "Democratic Republic of the Congo","Indonesia","Syria","Sweden", "Philippines","Russia","China","Japan","Brazil","Sweden","Mexico","France", "Kazakhstan","Cuba","Portugal","Czech Republic");
        
        $maxLength = max(array_map('strlen', $countries));
        echo "<div>Kõige pikema riigi nime märkide arv: $maxLength</div>";
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
