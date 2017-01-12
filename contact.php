<?php

require 'connect.php';

if (!empty($_POST['nom']) && !empty($_POST['sujet']) && !empty($_POST['message']) && !empty($_POST['email'])){

    $to = 'noel.a@hotmail.fr';
    /*$name = $nom;*/
    $subject = $_POST['sujet'];
    $message = $_POST['message'];
    $headers = 'From: '.$_POST['email'] ."\r\n" .
        'Reply-To: alexdu77270@hotmail.fr'."\r\n".
        'X-Mailer: PHP/'.phpversion();

    mail($to, $subject, $message, $headers);

    header('Location: index.php');

}

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

    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">


    <title>Contact</title>

</head>

<body>

<header>
    <h1 class="ent">8GAG</h1>
</header>

<form class="form-horizontal" action="" method="post">
    <div class="form-group">
        <label for="nom" class="col-sm-2 control-label">Nom</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nom" placeholder="Nom">
        </div>
    </div>

    <div class="form-group">
        <label for="sujet" class="col-sm-2 control-label">Sujet</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="sujet" placeholder="Sujet">
        </div>
    </div>

    <div class="form-group">
        <label for="Message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="3" placeholder="Votre message" id="message"></textarea>
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
    </div>

    <div class="form-group">
        <label for="avis" class="col-sm-2 control-label">Notre site est : </label>
        <div class="col-sm-10">
            <select class="form-control" id="avis">
                <option>Très bien</option>
                <option>Bien</option>
                <option>Améliorable</option>
                <option>Mal fait</option>
                <option>Très mal fait</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Envoyer</button>
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
