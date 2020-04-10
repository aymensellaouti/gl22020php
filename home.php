<?php
require 'ConnexionBD.php';
session_start();
$bdd = ConnexionBD::getInstance();
$req="select * From personne";
$reponse = $bdd->query($req);
var_dump($reponse->fetchAll(PDO::FETCH_OBJ));
    if (!isset($_SESSION['user'])) {
        header('location:login.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<div class="jumbotron">
    <h1 class="display-4">Hello, <?=$_SESSION['user']?></h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="logout.php" role="button">Logout</a>
    </p>
</div>
</body>
</html>
