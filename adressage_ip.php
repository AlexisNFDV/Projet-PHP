<?php

session_start();

require 'connect.php';

$ip = $_SERVER['REMOTE_ADDR'];

$req = $dbh->prepare('SELECT * FROM users WHERE ip = :ip');
$req->execute([':ip' => $ip]);

$users = $req->fetchAll();

if(count($users) > 0) {

    $_SESSION['connected'] = true;
    $_SESSION['id'] = $users[0]['id'];
    header('Location:index2.php?connect&success');
}
else{
    for ($i=0; $i<1; $i++){
        $stmt = $dbh->prepare("INSERT INTO users(ip) VALUES (:ip)");
        $stmt->execute([':ip' => $ip]);
        $stmt->fetchAll();
        break;
    }

    header('Location:index2.php?connect');
}