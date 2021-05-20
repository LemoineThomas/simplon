<?php

	include("model/accueil/accueilManager.php");
	//on récupére la liste des users afin de l'exploiter dans la fonction de vérification

	$view = "view/accueil/v_accueil.php";
	//on vérifie les log
	if (isset($_GET['connexion'])) {
		if ($_GET['connexion'] == "login") {
			$user = getUser(htmlspecialchars($_POST['login']),htmlspecialchars($_POST['pswd']),$connexion);

			if(count($user) == 1){
				$_SESSION["connecté"] = 'connecté';
                $_SESSION["email"] = $user[0][0];
                $_SESSION["nom"] = $user[0][1];
                $_SESSION["prenom"] = $user[0][2];
                if($user[0][3] == 1){
                    $_SESSION["role"] = 'admin';
                }elseif($user[0][3] == 2){
                    $_SESSION["role"] = 'membre';
                }else{
                    $_SESSION["role"] = '';
                }
                header('Location: index.php');
            	exit();
			}else{
				header('Location: index.php?retour=KO');
            	exit();
			}
		}
	}

?>