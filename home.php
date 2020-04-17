<?php
require('Personne.php');
session_start();
$personne = new Personne();
$personnes = $personne->findAll();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
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
<table class="table">
    <tr>
        <th>name</th>
        <th>firstname</th>
        <th>age</th>
        <th>job</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($personnes as $pers) {?>
        <tr>
            <th><?= $pers->name ?></th>
            <th><?= $pers->firstname ?></th>
            <th><?= $pers->age ?></th>
            <th><?= $pers->job ?></th>
            <th>
                <a href="deletePersonne.php?id=<?=$pers->id ?>">
                    <i class="fa fa-trash fa-3x" aria-hidden="true"></i>
                </a>
            </th>
        </tr>
    <?php } ?>
</table>
</body>
</html>
