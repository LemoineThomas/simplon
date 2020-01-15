<?php
    

    function ajouterUtilisateur($nom, $prenom, $mail, $connexion){
        
        $nom = strip_tags($nom);
        $prenom = strip_tags($prenom);
        $mail = strip_tags($mail);

        $requete = $connexion->prepare("
        INSERT INTO utilisateurs(nom, prenom, mail) VALUES (:nom, :prenom, :mail)");

        $requete->bindParam(':nom',$nom);
        $requete->bindParam(':prenom',$prenom);
        $requete->bindParam(':mail',$mail);

        $requete->execute();
    }

?>