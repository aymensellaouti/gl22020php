<?php

//$tab = [
//  'name' => 'sellaouti',
//  'firstname' => 'aymen'
//];
//echo $tab['name'];
//foreach ($tab as $cle => $valeur) {
//    echo "${cle} : ${valeur} <br>";
//}

function getUsers() {
    // accès BD
    return $users = [
        'aymen','ahmed','essia'
    ];
}

$mesUsers = getUsers();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>Name</th>
        </tr>

        <?php
        foreach ($mesUsers as $user) {
            ?>
            <tr>
                <td><?=$user ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
