<?php
require 'Diplome.php';
$diplome = new Diplome();
$diplomes = $diplome->findAll();

var_dump($diplomes);
