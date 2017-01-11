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

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="CSS/contact.css">

    <title>Contact</title>

</head>

<body>

<header>

</header>

<form class="form-horizontal" action="" method="post">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Sign in</button>
        </div>
    </div>
</form>



<footer>
    <?php echo '<p class="copyright"> © Copyright 2016 </p>' ?>
</footer>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
