<?php
$recipe = [
    'title' => 'Escalope milanaise',
    'recipe' => '',
    'author' => 'momo.fof@exemple.com',
    'is_enabled' => true,
];

function isAllowed($array)
{
    return $array['is_enabled'];
}
$isAllow = isAllowed($recipe);
if ($isAllow) {
    echo 'La recette doit être affichée !<br>';
} else {
    echo 'La recette doit être cachée !<br>';
}
// Texte d'origine
$texte = "Le chat est sur le tapis.";

// Recherche et remplacement
$nouveauTexte = str_replace("chat", "chien", $texte);

// Affichage du résultat
echo $nouveauTexte;
