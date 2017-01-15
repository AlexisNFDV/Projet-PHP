<?php
if (isset($_GET["filename"]))
{
    $filename=$_GET["filename"];
// ne conserver que le nom du fichier : le nom que verra s'afficher l'utilisateur
    $uploadname=basename($filename);

// Envoi du fichier
    header('Content-Transfer-Encoding: none');
    header('Content-Type: application/octetstream');
    header('Content-Disposition: attachment; filename="'.$uploadname.'"');
    header('Content-length: '.filesize($filename));
    header("Pragma: no-cache");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0, public");
    header("Expires: 0");
    @readfile($filename) OR die();
}