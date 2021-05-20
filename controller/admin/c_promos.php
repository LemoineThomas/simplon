<?php
    include('model/admin/promosManager.php');
	if ($_GET['promos'] == 'ajout') {
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
            
        }
        getPromos(htmlspecialchars($_POST['libelle']), htmlspecialchars($_POST['description']), htmlspecialchars($_POST['prixBase']), htmlspecialchars($_POST['prixPromo']), htmlspecialchars($_POST['date']), $base64, htmlspecialchars($_POST['client']), htmlspecialchars($_POST['categorie']), $connexion);
        

		$view = "view/admin/v_promos.php";
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
        $array = getPromos($connexion);
        $ordi = getCategories($connexion);
        $utili = getUtilisateurs($connexion);
        
        
	}elseif ($_GET['promos'] == 'modifier') {
        //on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
        $array = getPromos($connexion);
        $libelle = getUnePromo(htmlspecialchars($_GET['id']), $connexion);
        $ordi = getCategories($connexion);
        $utili = getUtilisateurs($connexion);
        
        $view = "view/admin/v_promos.php";
    }elseif ($_GET['promos'] == 'confirmationmodifier') {
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
        modifierPromo(htmlspecialchars($_GET['id']), htmlspecialchars($_POST['libelle']), htmlspecialchars($_POST['description']), htmlspecialchars($_POST['prixBase']), htmlspecialchars($_POST['prixPromo']), htmlspecialchars($_POST['date']), $base64, htmlspecialchars($_POST['client']), htmlspecialchars($_POST['categorie']), $connexion);
        //on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
        $array = getPromos($connexion);
        $ordi = getCategories($connexion);
        $utili = getUtilisateurs($connexion);

        $view = "view/admin/v_promos.php";
    }elseif($_GET['promos'] == 'confirmationsupprimer'){

        supprimerPromo($_GET['id'], $connexion);
        

        $view = "view/admin/v_promos.php";
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
        $array = getPromos($connexion);
        $ordi = getCategories($connexion);
        $utili = getUtilisateurs($connexion);
        
    }elseif($_GET['promos'] == 'accueil' || $_GET['promos'] == 'supprimer'){
		$view = "view/admin/v_promos.php";
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		$array = getPromos($connexion);
        $ordi = getCategories($connexion);
        $utili = getUtilisateurs($connexion);

	}else{
        $view = "view/admin/v_accueilAdmin.php";
    }
		
?>