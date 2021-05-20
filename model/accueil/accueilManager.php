<?php


    function getUser($email, $password, $connexion){
        $email = strip_tags($email);
        $password = strip_tags($password);

        $requete = $connexion->prepare("
        SELECT email_utilisateurs, nom_utilisateurs, prenom_utilisateurs, id_roles FROM utilisateurs WHERE email_utilisateurs = :email AND password_utilisateurs = :password");

        $requete->bindParam(':email', $email);
        $requete->bindParam(':password', $password);

        $requete->execute();

        $resultat = $requete->fetchall();


        return $resultat;
    }


?>