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
    echo 'La recette doit être affichée !';
} else {
    echo 'La recette doit être cachée !';
}
