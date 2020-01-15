<?php
    function getAttributions($connexion){
        $requete = $connexion->prepare("
        SELECT * FROM attribution");

        $requete->execute();

        $resultat = $requete->fetchall();


        return $resultat;
    }

    function getUnOrdinateur($id, $connexion){
        $id = strip_tags($id);

        $requete = $connexion->prepare("
        SELECT nom FROM ordinateurs WHERE id = :id");

        $requete->bindParam(':id',$id);

        $requete->execute();

        $resultat = $requete->fetchall();


        return $resultat;
    }

    function getUnUtilisateur($id, $connexion){
        $id = strip_tags($id);

        $requete = $connexion->prepare("
        SELECT nom, prenom FROM utilisateurs WHERE id = :id");

        $requete->bindParam(':id',$id);

        $requete->execute();

        $resultat = $requete->fetchall();


        return $resultat;
    }



    function ajouterAttribution($pc, $utilisateur, $date, $time1, $time2, $connexion){
        
        $pc = strip_tags($pc);
        $utilisateur = strip_tags($utilisateur);
        $date = strip_tags($date);
        $time1 = strip_tags($time1);
        $time2 = strip_tags($time2);


        $requete = $connexion->prepare("
        INSERT INTO attribution(id_ordinateurs, id_utilisateurs, date, heureDebut, heureFin) VALUES (:pc, :utilisateur, :date, :time1, :time2)");

        $requete->bindParam(':pc',$pc);
        $requete->bindParam(':utilisateur',$utilisateur);
        $requete->bindParam(':date',$date);
        $requete->bindParam(':time1',$time1);
        $requete->bindParam(':time2',$time2);

        $requete->execute();
    }


    function supprimerAttribution($pc, $uti, $date, $time1, $connexion){

        $requete = $connexion->prepare("
		DELETE FROM attribution WHERE id_ordinateurs = :pc AND id_utilisateurs = :uti AND date = :date AND heureDebut = :time1");

        $requete->bindParam(':pc',$pc);
        $requete->bindParam(':uti',$uti);
        $requete->bindParam(':date',$date);
        $requete->bindParam(':time1',$time1);

		$requete->execute();

    }


    function verificationAttribution($pc, $utilisateur, $date, $time1, $time2, $connexion){

        $requete = $connexion->prepare("
		SELECT * FROM attribution WHERE id_ordinateurs = :pc AND id_utilisateurs = :utilisateur AND date = :date AND ((:time1 >= heureDebut AND :time1 < heureFin) OR (:time2 > heureDebut) OR (:time1 <= heureDebut AND :time2 >= heureFin))");

        $requete->bindParam(':pc',$pc);
        $requete->bindParam(':utilisateur',$utilisateur);
        $requete->bindParam(':date',$date);
        $requete->bindParam(':time1',$time1);
        $requete->bindParam(':time2',$time2);

        $requete->execute();

        $resultat = $requete->fetchall();


        return $resultat;
        
    }
?>