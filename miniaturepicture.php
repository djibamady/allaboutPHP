<?php
// Chemin vers l'image source
$imageSource = 'uploads/git.jpg';

// Dimensions de la miniature
$thumbnailWidth = 200;
$thumbnailHeight = 200;

// Création de l'image miniature vide
$thumbnail = imagecreate($thumbnailWidth, $thumbnailHeight);

// Chargement de l'image source
$source = imagecreatefromjpeg($imageSource);

// Récupération des dimensions de l'image source
$sourceWidth = imagesx($source);
$sourceHeight = imagesy($source);

// Calcul des dimensions de la miniature en conservant le ratio de l'image source
if ($sourceWidth > $sourceHeight) {
    $thumbnailWidth = $thumbnailWidth;
    $thumbnailHeight = intval($sourceHeight * ($thumbnailWidth / $sourceWidth));
} else {
    $thumbnailHeight = $thumbnailHeight;
    $thumbnailWidth = intval($sourceWidth * ($thumbnailHeight / $sourceHeight));
}

// Création de l'image miniature en redimensionnant l'image source
imagecopyresized($thumbnail, $source, 0, 0, 0, 0, $thumbnailWidth, $thumbnailHeight, $sourceWidth, $sourceHeight);

// Enregistrement de l'image miniature
$imageThumbnail = 'uploads/thumbnail.jpg';
imagejpeg($thumbnail, $imageThumbnail);

// Libération de la mémoire
imagedestroy($thumbnail);
imagedestroy($source);

echo "Miniature créée avec succès !";
