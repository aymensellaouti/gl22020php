<?php
require 'Personne.php';
session_start();
$personne = new Personne();

$user = $personne->login($_POST['username'],$_POST['password']);

if ($user) {
    $_SESSION['user'] = $user->firstname;
    header('location:home.php');
} else {
    header('location:login.php?errorMessage=Veuillez vérifier vos credentials');
}