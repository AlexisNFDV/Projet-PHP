<?php

require 'connect.php';

?>

<!doctype html>
<html lang="fr">
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
        <div class="col l3 offset-l3">
            <div class="card large">
                <div class="card-image">
                    <img class="materialboxed" data-caption="A picture of some deer and tons of trees" src="Image/pp.jpg">
                    <span class="card-title">Card Title</span>
                </div>
                <div class="card-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa fuga natus quis reiciendis sit tempore.
                        Aperiam aut consequatur eos ipsam quas reicie</p>
                </div>
                <div class="center card-action">
                    <a class="waves-effect waves-light btn blue lighten-1"><i class="material-icons small">mode_edit</i></a>
                    <a class="waves-effect waves-light btn red accent-3"><i class="material-icons small">delete</i></a>
                </div>
            </div>
        </div>
        <div class="col l3 ">
            <div class="center">
            <a class="btn-floating btn-large waves-effect waves-light blue lighten-4"><i class="material-icons small">library_add</i></a>
            </div>
        </div>
    </div>
</div>


</body>

<!--Materialize -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
        $('.materialboxed').materialbox();
    });
</script>

</html>
