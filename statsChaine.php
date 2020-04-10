<?php
    function statsChaine($chaine) {
       return count_chars($chaine, 1);
    }

    $chaine = "Bonjour GL2 c'est bien d etre confiné";
    $stats = statsChaine($chaine);
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
            <th>Caractère</th>
            <th>Nombre d'occurences</th>
        </tr>
        <?php
            foreach ($stats as $caractere => $nbOcc ) {
        ?>
        <tr>
            <td><?= chr($caractere)?></td>
            <td><?= $nbOcc?></td>
        </tr>
        <?php
            }
            ?>
    </table>
</body>
</html>

