<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pildid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Pildid</h1>
        <?php
        $images = array("prentice.jpg","freeland.jpg","peterus.jpg","devlin.jpg","gabriel.jpg","pete.jpg");
        
        if (!is_dir('img')) {
            mkdir('img');
        }
        
        foreach ($images as $image) {
            copy($image, 'img/' . $image);
        }
        
        echo "<div class='mb-3'><img src='img/{$images[2]}' alt='Pilt 3'></div>";
        
        echo "<div class='row'>";
        foreach ($images as $image) {
            echo "<div class='col-md-2 mb-3'><img src='img/$image' alt='Pilt'></div>";
        }
        echo "</div>";
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
