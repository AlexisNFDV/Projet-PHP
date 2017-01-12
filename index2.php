<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

require 'connect.php';

if (isset($_GET['t'])) {

    if (isset($_FILES['test'])) {

        echo $_FILES['test']['name'] . '<br>'; // Nom du fichier

        $finfo = finfo_open(FILEINFO_MIME_TYPE); // Vérifie le type MIME du fichier
        $mime = finfo_file($finfo, $_FILES['test']['tmp_name']); // Regarde dans ce fichier le type MIME
        finfo_close($finfo); // Fermeture de la lecture

        $filename = explode('.', $_FILES['test']['name']); // Explosion du nom sur le point
        $extension = $filename[count($filename) - 1]; // L'extension du fichier


echo $extension . ' ' . $mime;

        $prod = $dbh->prepare("INSERT INTO image(nom) VALUES ('test')");
        $prod->execute();
        $new = $prod->fetchAll();

        var_dump($new);

        /*if ($extension == 'jpg' && $mime == 'image/jpeg') {
            move_uploaded_file($_FILES['test']['tmp_name'],
                'Image/' . $_FILES['test']['name']);
            $chemin = 'Image/' . $_FILES['test']['name'];
            echo 'upload done';
        } else {
            echo 'format incorrect';
        }


        if (!empty($chemin)) {*/


    }
}

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
                    <img class="materialboxed" data-caption="Nom du fichier" src="Image/pp.jpg">
                    <span class="card-title">Card Title</span>
                </div>
                <div class="card-content">
                    <div class="row">
                        <div class="col l6">
                            <p>Date d'test</p>
                        </div>
                        <div class="col l6">
                            <p>10/01/2017</p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col l6">
                            <p>Résolution</p>
                        </div>
                        <div class="col l6">
                            <p>200 x 200</p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col l6">
                            <p>Taille/type</p>
                        </div>
                        <div class="col l6">
                            <p>50 MB/PNG</p>
                        </div>

                    </div>
                </div>
                <div class="center card-action">
                    <a class="waves-effect waves-light btn blue lighten-1 tooltipped" data-position="bottom" data-delay="10" data-tooltip="Modifier"><i class="material-icons small">mode_edit</i></a>
                    <a class="waves-effect waves-light btn red accent-3 tooltipped" data-position="bottom" data-delay="10" data-tooltip="Supression définitive!"><i class="material-icons small">delete</i></a>
                </div>
            </div>
        <div class="col l3">
            <a class="btn-floating btn-large waves-effect waves-light blue lighten-4 tooltipped" href="#modal1" data-position="top" data-delay="10" data-tooltip="Ajouter une Image">
                <i class="material-icons small">library_add</i>
            </a>
            <form action="" method="post" enctype="multipart/form-data">

        <div class="col l3 center">
            <form action="" method="post">
                <a class="btn-floating btn-large waves-effect waves-light blue lighten-1 tooltipped" href="#modal1" data-position="top" data-delay="10" data-tooltip="Ajouter une Image">
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
                                <div class="btn">
                                    <span>Image</span>
                                    <input class="blue lighten-1" type="file" name="test" id="test">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" name="belle" id="belle">
                                </div>
                            </div>
                            <div class="col offset-l3">
                                <a href="index2.php?t=1" class="modal-action modal-close waves-effect waves-green btn blue lighten-1">Ajouter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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