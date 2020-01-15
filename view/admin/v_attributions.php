<?php
    include('view/header.php');
    
    if($_GET['attributions'] == 'supprimer'){
        if(isset($_GET['pc']) && isset($_GET['uti'])){
            $pc = $_GET['pc'];
            $uti = $_GET['uti'];
            $date = $_GET['date'];
            $time1 = $_GET['time1'];

            echo '<div class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: block; padding-right: 17px;" aria-hidden="true">';
            echo 	'<div class="modal-dialog" role="document">';
            echo 		'<div class="modal-content">';
            echo 			'<div class="modal-header">';
            echo 				'<h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>';
            echo 				'<a class="close" data-dismiss="modal" aria-label="Close" href="index.php?attributions=accueil">';
            echo 					'<span aria-hidden="true">&times;</span>';
            echo 				'</a>';
            echo 			'</div>';
            echo 			'<div class="modal-body">Etes-vous sûr de bien vouloir supprimer cette attribution ?';
            echo 			'</div>';
            echo 			'<div class="modal-footer">';
            echo 				'<a class="btn btn-secondary" data-dismiss="modal" href="index.php?attributions=accueil">Non</a>';
            echo 				'<a type="button" class="btn btn-primary" href="index.php?attributions=confirmationsupprimer&pc='.$pc.'&uti='.$uti. '&date='. $date .'&time1=' . $time1 . '">Oui</a>';
            echo 			'</div>';
            echo 		'</div>';
            echo 	'</div>';
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
                                    <h2 class="title-1">Attributions</h2>
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
                                            echo 		'<th>PC</th>' ;
                                            echo 		'<th>Utilisateur</th>' ;
                                            echo 		'<th>Jour</th>' ;
                                            echo 		'<th>Début</th>' ;
                                            echo 		'<th>Fin</th>' ;
                                            echo 		'<th>Retirer</th>' ;
                                            echo 	'</tr>';
                                            echo   '</thead>';
                                            echo '<tbody>';
                                    
                                            foreach ($array as $key => $value) {

                                                $pc = getUnOrdinateur($value[0], $connexion);
                                                $utilisateur = getUnUtilisateur($value[1], $connexion);
                                                
                                                echo '<tr>';
                                                foreach ($pc as $keys => $values) {
                                                    echo 	'<td>' . $values[0] . '</td>' ;
                                                }

                                                foreach ($utilisateur as $keyss => $valuess) {
                                                    echo 	'<td>' . $valuess[0] . ' ' . $valuess[1] . '</td>' ;
                                                }

                                                echo 	'<td>' .$value[2]. '</td>' ;
                                                echo 	'<td>' .$value[3]. '</td>' ;
                                                echo 	'<td>' .$value[4]. '</td>' ;
                                                echo 	'<td><a type="button" class="btn btn-warning" href="index.php?attributions=supprimer&pc='.$value[0].'&uti='.$value[1].'&date='. $value[2] .'&time1=' . $value[3] . '">
                                                            Retirer</a>
                                                        </td>' ;
                                                echo '</tr>';

                                            }
                                            echo '</tbody>';
                                            echo '</table>';
                                        }else{
                                            echo '<div style="text-align:center;">Il n\'y a aucune attribution actuellement.</div>';
                                        }
                                    ?>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>

                            <?php

                                $ordi = getOrdinateurs($connexion);
                                $utili = getUtilisateurs($connexion);
                            ?>

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Ajouter une attribution</div>
                                    <div class="card-body card-block">
                                        <form action="index.php?attributions=ajout" method="post" class="">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-desktop"></i>
                                                    </div>
                                                    <select class="form-control" id="pc" name="pc">
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
                                                    <select class="form-control" id="utilisateur" name="utilisateur">
                                                    <?php
                                                        foreach($utili as $key => $value){
                                                            echo '<option value="'. $value[0] .'">' . $value[1] . ' ' . $value[2] . '</option>';
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
                                                        <i class="fa fa-clock"></i>
                                                    </div>
                                                    <input class="form-control" type="time" min="08:00" max="17:00" placeholder="heure de début" id="time1" name="time1" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-clock"></i>
                                                    </div>
                                                    <input class="form-control" type="time" min="08:00" max="17:00" placeholder="heure de fin" id="time2" name="time2" required>
                                                </div>
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>



<?php
	include('view/footer.php');
?>