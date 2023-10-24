<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liitu uudiskirjaga</title>
</head>

<body>
    <?php
    function uudiskirjaVorm() {
        echo "<form action='#' method='post'>
                <input type='email' placeholder='Sisesta oma e-mail'>
                <button type='submit'>Liitu uudiskirjaga</button>
              </form>";
    }
    
    uudiskirjaVorm();
    ?>
</body>

</html>
