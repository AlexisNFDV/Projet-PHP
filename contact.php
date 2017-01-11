<?php

require 'connect.php';

if (!empty($_POST['nom']) && !empty($_POST['sujet']) && !empty($_POST['message']) && !empty($_POST['email'])){

    /*$nom = $_POST['nom'];*/
    $sujet = $_POST['sujet'];
    $mess = $_POST['message'];
    $email = $_POST['email'];

    /*$sms = $dbh->prepare("INSERT INTO contact (nom,sujet,message,email) VALUES (:nom, :sujet, :message, :email)");
    $sms->execute([':nom' => $nom, ':sujet' => $sujet, ':message' => $mess, ':email' => $email]);
    $sms->fetchAll();



    $envoi = $dbh->prepare("SELECT * FROM contact WHERE id = 1");
    $envoi->execute();
    $envoi->fetchAll();*/

    $to = 'noel.a@hotmail.fr';
    $name = $nom;
    $subject = $sujet;
    $message = $mess;
    $headers = 'From: '.$email ."\r\n" .
        'Reply-To: alexdu77270@hotmail.fr'."\r\n".
        'X-Mailer: PHP/'.phpversion();

    mail($to, $subject, $message, $headers);

    header('Location: index.php');

}

/*    $nom = $_POST['nom'];
    $mail = $_POST['email'];
    $objet = $_POST['sujet'];
    $message = $_POST['message'];

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
echo ('<p align="center"> Vous allez bientot etre redirigé vers la page d\'acceuil<br>
    Si vous netes pas redirigé au bout de 5 secondes cliquez <a href="index.php">ici
    </a></p>');*/

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.css">

    <link rel="stylesheet" href="Foundation/foundation-icons.css">

    <link rel="stylesheet" href="CSS/contact.css">

    <title>Contact</title>

</head>
<body>
<header>

</header>

<form action="" method="post">
    <label for="nom">Nom : </label>
    <input type="text" name="nom" id="nom"><br>
    <label for="sujet">Sujet : </label>
    <input type="text" name="sujet" id="sujet"><br>
    <label for="message">Message : </label>
    <label>
        <textarea placeholder="Ecrire un message" name="message" id="message"></textarea>
    </label>
    <label for="email">Adresse mail : </label>
    <input type="email" name="email" id="email"><br>
    <input type="submit" name="envoyer" id="envoyer" value="Envoyer !">
</form>



<footer>
    <?php echo '<p class="copyright"> © Copyright 2016 </p>' ?>
</footer>

</body>
</html>
