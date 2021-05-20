<?php
    include('model/admin/categoriesManager.php');
	if ($_GET['categories'] == 'ajout') {
		
		ajouterCategorie(htmlspecialchars($_POST['nom']),$connexion);
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		$array = getCategories($connexion);
		
		$view = "view/admin/v_categories.php";
	}elseif ($_GET['categories'] == 'modifier') {
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		$array = getCategories($connexion);
		$libelle = getUneCategorie(htmlspecialchars($_GET['id']), $connexion);
		
		$view = "view/admin/v_categories.php";
	}elseif ($_GET['categories'] == 'confirmationmodifier') {
		modifierCategorie(htmlspecialchars($_GET['id']), htmlspecialchars($_POST['libelle']), $connexion);
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		$array = getCategories($connexion);

		$view = "view/admin/v_categories.php";
	}elseif ($_GET['categories'] == 'supprimer') {
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		$array = getCategories($connexion);
		$promos = getPromosCategorie(htmlspecialchars($_GET['id']), $connexion);

		if(count($promos) > 0){
			$messages = "Il existe des produits avec cette catégorie, veuillez les supprimer avant de supprimer cette catégorie.";
		}
		
		$view = "view/admin/v_categories.php";
	}elseif ($_GET['categories'] == 'confirmationsupprimer') {
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		supprimerCategorie(htmlspecialchars($_GET['id']),$connexion);
		$array = getCategories($connexion);
		
		$view = "view/admin/v_categories.php";
	}elseif($_GET['categories'] == 'accueil'){
		$view = "view/admin/v_categories.php";
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		$array = getCategories($connexion);

	}else{
        $view = "view/admin/v_accueilAdmin.php";
    }
		
?>