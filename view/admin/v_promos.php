<?php
    include('view/header.php');
    
    if($_GET['promos'] == 'supprimer'){
        if(isset($_GET['id'])){
            $id = $_GET['id'];

            echo '<div class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: block; padding-right: 17px;" aria-hidden="true">';
            echo 	'<div class="modal-dialog" role="document">';
            echo 		'<div class="modal-content">';
            echo 			'<div class="modal-header">';
            echo 				'<h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>';
            echo 				'<a class="close" data-dismiss="modal" aria-label="Close" href="index.php?promos=accueil">';
            echo 					'<span aria-hidden="true">&times;</span>';
            echo 				'</a>';
            echo 			'</div>';
            echo 			'<div class="modal-body">Etes-vous sûr de bien vouloir supprimer cette attribution ?';
            echo 			'</div>';
            echo 			'<div class="modal-footer">';
            echo 				'<a class="btn btn-secondary" data-dismiss="modal" href="index.php?promos=accueil">Non</a>';
            echo 				'<a type="button" class="btn btn-primary" href="index.php?promos=confirmationsupprimer&id='.$id.'">Oui</a>';
            echo 			'</div>';
            echo 		'</div>';
            echo 	'</div>';
            echo '</div>';
        }
    }

    if($_GET['promos'] == 'modifier'){
        if(isset($_GET['id'])){
            $id = $_GET['id'];

            echo '<div class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: block; padding-right: 17px;" aria-hidden="true">';
            echo    '<div class="modal-dialog" role="document">';
            echo        '<div class="modal-content">';
            echo            '<div class="modal-header">';
            echo                '<h5 class="modal-title" id="exampleModalLabel">Modifier</h5>';
            echo                '<a class="close" data-dismiss="modal" aria-label="Close" href="index.php?promos=accueil">';
            echo                    '<span aria-hidden="true">&times;</span>';
            echo                '</a>';
            echo            '</div>';
            echo            '<div class="modal-body">';
            echo            '<form action="index.php?promos=confirmationmodifier&id='.$id.'" method="post" class=""  enctype="multipart/form-data">';
            echo                '<div class="form-group">';
            echo                    '<div class="input-group">';
            echo                        '<div class="input-group-addon">';
            echo                            '<i class="fa fa-align-justify"></i>';
            echo                        '</div>';
            echo                        '<select class="form-control" id="categorie" name="categorie">';
                                        foreach($ordi as $key => $value){
                                            echo '<option value="'. $value[0] .'">' . $value[1] . '</option>';
                                        }
            echo                        '</select>';
            echo                    '</div>';
            echo                '</div>';
            echo                '<div class="form-group">';
            echo                    '<div class="input-group">';
            echo                        '<div class="input-group-addon">';
            echo                            '<i class="fa fa-user"></i>';
            echo                        '</div>';
            echo                        '<select class="form-control" id="client" name="client">';
                                        foreach($utili as $key => $value){
                                            echo '<option value="'. $value[0] .'">' . $value[1] . '</option>';
                                        }
            echo                        '</select>';
            echo                    '</div>';
            echo                '</div>';
            echo                '<div class="form-group">';
            echo                    '<div class="input-group">';
            echo                        '<div class="input-group-addon">';
            echo                            '<i class="fa fa-calendar"></i>';
            echo                        '</div>';
            echo                        '<input class="form-control" type="date" placeholder="date" id="date" name="date" value="'.$libelle[0][4].'" required>';
            echo                    '</div>';
            echo                '</div>';
            echo                '<div class="form-group">';
            echo                    '<div class="input-group">';
            echo                        '<div class="input-group-addon">';
            echo                            '<i class="fa fa-eur"></i>';
            echo                        '</div>';
            echo                        '<input class="form-control" type="number" placeholder="prix de base" max="1000000000" id="prix1" name="prixBase" value="'.$libelle[0][3].'" required>';
            echo                    '</div>';
            echo                '</div>';
            echo                '<div class="form-group">';
            echo                    '<div class="input-group">';
            echo                        '<div class="input-group-addon">';
            echo                            '<i class="fa fa-eur"></i>';
            echo                        '</div>';
            echo                        '<input class="form-control" type="number" placeholder="prix en promo" max="1000000000" id="prix2" name="prixPromo" value="'.$libelle[0][2].'" required>';
            echo                    '</div>';
            echo                '</div>';
            echo                '<div class="form-group">';
            echo                    '<div class="input-group">';
            echo                        '<div class="input-group-addon">';
            echo                            '<i class="fa fa-align-justify"></i>';
            echo                        '</div>';
            echo                        '<input class="form-control" type="text" placeholder="libelle du produit" maxlength="100" id="libelle" name="libelle" value="'.$libelle[0][0].'" required>';
            echo                    '</div>';
            echo                '</div>';
            echo                '<div class="form-group">';
            echo                    '<div class="input-group">';
            echo                        '<div class="input-group-addon">';
            echo                            '<i class="fa fa-file-alt"></i>';
            echo                        '</div>';
            echo                        '<input class="form-control" type="text" placeholder="description du produit" maxlength="255" id="description" name="description" value="'.$libelle[0][1].'" required>';
            echo                    '</div>';
            echo               '</div>';
            echo                '<div class="form-group">';
            echo                    '<div class="input-group">';
            echo                        '<div class="input-group-addon">';
            echo                            '<i class="fa fa-image"></i>';
            echo                        '</div>';
            echo                        '<input type="file" id="image" name="image" class="form-control" required>';
            echo                    '</div>';
            echo                '</div>';
            echo                '<div class="form-actions form-group">';
            echo                    '<button type="submit" class="btn btn-success btn-sm">Modifier</button>';
            echo                    '<a class="btn btn-secondary btn-sm" data-dismiss="modal" href="index.php?promos=accueil">Annuler</a>';;
            echo                '</div>';
            echo            '</form>';
            echo            '</div>';
            echo        '</div>';
            echo    '</div>';
            echo '</div>';
        }
    }
