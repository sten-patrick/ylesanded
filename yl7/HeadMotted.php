<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Head mõtted</title>
</head>

<body>
    <?php
    function genereeriLause() {
        $alused = array("Tarkus", "Armastus", "Õnn", "Edu");
        $oeldised = array("toob rõõmu", "muudab maailma", "on oluline", "viib sihile");
        $sihitud = array("sinu südamesse", "igasse päeva", "su unistustesse", "sinu saavutustesse");

        $alus = $alused[array_rand($alused)];
        $oeldis = $oeldised[array_rand($oeldised)];
        $sihitis = $sihitud[array_rand($sihitud)];

        echo "$alus $oeldis $sihitis.";
    }

    genereeriLause();
    ?>
</body>

</html>
