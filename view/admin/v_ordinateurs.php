<?php
	include('view/header.php');
?>

            <!-- MAIN -->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Ordinateurs</h2>
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
                                            echo 		'<th>ID</th>' ;
                                            echo 		'<th>Nom du PC</th>' ;
                                            echo 	'</tr>';
                                            echo   '</thead>';
                                            echo '<tbody>';
                                    
                                            foreach ($array as $key => $value) {
                                                
                                                echo '<tr>';
                                                echo 	'<td>' .$value[0]. '</td>' ;
                                                echo 	'<td>' .$value[1]. '</td>' ;
                                                echo '</tr>';

                                            }
                                            echo '</tbody>';
                                            echo '</table>';
                                        }else{
                                            echo '<div style="text-align:center;">Il n\'y a aucun PC enregistré.</div>';
                                        }
                                    ?>

                                </div>
                                <!-- END DATA TABLE-->
                            </div>

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Ajouter un ordinateur</div>
                                    <div class="card-body card-block">
                                        <form action="index.php?ordinateurs=ajout" method="post" class="">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-desktop"></i>
                                                    </div>
                                                    <input type="text" id="nom" name="nom" placeholder="Nom du PC" class="form-control">
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