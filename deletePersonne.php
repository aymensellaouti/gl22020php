<?php
require 'Personne.php';
session_start();
if (isset($_GET['id'])) {
    $personne = new Personne();
    $response = $personne->deletePersonne($_GET['id']);
}
header('location:home.php');