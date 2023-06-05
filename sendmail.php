<?php
// Paramètres du mail
$destinataire = 'mohamed.fofana@etudiant.univ-rennes1.com'; // Adresse e-mail du destinataire
$sujet = 'Ceci est un texte'; // Sujet du mail

// Contenu du mail
$message = '
<html>
<head>
  <title>Newsletter</title>
</head>
<body>
  <h1>Newsletter mensuelle</h1>
  <p>Ceci est le contenu de la newsletter...</p>
</body>
</html>';

// En-têtes du mail
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: Votre Nom <mohamedfofana35700@gmail.com>' . "\r\n";

// Envoi du mail
if (mail($destinataire, $sujet, $message, $headers)) {
    echo 'Le mail a été envoyé avec succès.';
} else {
    echo 'Une erreur s\'est produite lors de l\'envoi du mail.';
}
