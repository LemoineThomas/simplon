<?php
    include('model/admin/clientsManager.php');
	if ($_GET['clients'] == 'ajout') {
		$view = "view/admin/v_clients.php";
		
		if(isset($_FILES['image']))
		{
			$file_name =$_FILES['image']['name'];
			$file_ext = explode('.',$file_name);
			$file_ext = strtolower( end($file_ext));


			$file_size=$_FILES['image']['size'];
			$file_tmp= $_FILES['image']['tmp_name'];

			$type = pathinfo($file_tmp, PATHINFO_EXTENSION);
			$data = file_get_contents($file_tmp);
			$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
			
		}else{
			$base64 = "";
		}

		ajouterClients(htmlspecialchars($_POST['nom']), htmlspecialchars($_POST['description']), $base64, $connexion);
		
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
        $array = getUtilisateurs($connexion);
	}elseif ($_GET['clients'] == 'modifier') {
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		$array = getUtilisateurs($connexion);
		$libelle = getUnClient(htmlspecialchars($_GET['id']), $connexion);
		
		$view = "view/admin/v_clients.php";
	}elseif ($_GET['clients'] == 'confirmationmodifier') {
		if(isset($_FILES['image']))
		{
			$file_name =$_FILES['image']['name'];
			$file_ext = explode('.',$file_name);
			$file_ext = strtolower( end($file_ext));


			$file_size=$_FILES['image']['size'];
			$file_tmp= $_FILES['image']['tmp_name'];

			$type = pathinfo($file_tmp, PATHINFO_EXTENSION);
			$data = file_get_contents($file_tmp);
			$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
			
		}else{
			$base64 = "";
		}

		modifierClient(htmlspecialchars($_GET['id']), htmlspecialchars($_POST['libelle']), htmlspecialchars($_POST['description']), $base64, $connexion);
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		$array = getUtilisateurs($connexion);

		$view = "view/admin/v_clients.php";
	}elseif($_GET['clients'] == 'supprimer'){
		
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		$array = getUtilisateurs($connexion);
		$promos = getPromosClient(htmlspecialchars($_GET['id']), $connexion);

		if(count($promos) > 0){
			$messages = "Il existe des produits avec ce client, veuillez les supprimer avant de supprimer ce client.";
		}

		$view = "view/admin/v_clients.php";

	}elseif($_GET['clients'] == 'confirmationsupprimer'){
		supprimerClient($_GET['id'],$connexion);
		
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		$array = getUtilisateurs($connexion);

		$view = "view/admin/v_clients.php";

	}elseif($_GET['clients'] == 'accueil'){
		$view = "view/admin/v_clients.php";
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		$array = getUtilisateurs($connexion);

	}else{
        $view = "view/admin/v_accueilAdmin.php";
    }
		
?>