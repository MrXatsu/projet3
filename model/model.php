<?php

//fonction pour afficher les personnages
function AfficherPersonnage($bdd, $id){
    $sql = 'SELECT * FROM info as a 
        JOIN personnage as b ON a.personnage_id = b.personnage_id
        WHERE a.personnage_id = :personnage_id';

$req = $bdd ->prepare($sql);
$req -> execute(
    array(
        ':personnage_id' => $id
        )
    );
    $data = $req->fetch(PDO::FETCH_ASSOC);
    
    return $data;
}

//Fonction pour afficher les infos du personnage choisi.
function getAllPersonnages($bdd) {
    $sql = 'SELECT * FROM personnage';
    $req = $bdd->query($sql);
    return $req->fetchAll(PDO::FETCH_ASSOC);
}

//Rend la condition dans le 'controler' dynamique
$query = $bdd->query("SELECT MAX(personnage_id) AS max_id FROM personnage");
$maxId = $query->fetch(PDO::FETCH_ASSOC)['max_id'];
