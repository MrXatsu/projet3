<?php
include('../connect.php'); //se connecte à la base de donnée
include('../model/model.php'); //se connecte au model.php

//Test la condition que les personnage est dans la bdd avec $maxId
if (empty($_GET['personnage_id']) || $_GET['personnage_id'] > $maxId) {
    $id = 1;
} else {
    $id = $_GET['personnage_id'];
}

$data = AfficherPersonnage($bdd, $id); //Défini la fonction dans une variable pour le vue2.php

include('../view/view2.php'); //Affiche les infos du personnage
?>
