<?php
// Mot de passe à chiffrer
$motDePasse = "FOFANA123";

// Génération d'un sel aléatoire
$sel = generateSalt();

// Chiffrement du mot de passe avec le sel
$motDePasseChiffre = crypt($motDePasse, $sel);

// Fonction pour générer un sel aléatoire
function generateSalt()
{
    // Génère une chaîne de caractères aléatoires de longueur 22
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $salt = '';
    for ($i = 0; $i < 22; $i++) {
        $salt .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }
    return $salt;
}

// Affichage du mot de passe chiffré
echo "Mot de passe chiffré : " . $motDePasseChiffre;
