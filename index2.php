<?php

//session_start();

include_once 'connect.php';

/*include_once 'adressage_ip.php';

    $req = $dbh->prepare('SELECT * FROM users WHERE ip = :ip');
    $req->execute([':ip' => $_SERVER['REMOTE_ADDR']]);

    $users = $req->fetchAll();

    if(count($users) > 0) {

        $_SESSION['connected'] = true;
        $_SESSION['id'] = $users[0]['id'];
        header('Location: http://localhost/PHP/8gag/Projet-PHP/index2.php?connected');
    }
    else{
        header('Location: http://localhost/PHP/8gag/Projet-PHP/index2.php');
    }*/
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

<?php

require 'header.php';


    if(isset($_GET['success'])){
        include 'formulaire.php';
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

