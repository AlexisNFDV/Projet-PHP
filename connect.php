<?php
$dsn = 'mysql:dbname=projet-php;host=46.101.8.64';
$user = 'root';
$password = 'DevilBatGhost21!';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

?>