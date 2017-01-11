<?php

require 'connect.php';

?>

<!doctype html>
<html lang="fr">
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
        <div class="col l3 offset-l3">
            <div class="card large">
                <div class="card-image">
                    <img class="materialboxed" data-caption="A picture of some deer and tons of trees" src="Image/pp.jpg">
                    <span class="card-title">Card Title</span>
                </div>
                <div class="card-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa fuga natus quis reiciendis sit tempore.
                        Aperiam aut consequatur eos ipsam quas reicie</p>
                </div>
                <div class="center card-action">
                    <a class="waves-effect waves-light btn blue lighten-1"><i class="material-icons small">mode_edit</i></a>
                    <a class="waves-effect waves-light btn red accent-3"><i class="material-icons small">delete</i></a>
                </div>
            </div>
        </div>
        <div class="col l3 ">
            <button data-target="modal1" class="btn-floating btn-large waves-effect waves-light blue lighten-4"><i class="material-icons small">library_add</i></button>
            <!--<a class="btn-floating btn-large waves-effect waves-light blue lighten-4" href="#modal1"><i class="material-icons small">library_add</i></a>-->

            <!-- Modal Structure -->
            <div id="modal1" class="modal bottom-sheet">
                <div class="row">
                    <div class="col l5 modal-content">
                        <h4>Ajouter une image</h4>
                    </div>
                    <div>
                        <a href="#!" class="col l5 modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
                    </div>
                </div>
                <div class="row">
                    <form action="#">
                        <div class="input-field col l2">
                            <input id="input_text" type="text" length="25">
                            <label for="input_text">Input text</label>
                        </div>
                        <div class="input-field col l7">
                            <textarea id="textarea1" class="materialize-textarea" length="150"></textarea>
                            <label for="textarea1">Textarea</label>
                        </div>
                        <div class="col l3 file-field input-field">
                            <div class="btn">
                                <span>Image</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
                    <li><a class="grey-text text-lighten-3" href="https://github.com/AlexisNFDV/Projet-PHP">GitHub</a></li>
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
