<?php
try{
    $bdd = new PDO('mysql:host=localhost; dbname=projet3', 'root','');
}
catch(Exception $e)
{
    die('Erreur : '. $e-> getMessage());
}