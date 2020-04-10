<?php
    session_start();
    if (isset($_SESSION['user'])) {
        header('location:home.php');
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
<form action="processLogin.php" method="post">
    <input type="text" name="username" class="form-control">
    <input type="text" name="password" class="form-control">
    <button type="submit" class="btn btn-primary">
        Login
    </button>
    <?php
    if (isset($_GET['errorMessage'])) {
        ?>
        <div class="alert alert-danger">
            <?= $_GET['errorMessage'] ?>
        </div>
        <?php
    }
    ?>
</form>
</body>
</html>
