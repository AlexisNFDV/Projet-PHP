<?php

require 'connect.php';

if (!empty($_POST['sujet']) && !empty($_POST['message']) && !empty($_POST['email'])){

     $to      = 'noel.a@hotmail.fr';
     $subject = $_POST['sujet'];
     $message = $_POST['message'] && $_POST['email'];
     $headers = 'From: webmaster@example.com' . "\r\n" .
         'Reply-To: webmaster@example.com' . "\r\n" .
         'X-Mailer: PHP/' . phpversion();

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

    <!--Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <!--Icons Materialize -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="CSS/style.css">

    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">


    <title>Contact</title>

</head>

<body>

<header>
    <h1 class="ent center"><a href="connexion.php" style="color: black">8GAG</a></h1>
</header>

<!-- formulaire de contact -->

<div class="row container">
    <form class="col l12" action="" method="post">
        <div class="row">
            <!-- Nom -->
            <div class="input-field col s6">
                <input type="text" class="validate" name="nom" id="nom">
                <label for="nom">Nom</label>
            </div>
            <!-- Sujet -->
            <div class="input-field col s6">
                <input type="text" class="validate" name="sujet" id="sujet">
                <label for="sujet" >Sujet</label>
            </div>
        </div>
        <!-- Message -->
        <div class="row">
            <div class="input-field col s12">
                <textarea class="materialize-textarea" rows="3" name="message" id="message"></textarea>
                <label for="Message">Message</label>
            </div>
        </div>
        <!-- Mail -->
        <div class="row">
            <div class="input-field col s12">
                <input type="email" class="validate" name="email" id="inputEmail3">
                <label for="inputEmail3">Email</label>
            </div>
        </div>
        <!-- Avis -->
        <div class="row">
            <div class="input-field col s6">
                <select id="avis">
                    <option value="" disabled selected>Commen trouver vous le site ?</option>
                    <option value="1">Très bon :)</option>
                    <option value="2">Bon</option>
                    <option value="3">Sans avis</option>
                    <option value="4">Mauvais</option>
                    <option value="5">Très mauvais :'(</option>
                </select>
                <label for="avis">Votre avis nous intéresse !</label>
            </div>
            <!-- Btn envoyer -->
            <div class=" center col s6">
                <button type="submit" class="btn btn-default yolo">Envoyer votre message</button>
            </div>
        </div>
    </form>
</div>

<footer class="page-footer grey darken-3">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 id="tyu" class="white-text">8GAG</h5>
                <p class="grey-text text-lighten-4">WebMaster Alexis Noel et Benoît Dillies.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Liens</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="https://github.com/AlexisNFDV/Projet-PHP" target="_blank">GitHub</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright grey darken-4">
        <div class="container">
            © 2017 Copyright Text
            <a class="grey-text text-lighten-4 right" href="contact.php">Nous contactez</a>
        </div>
    </div>
</footer>

</body>

<!--Materialize -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

<script>
    $(document).ready(function() {
        $('select').material_select();
    });
</script>

</html>
