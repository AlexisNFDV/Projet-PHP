<?php

include_once 'connect.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Police google -->
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">

    <!--Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <!--Icons Materialize -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <link rel="stylesheet" href="CSS/style.css">
    <title>8GAG</title>
</head>
<body>
<header>
    <h1 class="center ent">8GAG</h1>
</header>

<div class="container">
    <div class="row">
        <div class="col l3 center">

            <a class="btn-floating btn-large waves-effect waves-light blue lighten-1 tooltipped" href="#modal1" data-position="top" data-delay="10"
               data-tooltip="Ajouter une Image">
                <i class="material-icons small">library_add</i>
            </a>
            <!-- Modal Structure -->
            <div id="modal1" class="modal bottom-sheet">
                <div class="container">
                    <div class="modal-content">
                        <h4 class="center">Ajouter une image</h4>
                    </div>
                    <div class="row">
                        <div class="col l4 offset-l2 file-field input-field mar">
                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                <div class="btn">
                                    <span>Image</span>
                                    <input type="file" name="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                        </div>
                        <div class="col offset-l3">
                            <button type="submit" name="btn-upload" style="padding: 0;width: 50px;height: 10px;border: none;">
                                <a type="submit" class="modal-action modal-close waves-effect waves-green btn blue lighten-1">Ajouter</a>
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
    if(isset($_GET['success'])){
        include 'formulaire.php';
    }
?>

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
    //initialisation des zoom pour les photos
    $(document).ready(function(){
        $('.materialboxed').materialbox();
    });
    //Initialisation des modules
    $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal').modal();
    });

</script>

</html>

