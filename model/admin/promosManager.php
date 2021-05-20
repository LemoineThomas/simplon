<?php
    function getPromos($connexion){
        $requete = $connexion->prepare("
        SELECT * FROM promos");

        $requete->execute();

        $resultat = $requete->fetchall();


        return $resultat;
    }

    function getUneCategorie($id, $connexion){
        $id = strip_tags($id);

        $requete = $connexion->prepare("
        SELECT libelle_categories FROM categories WHERE id_categories = :id");

        $requete->bindParam(':id',$id);

        $requete->execute();

        $resultat = $requete->fetchall();


        return $resultat;
    }

    function getUnUtilisateur($id, $connexion){
        $id = strip_tags($id);

        $requete = $connexion->prepare("
        SELECT libelle_clients FROM clients WHERE id_clients = :id");

        $requete->bindParam(':id',$id);

        $requete->execute();

        $resultat = $requete->fetchall();


        return $resultat;
    }



    function ajouterPromo($libelle, $description, $prixBase, $prixPromo, $date, $visuel, $client, $categorie , $connexion){
        
        $libelle = strip_tags($libelle);
        $description = strip_tags($description);
        $prixBase = strip_tags($prixBase);
        $prixPromo = strip_tags($prixPromo);
        $date = strip_tags($date);
        $visuel = strip_tags($visuel);
        $client = strip_tags($client);
        $categorie = strip_tags($categorie);


        $requete = $connexion->prepare("
        INSERT INTO promos(libelle_promos, description_promos, prixpromo_promos, prix_promos, date_promos, visuel_promos, id_clients, id_categories) VALUES (:libelle, :description, :prixPromo, :prixBase, :date, :visuel, :client, :categorie )");

        $requete->bindParam(':libelle',$libelle);
        $requete->bindParam(':description',$description);
        $requete->bindParam(':prixBase',$prixBase);
        $requete->bindParam(':prixPromo',$prixPromo);
        $requete->bindParam(':date',$date);
        $requete->bindParam(':visuel',$visuel);
        $requete->bindParam(':client',$client);
        $requete->bindParam(':categorie',$categorie);

        $requete->execute();
    }


    function supprimerPromo($id, $connexion){

        $requete = $connexion->prepare("
		DELETE FROM promos WHERE id_promos = :id");

        $requete->bindParam(':id',$id);

		$requete->execute();

    }

    function modifierPromo($id, $libelle, $description, $prixBase, $prixPromo, $date, $visuel, $client, $categorie, $connexion){
        $id = strip_tags($id);
        $libelle = strip_tags($libelle);
        $description = strip_tags($description);
        $prixBase = strip_tags($prixBase);
        $prixPromo = strip_tags($prixPromo);
        $date = strip_tags($date);
        $visuel = strip_tags($visuel);
        $client = strip_tags($client);
        $categorie = strip_tags($categorie);

        $requete = $connexion->prepare("
        UPDATE promos SET libelle_promos = :libelle, description_promos = :description, prix_promos = :prixBase, prixpromo_promos = :prixPromo, date_promos = :date, visuel_promos = :visuel, id_clients = :client, id_categories = :categorie WHERE id_promos = :id");

        $requete->bindParam(':id', $id);
        $requete->bindParam(':libelle', $libelle);
        $requete->bindParam(':description', $description);
        $requete->bindParam(':prixBase', $prixBase);
        $requete->bindParam(':prixPromo', $prixPromo);
        $requete->bindParam(':date', $date);
        $requete->bindParam(':visuel', $visuel);
        $requete->bindParam(':client', $client);
        $requete->bindParam(':categorie', $categorie);

        $requete->execute();

    }

    function getUnePromo($id, $connexion){
        $id = strip_tags($id);

        $requete = $connexion->prepare("
        SELECT libelle_promos, description_promos, prixpromo_promos, prix_promos, date_promos, visuel_promos, id_clients, id_categories FROM promos WHERE id_promos = :id");

        $requete->bindParam(':id', $id);

        $requete->execute();

        $resultat = $requete->fetchall();


        return $resultat;
    }
?>