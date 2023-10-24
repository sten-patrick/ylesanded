<?php
if (filesize("andmefail.txt") > 200) {
    unlink("andmefail.txt");
    echo "Fail on kustutatud, sest see ületas 200 baiti suurust.";
} else {
    echo "Fail ei vasta kustutamise kriteeriumile.";
}
?>
