<?php

include_once 'connect.php';

if(isset($_POST['btn-upload'])) {

    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder="uploads/";

    // définis la taille du fichier en KB
    $new_size = $file_size/1024;

    $new_file_name = strtolower($file);

    $final_file=str_replace(' ','-',$new_file_name);

    $finfo = finfo_open(FILEINFO_MIME_TYPE); // Vérifie le type MIME du fichier
    $mime = finfo_file($finfo, $file_loc); // Regarde dans ce fichier le type MIME
    finfo_close($finfo); // Fermeture de la lecture

    $filename = explode('.', $_FILES['file']['name']); // Explosion du nom sur le point
    $extension = $filename[count($filename) - 1]; // L'extension du fichier


    //echo $extension . ' ' . $mime;

    if ($extension == 'jpg' && $mime == 'image/jpeg') {
        move_uploaded_file($_FILES['file']['tmp_name'],
            'Image/' . $final_file);
        $chemin = 'Image/' . $final_file;
    }


    if (!empty($chemin)) {
        $prod = $dbh->prepare("INSERT INTO image(nom, dates, type, taille) VALUES (:nom, NOW(), :type, :taille)");
        $prod->execute([':nom' => $final_file, ':type' => $file_type, ':taille' => $new_size]);

        $test = $dbh->prepare("SELECT * FROM image");
        $test->execute();

        foreach ($test as $aller){}

        ?>
        <script>
            window.location.href='index2.php?success';
        </script>

        <?php
    }
    else
    {
        ?>
        <script>
            window.location.href='index2.php?fail';
        </script>
        <?php
    }
}
?>