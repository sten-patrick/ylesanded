<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arvud</title>
</head>

<body>
    <?php
    function genereeriArvud($algus, $lopp, $samm) {
        for ($i = $algus; $i <= $lopp; $i += $samm) {
            echo "$i ";
        }
    }

    genereeriArvud(2, 8, 1);
    ?>
</body>

</html>
