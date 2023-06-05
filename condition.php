<p>

    Les conditions permettent à PHP de prendre des décisions en fonction de la valeur des variables.

    La forme de condition la plus courante est if ... elseif ... else qui signifie « si »… « sinon si »… « sinon ».

    On peut combiner des conditions avec les instructions&& (« et ») et|| (« ou »).

    Si une condition comporte de nombreux elseif , il peut être plus pratique d'utiliser la condition switch.

    Les ternaires sont des conditions condensées qui font un test sur une variable, et en fonction des résultats de ce test, elles donnent une valeur à une autre variable. Elles sont cependant plus rarement utilisée
    <?php
    $lines = 1;

    while ($lines <= 100) {
        echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
        $lines++; // $lines = $lines + 1
    }
    ?>
    <?php
    for ($lines = 0; $lines <= 2; $lines++) {
        echo $users[$lines][0] . ' ' . $users[$lines][1] . '<br />';
    }
    ?>
</p>