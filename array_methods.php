<p>
    Les tableaux (ou arrays) sont des variables représentées sous forme de tableau. Elles peuvent stocker de grandes quantités d'informations.

    Chaque ligne d'un tableau possède une clé (qui permet de l'identifier) et une valeur.

    Il existe deux types de tableaux :

    les tableaux numérotés : chaque ligne est identifiée par une clé numérotée. La numérotation commence à partir de 0 ;

    les tableaux associatifs : chaque ligne est identifiée par une courte chaîne de texte.

    Pour parcourir un tableau, on peut utiliser la boucle for que l'on connaît déjà, mais aussi la boucle foreach qui est dédiée aux tableaux.

    Il existe de nombreuses fonctions permettant de travailler sur des tableaux, notamment pour effectuer des recherches.


</p>
<?php
$users = [
    'Mohamed FOFANA',
    'Benjamin Pavard',
    'Elon Musk',
];

if (in_array('Mohamed FOFANA', $users)) {
    echo 'M. FOFANA fait bien partie des utilisateurs enregistrés !<br>';
}

if (in_array('Arlette Chabot', $users)) {
    echo 'Arlette fait bien partie des utilisateurs enregistrés !';
} else {
    echo 'Arlette ne fait pas partie des utilisateurs enregistrés !<br>';
}
$positionFOFANA = array_search('Mohamed FOFANA', $users);
echo '"Mohamed FOFANA" se trouve en position ' . $positionFOFANA . PHP_EOL;
