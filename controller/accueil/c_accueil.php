<?php

	include("model/accueil/accueilManager.php");
	//on récupére la liste des users afin de l'exploiter dans la fonction de vérification
	$users = getUsers($connexion);

	$view = "view/accueil/v_accueil.php";
	//on vérifie les log
	if (isset($_GET['connexion'])) {
		if ($_GET['connexion'] == "login") {
			verificationLogin(htmlspecialchars($_POST['login']),htmlspecialchars(md5($_POST['pswd'])),$users);
		}
	}

?>