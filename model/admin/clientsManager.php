<?php
    

    function ajouterClients($libelle, $description, $logo, $connexion){
        
        $libelle = strip_tags($libelle);
        $description = strip_tags($description);
        $logo = strip_tags($logo);

        $requete = $connexion->prepare("
        INSERT INTO clients(libelle_clients, description_clients, logo_clients) VALUES (:libelle_clients, :description_clients, :logo_clients)");

        $requete->bindParam(':libelle_clients',$libelle);
        $requete->bindParam(':description_clients',$description);
        $requete->bindParam(':logo_clients',$logo);

        $requete->execute();
    }

    function supprimerClient($id, $connexion){
        $id = strip_tags($id);

        $requete = $connexion->prepare("
        DELETE FROM clients WHERE id_clients = :id");

        $requete->bindParam(':id',$id);

        $requete->execute();

    }

    function modifierClient($id, $libelle, $description, $logo, $connexion){
        $id = strip_tags($id);
        $libelle = strip_tags($libelle);
        $description = strip_tags($description);
        $logo = strip_tags($logo);

        $requete = $connexion->prepare("
        UPDATE clients SET libelle_clients = :libelle, description_clients = :description, logo_clients = :logo WHERE id_clients = :id");

        $requete->bindParam(':id',$id);
        $requete->bindParam(':libelle',$libelle);
        $requete->bindParam(':description',$description);
        $requete->bindParam(':logo',$logo);

        $requete->execute();

    }

    function getUnClient($id, $connexion){
        $id = strip_tags($id);

        $requete = $connexion->prepare("
        SELECT libelle_clients, description_clients FROM clients WHERE id_clients = :id");

        $requete->bindParam(':id',$id);

        $requete->execute();

        $resultat = $requete->fetchall();


        return $resultat;
    }

    function getPromosClient($idClient, $connexion){
        $idClient = strip_tags($idClient);

        $requete = $connexion->prepare("
        SELECT * FROM promos WHERE id_clients = :idClient");

        $requete->bindParam(':idClient',$idClient);

        $requete->execute();

        $resultat = $requete->fetchall();


        return $resultat;
    }

?>