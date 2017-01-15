<?php

session_start();

require 'connect.php';

if(isset($_GET['id'])) {
    $requete = $dbh->prepare('DELETE FROM image WHERE id = :id');
    $requete->execute([':id' => $_GET['id']]);

    header('Location: index2.php?connect&success');
}