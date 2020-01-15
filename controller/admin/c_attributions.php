<?php
    include('model/admin/attributionManager.php');
	if ($_GET['attributions'] == 'ajout') {
        $verif = verificationAttribution(htmlspecialchars($_POST['pc']), htmlspecialchars($_POST['utilisateur']), htmlspecialchars($_POST['date']), htmlspecialchars($_POST['time1']), htmlspecialchars($_POST['time2']), $connexion);

        if( empty($verif)){
            ajouterAttribution(htmlspecialchars($_POST['pc']), htmlspecialchars($_POST['utilisateur']), htmlspecialchars($_POST['date']), htmlspecialchars($_POST['time1']), htmlspecialchars($_POST['time2']), $connexion);
        }
        

		$view = "view/admin/v_attributions.php";
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
        $array = getAttributions($connexion);
        
        
	}elseif($_GET['attributions'] == 'confirmationsupprimer'){

        supprimerAttribution($_GET['pc'], $_GET['uti'], $_GET['date'], $_GET['time1'], $connexion);
        

        $view = "view/admin/v_attributions.php";
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
        $array = getAttributions($connexion);
        
    }elseif($_GET['attributions'] == 'accueil' || $_GET['attributions'] == 'supprimer'){
		$view = "view/admin/v_attributions.php";
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		$array = getAttributions($connexion);

	}else{
        $view = "view/admin/v_accueilAdmin.php";
    }
		
?>