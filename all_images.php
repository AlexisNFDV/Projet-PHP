<?php

include_once 'connect.php';

$req = $dbh->prepare('SELECT * FROM image WHERE id IN (SELECT MAX(id) FROM image GROUP BY id)ORDER BY id DESC;');
$req->execute();
$result = $req->fetchAll();

?>

<!DOCTYPE html>
<html xmlns:margin-top="http://www.w3.org/1999/xhtml">
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

        <?php

        foreach ($result as $item) {

        ?>

        <div class="col l3 center">
            <div class="card large">
                <div class="card-image">
                    <?php

                    $image = "Image/" . $item['nom'];

                    print '<img class="materialboxed" data-caption=' . $item['nom'] . ' src="' . $image . '" height="200px" width="200px" />';


                    ?>
                </div>
                <div class="card-content">
                    <div class="row">
                        <div class="col l12">
                            <h6 id="tyu"><?php echo $item['nom'] ?></h6>
                        </div>
                    </div>
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

                                list($width, $height) = getimagesize("Image/" . $item['nom']);

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
                <div class="card-action">
                    <div class="row">
                        <div class="col l6">
                            <a class="waves-effect waves-light btn blue lighten-1" href=""><i class="material-icons left">system_update_alt</i></a>
                        </div>
                        <div class="col l6">
                            <button type="submit" name="btn-delete" style="padding: 0;width: 50px;height: 10px;border: none;">
                                <form action="" method="get" enctype="multipart/form-data">
                                    <?php echo '<a href="delete.php?id=' . $item['id'] . '" class="waves-effect waves-light btn red accent-3 tooltipped" data-position="bottom"
                               data-delay="10" data-tooltip="Supression">
                                <i class="material-icons small">delete</i>
                            </a>' ?>
                                </form>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
}
require 'footer.php';
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