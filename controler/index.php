<?php
include('../connect.php');//se connecte à la base de données
include('../model/model.php');//se connecte au model.php pour récupérer les fonctions

//Test la condition que les personnage est dans la bdd avec $maxId
if (empty($_GET['personnage_id']) || $_GET['personnage_id'] > $maxId) {
    $id = 1;
} else {
    $id = $_GET['personnage_id'];
}

//Défini la fonction dans une variable pour le vue.php
$personnages = getAllPersonnages($bdd);

include('../view/view.php'); //Affiche la liste des personnages
?>