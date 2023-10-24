<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dünaamiline Veebileht</title>
</head>

<body>
    <h1>Dünaamiline Veebileht</h1>

    <?php
    $allowed_pages = ['leht1', 'leht2', 'leht3', 'leht4'];

    if (isset($_GET['page']) && in_array($_GET['page'], $allowed_pages)) {
        include($_GET['page'] . '.php');
    } else {
        echo "Lehte ei eksisteeri!";
    }
    ?>

</body>

</html>
