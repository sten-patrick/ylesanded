<!DOCTYPE html>
<html>
<head>
    <title>Ülesanne</title>
</head>
<body>
    <?php
        // Ülesanne 2
        // Rasmus Kasemaa
        // Kp: 24.10.2023

        $arv1 = 10;
        $arv2 = 5;

        echo "<h2>Aritmeetilised tehted:</h2>";
        echo "<p>$arv1 + $arv2 = " . ($arv1 + $arv2) . "</p>";
        echo "<p>$arv1 - $arv2 = " . ($arv1 - $arv2) . "</p>";
        echo "<p>$arv1 * $arv2 = " . ($arv1 * $arv2) . "</p>";
        echo "<p>$arv1 / $arv2 = " . ($arv1 / $arv2) . "</p>";
        echo "<p>$arv1 % $arv2 = " . ($arv1 % $arv2) . "</p>";
        
        $mm = 1500;
        $cm = $mm / 10;
        $m = $mm / 1000;

        echo "<h2>Pikkuse teisendamine:</h2>";
        echo "<p>$mm mm on $cm cm</p>";
        echo "<p>$mm mm on $m m</p>";

        $kylg1 = 3;
        $kylg2 = 4;
        $hupotenuus = sqrt($kylg1 ** 2 + $kylg2 ** 2);
        $ymbermoot = $kylg1 + $kylg2 + $hupotenuus;
        $pindala = 0.5 * $kylg1 * $kylg2;

        echo "<h2>Täisnurkse kolmnurga omadused:</h2>";
        echo "<p>Ümbermõõt: " . round($ymbermoot) . " ühikut</p>";
        echo "<p>Pindala: " . round($pindala) . " ruutühikut</p>";
    ?>
</body>
</html>
