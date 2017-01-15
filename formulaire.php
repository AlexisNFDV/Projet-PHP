<?php

include_once 'connect.php';

if(isset($_GET['success'])){

$req = $dbh->prepare('SELECT * FROM image WHERE id IN (SELECT MAX(id) FROM image GROUP BY id)ORDER BY id;');
$req->execute();
$result = $req->fetchAll();

foreach ($result as $item) {

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

<div class="container">
    <div class="row">
        <div class="col S3">
            <div class="card large">
                <div class="card-image">
                    <?php

                    $image = "Image/" . $item['nom'];

                    print '<img class="materialboxed" data-caption="Nom du fichier" src="' . $image . '" height="200px" width="200px" />';


                    ?>

                    <span class="card-title">Card Title</span>
                </div>
                <div class="card-content">
                    <div class="row">
                        <div class="col l6">
                            <p>Date d'ajout</p>
                        </div>
                        <div class="col l6">
                            <p> <?php

                                echo $item['dates'];

                                ?>
                            </p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col l6">
                            <p>Résolution</p>
                        </div>
                        <div class="col l6">
                            <p>
                                <?php

                                list($width, $height, $type, $attr) = getimagesize("Image/" . $item['nom']);

                                echo "" . $width . '*' . $height;

                                ?>
                            </p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col l6">
                            <p>Taille/type</p>
                        </div>
                        <div class="col l6">
                            <p><?php

                                echo $item['taille'] . 'KB /' . $item['type'];

                                ?>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="center card-action">
                    <a class="waves-effect waves-light btn blue lighten-1 tooltipped" data-position="bottom"
                       data-delay="10" data-tooltip="Modifier">
                        <i class="material-icons small">mode_edit</i>
                    </a>
                    <a class="waves-effect waves-light btn red accent-3 tooltipped" data-position="bottom"
                       data-delay="10" data-tooltip="Supression définitive!">
                        <i class="material-icons small">delete</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
}
}
else if(isset($_GET['fail']))
{
    ?>
    <script>
        alert('error while uploading file');
    </script>
    <?php
}

?>


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