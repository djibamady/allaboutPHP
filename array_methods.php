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
    echo 'Arlette ne fait pas partie des utilisateurs enregistrés !';
}