?>

            
            <!-- MAIN -->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Promos</h2>
                                </div>
                            </div>
                        </div>

                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    
                                    <?php
                                        if (sizeof($array) > 0) {
                                            echo '<table class="table table-borderless table-data3">';
                                            echo   '<thead>';
                                            echo 	'<tr>';
                                            echo 		'<th>Categorie</th>' ;
                                            echo 		'<th>Client</th>' ;
                                            echo 		'<th>Libelle</th>' ;
                                            echo 		'<th>Prix de base</th>' ;
                                            echo 		'<th>Prix en promo</th>' ;
                                            echo        '<th>Date</th>' ;
                                            echo        '<th>Visuel</th>';
                                            echo 		'<th></th>' ;
                                            echo 	'</tr>';
                                            echo   '</thead>';
                                            echo '<tbody>';
                                    
                                            foreach ($array as $key => $value) {

                                                $pc = getUneCategorie($value[8], $connexion);
                                                $utilisateur = getUnUtilisateur($value[9], $connexion);
                                                
                                                echo '<tr>';
                                                foreach ($pc as $keys => $values) {
                                                    echo 	'<td>' . $values[0] . '</td>' ;
                                                }

                                                foreach ($utilisateur as $keyss => $valuess) {
                                                    echo 	'<td>' . $valuess[0] . '</td>' ;
                                                }

                                                echo 	'<td>' .$value[1]. '</td>' ;
                                                echo 	'<td>' .$value[4]. '€</td>' ;
                                                echo 	'<td>' .$value[3]. '€</td>' ;
                                                echo    '<td>' .$value[5]. '</td>' ;
                                                echo    '<td><img src="' .$value[6]. '" width="50px"/></td>' ;
                                                echo    '<td><a href="index.php?promos=modifier&id='.$value[0].'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                                <path d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                              </svg></a>
                                                            <a href="index.php?promos=supprimer&id='.$value[0].'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                              </svg></a></td>';
                                                echo '</tr>';

                                            }
                                            echo '</tbody>';
                                            echo '</table>';
                                        }else{
                                            echo '<div style="text-align:center;">Il n\'y a aucun produit actuellement.</div>';
                                        }
                                    ?>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>


                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Ajouter un produit</div>
                                    <div class="card-body card-block">
                                        <form action="index.php?promos=ajout" method="post" class="" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-align-justify"></i>
                                                    </div>
                                                    <select class="form-control" id="categorie" name="categorie">
                                                    <?php
                                                        foreach($ordi as $key => $value){
                                                            echo '<option value="'. $value[0] .'">' . $value[1] . '</option>';
                                                        }
                                                    ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <select class="form-control" id="client" name="client">
                                                    <?php
                                                        foreach($utili as $key => $value){
                                                            echo '<option value="'. $value[0] .'">' . $value[1] . '</option>';
                                                        }
                                                    ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input class="form-control" type="date" placeholder="date" id="date" name="date" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-eur"></i>
                                                    </div>
                                                    <input class="form-control" type="number" placeholder="prix de base" max="1000000000" id="prix1" name="prixBase" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-eur"></i>
                                                    </div>
                                                    <input class="form-control" type="number" placeholder="prix en promo" max="1000000000" id="prix2" name="prixPromo" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-align-justify"></i>
                                                    </div>
                                                    <input class="form-control" type="text" placeholder="libelle du produit" maxlength="100" id="libelle" name="libelle" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-file-alt"></i>
                                                    </div>
                                                    <input class="form-control" type="text" placeholder="description du produit" maxlength="255" id="description" name="description" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-image"></i>
                                                    </div>
                                                    <input type="file" id="image" name="image" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success btn-sm">Ajouter</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>



<?php
	include('view/footer.php');
?>