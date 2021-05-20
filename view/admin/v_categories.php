<?php
	include('view/header.php');

    if($_GET['categories'] == 'supprimer'){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            if(!$messages){
                echo '<div class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: block; padding-right: 17px;" aria-hidden="true">';
                echo 	'<div class="modal-dialog" role="document">';
                echo 		'<div class="modal-content">';
                echo 			'<div class="modal-header">';
                echo 				'<h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>';
                echo 				'<a class="close" data-dismiss="modal" aria-label="Close" href="index.php?categories=accueil">';
                echo 					'<span aria-hidden="true">&times;</span>';
                echo 				'</a>';
                echo 			'</div>';
                echo 			'<div class="modal-body">Etes-vous sûr de vouloir supprimer cette catégorie ?';
                echo 			'</div>';
                echo 			'<div class="modal-footer">';
                echo 				'<a class="btn btn-secondary" data-dismiss="modal" href="index.php?categories=accueil">Non</a>';
                echo 				'<a type="button" class="btn btn-primary" href="index.php?categories=confirmationsupprimer&id='.$id.'">Oui</a>';
                echo 			'</div>';
                echo 		'</div>';
                echo 	'</div>';
                echo '</div>';
            }else{
                echo '<div class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: block; padding-right: 17px;" aria-hidden="true">';
                echo    '<div class="modal-dialog" role="document">';
                echo        '<div class="modal-content">';
                echo            '<div class="modal-header">';
                echo                '<h5 class="modal-title" id="exampleModalLabel">Oups</h5>';
                echo                '<a class="close" data-dismiss="modal" aria-label="Close" href="index.php?categories=accueil">';
                echo                    '<span aria-hidden="true">&times;</span>';
                echo                '</a>';
                echo            '</div>';
                echo            '<div class="modal-body">'. $messages . '</div>';
                echo            '<div class="modal-footer">';
                echo                '<a class="btn btn-primary" data-dismiss="modal" href="index.php?categories=accueil">Ok</a>';
                echo            '</div>';
                echo        '</div>';
                echo    '</div>';
                echo '</div>';
            }
        }
    }
    if($_GET['categories'] == 'modifier'){
        if(isset($_GET['id'])){
            $id = $_GET['id'];

            echo '<div class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: block; padding-right: 17px;" aria-hidden="true">';
            echo    '<div class="modal-dialog" role="document">';
            echo        '<div class="modal-content">';
            echo            '<div class="modal-header">';
            echo                '<h5 class="modal-title" id="exampleModalLabel">Modifier</h5>';
            echo                '<a class="close" data-dismiss="modal" aria-label="Close" href="index.php?categories=accueil">';
            echo                    '<span aria-hidden="true">&times;</span>';
            echo                '</a>';
            echo            '</div>';
            echo            '<div class="modal-body">';
            echo                '<form action="index.php?categories=confirmationmodifier&id='.$id.'" method="post" class="">';
            echo                    '<div class="form-group">';
            echo                        '<div class="input-group">';
            echo                             '<div class="input-group-addon">';
            echo                                  '<i class="fa fa-align-justify"></i>';
            echo                            '</div>';
            echo                            '<input type="text" id="nom" name="libelle" placeholder="Nom de la catégorie" maxlength="100" class="form-control" value="'.$libelle[0][0].'" required>';
            echo                        '</div>';
            echo                    '</div>';
            echo                    '<div class="form-actions form-group">';
            echo                        '<button type="submit" class="btn btn-success btn-sm">Modifier</button>';
            echo                        '<a class="btn btn-secondary btn-sm" data-dismiss="modal" href="index.php?categories=accueil">Annuler</a>';;
            echo                    '</div>';
            echo                '</form>';
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
                                    <h2 class="title-1">Catégories</h2>
                                </div>
                            </div>
                        </div>

                        <div class="row m-t-30">
                            <div class="col-md-6">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    
                                    <?php
                                        if (sizeof($array) > 0) {
                                            echo '<table class="table table-borderless table-data3">';
                                            echo   '<thead>';
                                            echo 	'<tr>';
                                            echo 		'<th>Catégories</th>' ;
                                            echo        '<th></th>';
                                            echo 	'</tr>';
                                            echo   '</thead>';
                                            echo '<tbody>';
                                    
                                            foreach ($array as $key => $value) {
                                                
                                                echo '<tr>';
                                                echo 	'<td>' .$value[1]. '</td>' ;
                                                echo    '<td><a href="index.php?categories=modifier&id='.$value[0].'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                                <path d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                              </svg></a>
                                                        <a href="index.php?categories=supprimer&id='.$value[0].'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                              </svg></a></td>';
                                                echo '</tr>';

                                            }
                                            echo '</tbody>';
                                            echo '</table>';
                                        }else{
                                            echo '<div style="text-align:center;">Il n\'y a aucune catégorie enregistré.</div>';
                                        }
                                    ?>

                                </div>
                                <!-- END DATA TABLE-->
                            </div>

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Ajouter une catégorie</div>
                                    <div class="card-body card-block">
                                        <form action="index.php?categories=ajout" method="post" class="">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-align-justify"></i>
                                                    </div>
                                                    <input type="text" id="nom" name="nom" placeholder="Nom de la catégorie" maxlength="100" class="form-control" required>
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