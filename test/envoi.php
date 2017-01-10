<?php

ini_set('SMTP', 'localhost');
ini_set('smtp_port', 25);

require '../connect.php';

$nom=$_POST['nom'];
$mail=$_POST['email'];
$objet=$_POST['sujet'];
$message=$_POST['message'];

/////voici la version Mine
$headers = "MIME-Version: 1.0\r\n";

//////ici on détermine le mail en format text
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";

////ici on détermine l'expediteur et l'adresse de réponse
$headers .= "From: $nom <$mail>\r\nReply-to : $nom <$mail>\nX-Mailer:PHP";

$subject="$objet";
$destinataire="alexdu77270@hotmail.fr"; //remplacez "webmaster@votre-site.com" par votre adresse e-mail
$body="$message";
if (mail($destinataire,$subject,$body,$headers)) {
    echo "Votre mail a été envoyé<br>";
} else {
    echo "Une erreur s'est produite";
}
?>