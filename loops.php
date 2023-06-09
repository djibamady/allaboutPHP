<p>
    Les boucles demandent à PHP de répéter des instructions plusieurs fois.

    Les deux principaux types de boucles sont :

    while : à utiliser de préférence lorsqu'on ne sait pas par avance combien de fois la boucle doit être répétée ;

    for : à utiliser lorsqu'on veut répéter des instructions un nombre précis de fois.

    L'incrémentation est une technique qui consiste à ajouter 1 à la valeur d'une variable. La décrémentation retire au contraire 1 à cette variable. On trouve souvent des incrémentations au sein de boucles for
</p>
<?php
$lines = 1;
?>
<p>EXEMPLE :</p>
<?php
while ($lines <= 3) {
    echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
    $lines++; // $lines = $lines + 1
}

// Une bien meilleure façon de stocker une recette !
$recipe = [
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
    'author' => 'john.doe@exemple.com',
    'enabled' => true,
];
echo 'Avant :' . $recipe['title'] . '<br>';

//ou
$recipe['title'] = 'Cassoulet';
$recipe['recipe'] = 'Etape 1 : des flageolets, Etape 2 : ...';
$recipe['author'] = 'john.doe@exemple.com';
$recipe['enable'] = true;
echo 'Après :' . $recipe['title'] . '<br>';



/**
 * Déclaration du tableau des recettes
 * Chaque élément du tableau est un tableau numéroté (une recette)
 */
$recipes = [
    ['Cassoulet', '[...]', 'mohamed.fofana@exemple.com', true,],
    ['Couscous', '[...]', 'mohamed.fofana@exemple.com', false,],
];

for ($lines = 0; $lines <= 1; $lines++) {
    echo $recipes[$lines][0] . '<br>';
}
//foreach ($recipes as $recipe) {
//  echo $recipe[0]; // Affichera Cassoulet, puis Couscous
//}

$recipe_pates = [
    'title' => ' FAIRE LES PATES',
    'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
    'author' => 'momo.fof@exemple.com',
    'enabled' => true,
];

foreach ($recipe_pates as $value) {
    echo '<br>' . $value . '<br>';
}



foreach ($recipe_pates as $property => $propertyValue) {
    echo '[' . $property . '] vaut ' . $propertyValue . PHP_EOL;
}
echo '<br> echo with_print_r<br>';
echo "<br>";
echo '<pre>';
print_r($recipe_pates);
echo '</pre>';
