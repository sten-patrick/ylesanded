<?php
$fail = fopen("andmefail.txt", "r");

$sisu = fread($fail, filesize("andmefail.txt"));

$sisu = nl2br($sisu);

fclose($fail);

echo $sisu;
?>
