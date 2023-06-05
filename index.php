<!DOCTYPE html>
<html>

<head>
    <title>Notre première instruction : echo</title>
    <meta charset="utf-8" />
</head>

<body>
    <h2>Affichage de texte avec PHP</h2>

    <p>
        Cette ligne a été écrite entièrement en HTML.<br />
        <?php echo ("Celle-ci a été écrite entièrement en PHP.");
        echo "Ceci est du <strong>texte</strong> <br>";
        echo "Cette ligne a été écrite \"uniquement\" en PHP.";
        ?>
    <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>
    <?php
    // La ligne suivante indique mon âge
    echo "J'ai 92 ans.<br>";
    ?>
    <?php
    /* La ligne suivante indique mon âge
Si vous ne me croyez pas...
... vous avez raison ;o) */
    echo "J'ai 92
     ans.";
    $userAge = 17;
    $fullname = 'Mohamed FOFANA';
    echo '<br>' . $fullname . "<br>";
    echo "Bonjour $fullname et bienvenue sur le site !";
    echo '<br>Bonjour ' . $fullname . ' et bienvenue sur le site !'; // OK
    $number = 2 + 4; // $number prend la valeur 6
    echo $number . '<br>';
    $number = 5 - 1; // $number prend la valeur 4
    echo $number . '<br>';
    $number = 3 * 5; // $number prend la valeur 15
    echo $number . '<br>';
    $number = 10 / 2; // $number prend la valeur 5
    echo $number . '<br>';
    $number = 10 % 5; // $number prend la valeur 0 car la division tombe juste
    echo $number . '<br>';


    $isEnabled = true;

    if ($isEnabled == true) {
        echo "Vous êtes autorisé(e) à accéder au site ✅";
    } else {
        echo "Accès refusé ❌ ";
    }
    ?>
    <?php
    $isAllowedToEnter = "Oui";

    // SI on a l'autorisation d'entrer
    if ($isAllowedToEnter == "Oui") {
        // instructions à exécuter quand on est autorisé à entrer
    } // SINON SI on n'a pas l'autorisation d'entrer
    elseif ($isAllowedToEnter == "Non") {
        // instructions à exécuter quand on n'est pas autorisé à entrer
    } // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
    else {
        echo "Euh, je ne comprends pas ton choix, tu peux me le rappeler s'il te plaît ?";
    }

    $grade = 10;

    switch ($grade) // on indique sur quelle variable on travaille
    {
        case 0: // dans le cas où $grade vaut 0
            echo "Tu es vraiment un gros nul !!!";
            break;

        case 5: // dans le cas où $grade vaut 5
            echo "Tu es très mauvais";
            break;

        case 7: // dans le cas où $grade vaut 7
            echo "Tu es mauvais";
            break;

        case 10: // etc. etc.
            echo "Tu as pile poil la moyenne, c'est un peu juste…";
            break;

        case 12:
            echo "Tu es assez bon";
            break;

        case 16:
            echo "Tu te débrouilles très bien !";
            break;

        case 20:
            echo "Excellent travail, c'est parfait !";
            break;

        default:
            echo "Désolé, je n'ai pas de message à afficher pour cette note";
    }
    ?>
    phpinfo();
    ?>


    </p>
</body>

</html>