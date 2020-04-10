<?php
require 'ConnexionBD.php';
session_start();
$bdd = ConnexionBD::getInstance();
$req = "select * From personne where name = '${_POST['username']}' and firstname = '${_POST['password']}' ; ";
$reponse = $bdd->query($req);
$user = $reponse->fetch(PDO::FETCH_OBJ);
var_dump($user);
if ($user) {
    $_SESSION['user'] = $user->firstname;
    header('location:home.php');
} else {
    header('location:login.php?errorMessage=Veuillez vérifier vos credentials');
}