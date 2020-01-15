<?php
    include('model/admin/ordinateurManager.php');
	if ($_GET['ordinateurs'] == 'ajout') {
		
		ajouterOrdinateur(htmlspecialchars($_POST['nom']),$connexion);
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		$array = getOrdinateurs($connexion);
		
		$view = "view/admin/v_ordinateurs.php";
	}elseif($_GET['ordinateurs'] == 'accueil'){
		$view = "view/admin/v_ordinateurs.php";
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		$array = getOrdinateurs($connexion);

	}else{
        $view = "view/admin/v_accueilAdmin.php";
    }
		
?>