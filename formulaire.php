<?php

session_start();

include_once 'connect.php';

if(isset($_GET['connect']) && isset($_GET['success'])) {

    $test = $dbh->prepare('SELECT * FROM image WHERE EXISTS ( SELECT * FROM users WHERE ip = :ip)');
    $test->execute([':ip' => $_SESSION['id']]);
    $test1 = $test->fetchAll();

}


if(isset($_GET['success'])){

$req = $dbh->prepare('SELECT * FROM image WHERE id IN (SELECT MAX(id) FROM image GROUP BY id)ORDER BY id DESC LIMIT 5;');
$req->execute();
$result = $req->fetchAll();

foreach ($result as $item) {

?>

    <div class="col l4 center">
        <div class="card large">
            <div class="card-image">
                <?php

                $image = "Image/" . $item['nom'];

                print '<img class="materialboxed" data-caption='.$item['nom'].' src="' . $image . '" height="200px" width="200px" />';


                ?>
            </div>
            <div class="card-content">
                <div class="row">
                    <div class="col l12">
                        <h6 id="tyu"><?php echo $item['nom']?></h6>
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

                            echo "".$width.'*'.$height;

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
                    <?php
                    $filename = $item['nom'];
                    $dir= "http://localhost/PHP/8gag/Projet-PHP/Image/".$filename;
                    ?>

                    <div class="col l6">
                        <button type="submit" name="btn-delete" style="padding: 0;width: 50px;height: 10px;border: none;">
                            <form action="" method="get" enctype="multipart/form-data">
                                <?php echo '<a href="download.php?filename='.$item['nom'].'" class="waves-effect waves-light btn blue lighten-1">
                                <i class="material-icons left">system_update_alt</i>
                                </a>'?>
                            </form>
                        </button>
                    </div>
                    <div class="col l6">
                        <button type="submit" name="btn-delete" style="padding: 0;width: 50px;height: 10px;border: none;">
                            <form action="" method="get" enctype="multipart/form-data">
                                <?php echo '<a href="delete.php?id='.$item['id'].'" class="waves-effect waves-light btn red accent-3 tooltipped" data-position="bottom"
                               data-delay="10" data-tooltip="Supression">
                                <i class="material-icons small">delete</i>
                            </a>'?>
                            </form>
                        </button>
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
