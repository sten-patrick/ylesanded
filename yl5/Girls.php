<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tüdrukud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Tüdrukud</h1>
        <?php
        // Tüdrukute massiiv
        $girls = array("Anna", "Emma", "Olivia", "Ava", "Mia", "Sophia", "Amelia", "Isabella");
        
        // Sorteerime tüdrukute massiivi
        sort($girls);
        
        // Kuvame tüdrukud ridade kaupa
        foreach ($girls as $girl) {
            echo "<div class='row'>$girl</div>";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
