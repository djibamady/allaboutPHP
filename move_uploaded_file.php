<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];

    $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedExtensions = array('jpg', 'jpeg', 'png');

    if (in_array($fileExt, $allowedExtensions)) {
        if ($fileError === 0) {
            if ($fileSize < 5000000) {
                $destination = 'uploads/' . $fileName;
                move_uploaded_file($fileTmpName, $destination);
                echo "Le fichier a été téléchargé avec succès.";
            } else {
                echo "Le fichier est trop volumineux. Veuillez sélectionner un fichier de moins de 5 Mo.";
            }
        } else {
            echo "Une erreur s'est produite lors du téléchargement du fichier. Veuillez réessayer.";
        }
    } else {
        echo "Les fichiers de type $fileExt ne sont pas autorisés. Veuillez sélectionner un fichier JPG, JPEG ou PNG.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Upload de fichier</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="submit" value="Envoyer">
    </form>
</body>

</html>