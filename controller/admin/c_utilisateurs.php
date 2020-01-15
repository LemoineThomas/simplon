<?php
    include('model/admin/utilisateurManager.php');
	if ($_GET['utilisateurs'] == 'ajout') {
		$view = "view/admin/v_utilisateur.php";
		
		ajouterUtilisateur(htmlspecialchars($_POST['nom']), htmlspecialchars($_POST['prenom']), htmlspecialchars($_POST['mail']), $connexion);
		
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
        $array = getUtilisateurs($connexion);
	}elseif($_GET['utilisateurs'] == 'accueil'){
		$view = "view/admin/v_utilisateur.php";
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		$array = getUtilisateurs($connexion);

	}else{
        $view = "view/admin/v_accueilAdmin.php";
    }
		
?>