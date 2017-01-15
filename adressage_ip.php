<?php

require 'connect.php';

$ip = $_SERVER['REMOTE_ADDR'];

$req = $dbh->prepare('SELECT * FROM users WHERE ip = :ip');
$req->execute([':ip' => $ip]);
$users = $req->fetchAll();

var_dump($users);


    $stmt = $dbh->prepare("INSERT INTO users(ip) VALUES (:ip)");
    $stmt->execute([':ip' => $ip]);
    $stmt->fetchAll();

    header('Location:index2.php?success');