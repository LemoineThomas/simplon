<?php 
	
	if ($_GET['error'] == 404) {
		$view = "view/erreur/404.php";
	}elseif ($_GET['error'] == 403) {
		$view = "view/erreur/403.php";
	}elseif ($_GET['error'] == 500) {
		$view = "view/erreur/500.php";
	}else{
		$view = "view/accueil/v_accueil.php";
	}

 ?>