<?php
session_start();
if (isset($_SESSION['user'])) {
    $_SESSION['nbVisite'] ++;
    echo "Bonjour ${_SESSION['user']} c'est votre ${_SESSION['nbVisite']} visite";
} else {
    $_SESSION['user'] = 'aymen';
    $_SESSION['nbVisite'] = 1;
    echo 'Bienvenu dans notre site ';
}