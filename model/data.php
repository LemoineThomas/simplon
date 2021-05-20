<?php

	function connexionBDD(){
		$serveur = "localhost";
		$login = "root";
		$pass = "";

		try{
			$connexion = new PDO("mysql:host=$serveur;dbname=promo", $login, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
			$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
		}

		catch(PDOException $e){
			echo 'Echec : ' .$e->getMessage();
		}

		return $connexion;
	}


	function getCategories($connexion){
        $requete = $connexion->prepare("
        SELECT * FROM categories");

        $requete->execute();

        $resultat = $requete->fetchall();


        return $resultat;
	}
	
	function getUtilisateurs($connexion){
        $requete = $connexion->prepare("
        SELECT * FROM clients");

        $requete->execute();

        $resultat = $requete->fetchall();


        return $resultat;
    }
?>