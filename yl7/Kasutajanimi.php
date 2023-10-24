<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasutajanimi ja email</title>
</head>

<body>
    <?php
    function genereeriEmail($kasutajanimi) {
        $email = strtolower($kasutajanimi) . "@hkhk.edu.ee";
        $kood = generateCode();
        return $email . $kood;
    }

    function generateCode() {
        $characters = "abcdefghijklmnopqrstuvwxyz0123456789";
        $code = '';
        for ($i = 0; $i < 7; $i++) {
            $code .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $code;
    }

    $kasutajanimi = "Kasutaja123";
    $email = genereeriEmail($kasutajanimi);
    echo "Kasutajanimi: $kasutajanimi <br>";
    echo "Email: $email";
    ?>
</body>

</html>
