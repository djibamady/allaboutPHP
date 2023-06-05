<?php

// Chemin vers l'image d'origine
$imagePath = 'uploads/git.jpg';

// Charger l'image d'origine
$image = imagecreatefromjpeg($imagePath);

// Définir les couleurs
$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);

// Écrire du texte sur l'image
$text = 'Exemple d\'image modifiée';
imagettftext($image, 20, 0, 10, 30, $black, 'chemin/vers/ma_police.ttf', $text);

// Tracer une ligne
imageline($image, 50, 50, 200, 50, $black);

// Dessiner un rectangle
imagerectangle($image, 100, 100, 300, 200, $black);

// Afficher l'image modifiée dans le navigateur
header('Content-type: image/jpeg');
imagejpeg($image);

// Libérer la mémoire
imagedestroy($image);
