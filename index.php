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

    phpinfo();
    ?>


    </p>
</body>

</html>