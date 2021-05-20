<?php
	try{
		session_start();
		include('model/data.php');
		$connexion = connexionBDD();

		
		//on vérifie si l'utilisateur se déconnecte
		if (isset($_GET['deconnexion'])) {
			//s'il se déconnecte, alors la session passe a déconnecté et il sera envoyé au controller de l'accueil
			if ($_GET['deconnexion'] == "ok") {
				$_SESSION["connecté"] = 'déconnecté';
				$_SESSION["id"] = '';
				$_SESSION["role"] = '';
				$controller = "controller/accueil/c_accueil.php";
			}
		}

		//si la variable session existe
		if (isset($_SESSION["connecté"])) {
			//on check d'abord s'il est connecté
			if ($_SESSION["connecté"] == 'connecté') {
				//on check le role de l'utilisateur connecté pour l'envoyé vers le bon controller
				if ($_SESSION["role"] == 'admin'){
					if (isset($_GET['clients'])) {
						$controller = "controller/admin/c_clients.php";
					}elseif(isset($_GET['promos'])){
						$controller = "controller/admin/c_promos.php";
					}elseif(isset($_GET['categories'])){
						$controller = "controller/admin/c_categories.php";
					}else{
						$controller = "controller/admin/c_accueilAdmin.php";
					}
				}else{
					$controller = "controller/accueil/c_accueil.php";
				}
			//si la session de l'utilisateur est "déconnecté", on l'envoi a l'accueil
			}elseif ($_SESSION["connecté"] == 'déconnecté'){
				$controller = "controller/accueil/c_accueil.php";
			}
		}
		
		//dans le cas où l'utilisateur vient tout juste d'arrivé, qu'aucune session n'a été lancé et 
		//qu'il n'a donc a aucun moment souhaité se connecter, il commence par l'accueil
		if (!isset($_GET['deconnexion']) && !isset($_SESSION["connecté"])) {
			$controller = "controller/accueil/c_accueil.php";
		}
		
		//gère les erreurs 403, 404 et 500
		if(isset($_GET['error'])){		
			$controller = "controller/error/c_error.php";			
		}
		

		include($controller);
		include($view);
	} catch(Exception $e){
		echo 'Exception reçue : ',  $e->getMessage(), "\n";
	}
?>