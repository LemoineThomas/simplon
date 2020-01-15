<?php
    

    function ajouterOrdinateur($nom, $connexion){
        
        $nom = strip_tags($nom);

        $requete = $connexion->prepare("
        INSERT INTO ordinateurs(nom) VALUES (:nom)");

        $requete->bindParam(':nom',$nom);

        $requete->execute();
    }
?>