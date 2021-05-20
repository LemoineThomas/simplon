<?php
    

    function ajouterCategorie($libelle, $connexion){
        
        $libelle = strip_tags($libelle);

        $requete = $connexion->prepare("
        INSERT INTO categories(libelle_categories) VALUES (:libelle_categories)");

        $requete->bindParam(':libelle_categories',$libelle);

        $requete->execute();
    }

    function supprimerCategorie($id, $connexion){
        $id = strip_tags($id);

        $requete = $connexion->prepare("
        DELETE FROM categories WHERE id_categories = :id");

        $requete->bindParam(':id',$id);

        $requete->execute();

    }

    function modifierCategorie($id, $libelle, $connexion){
        $id = strip_tags($id);
        $libelle = strip_tags($libelle);

        $requete = $connexion->prepare("
        UPDATE categories SET libelle_categories = :libelle WHERE id_categories = :id");

        $requete->bindParam(':id',$id);
        $requete->bindParam(':libelle',$libelle);

        $requete->execute();

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

    function getPromosCategorie($idCategorie, $connexion){
        $idCategorie = strip_tags($idCategorie);

        $requete = $connexion->prepare("
        SELECT * FROM promos WHERE id_categories = :idCategorie");

        $requete->bindParam(':idCategorie',$idCategorie);

        $requete->execute();

        $resultat = $requete->fetchall();


        return $resultat;
    }
?>