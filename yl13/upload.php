<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["file"])) {
    $file = $_FILES["file"];
    $allowedExtensions = ["jpg", "jpeg"];
    $fileExtension = pathinfo($file["name"], PATHINFO_EXTENSION);

    if (in_array(strtolower($fileExtension), $allowedExtensions)) {
        move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"]);
        echo "Pilt on edukalt üles laetud. <br>";
        echo "<img src='uploads/{$file['name']}' alt='Laetud pilt'>";
    } else {
        echo "Ainult JPG ja JPEG formaadis pilte saab üles laadida.";
    }
}
?>
