	
<?php require('traitement/traitement.php'); ?>

<!DOCTYPE html PUBLIC "-//WC3//DTD XHTML 1.0 Strict// EN" "http://www.w3.org/TR/xhtml1/DTDxhtml1-strict.dtd">

<html xmlns="http://w3.org/1999/xhtml" xml:lang="fr" lang="fr" >

<head>


	<title> UNICEF | SUIVI DES EQUIPEMENTS ET INTRANTS</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=divice-width, initial-scale=1">

	<link rel="stylesheet" href="css/bootstrap.css" />
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="fontawesome/css/fontawesome-all.css" rel="stylesheet">
	<link rel="stylesheet" media="screen" href="css/styles.css"/>
	<link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.10.16/css/dataTables.bootstrap.min.css"/>
 

	<script src="js/sweetalert.min.js"></script>
	<script src="js/classie.js"></script>
  	<script src="js/jquery-3.3.1.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
	<script src="DataTables/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="DataTables/DataTables-1.10.16/js/dataTables.bootstrap.min.js"></script>

</head>


<body >

<!-- PAGE CONTENT --> 

    <div id="container">

    	<div id="ligne" class="row">
    		<div class="col-md-3"> <img src="images/unicef.gif"> </div>
    		<div id="title" class="col-md-6"> <label id="titre" class="label label-primary label-lg"> <b> SECTION SUIVI ET DEVELOPPEMENT DE L'ENFANT </b> </label>    </div>
    		<div class="col-md-3"> <img src="images/unicef.gif"> </div>

    	</div> <br> <br> 


    	<!-- ***************************************** -->

<div class="container-fluid">

  <div class="row content">

    <div class="col-md-2 sidenav">
      <h4>Suivi des équipements &amp; Intrants</h4>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="index.php"><b>Accueil</b></a></li>
        <li><a href="Lisez.php"><b>Lisez moi</b></a></li>
        <li class="active"><a href="elementaire.php"><b>Elémentaires</b></a></li>
        <li><a href="base.php"><b>Base de données &amp; saisie</b></a></li>
        <li><a href="actualiser.php"><b>Actualisation</b></a></li>
        <li><a href="synthese.php"><b>Synthèse</b></a></li>
        <li><a href="reporting.php"><b>Reporting</b></a></li>
      </ul><br>
      
    </div>


    <div class="col-sm-10">

      <div class="col-md-9 col-md-offset-1 text-center">

      <h4><b>Enrégistrements élémentaires</b></h4>
            <div id="element" class="panel-group">

            <!-- ************************************************ Natures ******************************************** -->

                <div class="panel panel-info">
                    <div class="panel-heading text-center panel-info"> <a class="panel-title" data-toggle="collapse" data-parent="#element" href="#nature">Nature des équipements </a> </div>
                        
                     <div id="nature" class="panel-collapse collapse">
                        <div class="panel-body">

                        <form method="post"> <?php echo $msg_save_nature; ?>
                            <div class="row">
                                <div class="col-md-12 text-center"> 
                                	<span class="input input--jiro">
										<input class="input__field input__field--jiro" type="text" id="input-10" name="nature" required />
										<label class="input__label input__label--jiro" for="input-10">
											<span style="font-size: 16px;" class="input__label-content input__label-content--jiro">Nature</span>
										</label>
									</span> <br><button type="submit" class="btn btn-success" name="save_nature"> Enrégistré</button>
									
                            	</div>
                        	</div> <hr> <br>
                        </form>

                            <!-- tableau d'affichage -->

                            <div class="row">
  <div class="col-md-12">
  <table class="table table-bordered table-striped table-hover table-condensed table-responsive data_table">
    <thead>
        <tr>
              <th style="width: 2%;"></th>
              <th class="text-center" ><strong>Nature</strong></th>
              <th style="width: 30%;" class="text-center"><strong>Actions</strong></th>
        </tr>
    </thead>
    <tbody> <?php while($natu = mysqli_fetch_assoc($nat)){ ?>
        <tr> 
            <td style="width: 2%;"><?php echo $natu['num']; ?></td>
            <td class="text-center"> <?php echo $natu['nature']; ?> </td>
            <td style="width: 30%;" class="text-center"><a data-toggle="modal" data-target="#mnatu<?php echo $natu['num']; ?>" class="btn btn-primary btn-md fa fa-edit"> Modifier</a> <a data-toggle="modal" data-target="#snatu<?php echo $natu['num']; ?>" class="btn btn-danger btn-md fa fa-trash"> Supprimer</a> 

<!-- modal pour modifier -->

<div id="mnatu<?php echo $natu['num']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modifier Nature</h4>
      </div>
      
      <?php echo $msg_modif_nature; ?>

		      <div class="modal-body">
		      
			     <div > 
       		 <form method="post">
			        <div class="row"> 
				          <input type="hidden" name="mnumnat" value="<?php echo $natu['num']; ?>">
				    	<div class="col-md-12 text-center"> <input style="width: 60%;" class="form-control" type="text" name="mnature" value="<?php echo $natu['nature']; ?>" required></div> 
			  		</div> <br>

		 	 	</div>

		      </div>

		    <div class="modal-footer">
		            <button class="btn btn-danger" type="button" data-dismiss="modal">Fermer</button> 
		            <button class="btn btn-success" type="submit" name="modif_nature">Valider</button> 
		    </div>
        
        </form>

    </div>

  </div>
</div> <!-- fin de la modification -->

<!-- modal pour supression -->

		<div id="snatu<?php echo $natu['num']; ?>" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		        <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Suppression de nature</h4>
		      </div>

				<?php echo $msg_supp_nature; ?>

		      <form method="post">

		      <div class="modal-body">
		        <input type="hidden" name="snumnat" value="<?php echo $natu['num']; ?>">
		        <i style="color: #ff3333;" class="fa fa-exclamation-triangle"> </i> <br> <br>
		        <p> Voulez-vous vraiment supprimer la nature <b><?php echo $natu['nature']; ?></b> </p>
		      </div>

		        <div class="modal-footer">
		         <button type="submit" name="supp_nature" class="btn btn-danger fa fa-trash"> Oui</button>
		         <button type="button" class="btn btn-success fa fa-check" data-dismiss="modal"> Non</button>
		      </div>

		      </form>

		    </div> 
		  </div>
		</div> <!-- fin de la supression -->

</td>
    </tr> <?php } ?>

          </tbody> 
</table>  



</div> </div> <!-- fin row et col du tableau -->

                            
                </div> <!-- fin panel body -->

              </div> <!-- fin panel avant panel body -->

            </div> <!-- fin panel default 1 -->

            <!-- ************************************************ Désignation ******************************************** -->

                <div class="panel panel-info">
                    <div class="panel-heading text-center panel-info"> <a class="panel-title" data-toggle="collapse" data-parent="#element" href="#designation">Les désignations </a> </div>
                        
                     <div id="designation" class="panel-collapse collapse">
                        <div class="panel-body">

                        <form method="post"> <?php echo $msg_save_design; ?>
                            <div class="row">
                                <div class="col-md-12 text-center"> 
                                	<span class="input input--jiro">
										<input class="input__field input__field--jiro" type="text" id="input-10" name="design" required />
										<label class="input__label input__label--jiro" for="input-10">
											<span style="font-size: 16px;" class="input__label-content input__label-content--jiro">Désignation</span>
										</label>
									</span> <br><button type="submit" class="btn btn-success" name="save_designation"> Enrégistré</button>
									
                            	</div>
                        	</div> <hr> <br>
                        </form>

                            <!-- tableau d'affichage -->

                            <div class="row">
  <div class="col-md-12">
  <table class="table table-bordered table-striped table-hover table-condensed table-responsive data_table">
    <thead>
        <tr>
              <th style="width: 2%;"></th>
              <th class="text-center" ><strong>Désignation</strong></th>
              <th style="width: 30%;" class="text-center"><strong>Actions</strong></th>
        </tr>
    </thead>
    <tbody> <?php while($design = mysqli_fetch_assoc($designa)){ ?>
        <tr> 
            <td style="width: 2%;"><?php echo $design['numdesign']; ?></td>
            <td class="text-center"> <?php echo $design['designation']; ?> </td>
            <td style="width: 30%;" class="text-center"><a data-toggle="modal" data-target="#mdesigna<?php echo $design['numdesign']; ?>" class="btn btn-primary btn-md fa fa-edit"> Modifier</a> <a data-toggle="modal" data-target="#sdesigna<?php echo $design['numdesign']; ?>" class="btn btn-danger btn-md fa fa-trash"> Supprimer</a> 

<!-- modal pour modifier -->

<div id="mdesigna<?php echo $design['numdesign']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modifier Désignation</h4>
      </div>
      
      <?php echo $msg_modif_design; ?>

		      <div class="modal-body">
		      
			     <div > 
       		 <form method="post">
			        <div class="row"> 
				         <input type="hidden" name="mnumdesign" value="<?php echo $design['numdesign']; ?>">
				    	 <div class="col-md-12 col-md-offset-2"> <input style="width: 60%;" class="form-control" type="text" name="mdesign" value="<?php echo $design['designation']; ?>" required></div> 
			  		</div> <br>

		 	 	</div>

		      </div>

		    <div class="modal-footer">
		            <button class="btn btn-danger" type="button" data-dismiss="modal">Fermer</button> 
		            <button class="btn btn-success" type="submit" name="modif_designation">Valider</button> 
		    </div>
        
        </form>

    </div>

  </div>
</div> <!-- fin de la modification -->

<!-- modal pour supression -->

		<div id="sdesigna<?php echo $design['numdesign']; ?>" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		        <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Suppression de désignation</h4>
		      </div>

				<?php echo $msg_supp_design; ?>

		      <form method="post">

		      <div class="modal-body">
		        <input type="hidden" name="snumdesign" value="<?php echo $design['numdesign']; ?>">
		        <i style="color: #ff3333;" class="fa fa-exclamation-triangle" id="tri"> </i> <br> <br>
		        <p> Voulez-vous vraiment supprimer la désignation <b><?php echo $design['designation']; ?></b> </p>
		      </div>

		        <div class="modal-footer">
		         <button type="submit" name="supp_designation" class="btn btn-danger fa fa-trash"> Oui</button>
		         <button type="button" class="btn btn-success fa fa-check" data-dismiss="modal"> Non</button>
		      </div>

		      </form>

		    </div> 
		  </div>
		</div> <!-- fin de la supression -->

</td>
    </tr> <?php } ?>

          </tbody> 
</table>  



</div> </div> <!-- fin row et col du tableau -->

                            
                </div> <!-- fin panel body -->

              </div> <!-- fin panel avant panel body -->

            </div> <!-- fin panel default 1 -->

            <!-- ************************************************ Caractéristiques ******************************************** -->

                <div class="panel panel-info">
                    <div class="panel-heading text-center"> <a class="panel-title" data-toggle="collapse" data-parent="#element" href="#caract">Les caractéristiques</a> </div>
                        
                     <div id="caract" class="panel-collapse collapse">
                        <div class="panel-body">

                        <form method="post"> <?php echo $msg_save_caract; ?>
                            <div class="row">
                                <div class="col-md-12 text-center"> 
                                	<span class="input input--jiro">
										<input class="input__field input__field--jiro" type="text" id="input-10" name="caract" required/>
										<label class="input__label input__label--jiro" for="input-10">
											<span style="font-size: 16px;" class="input__label-content input__label-content--jiro">Caractéristique</span>
										</label>
									</span> <br><button type="submit" class="btn btn-success" name="save_carateristique"> Enrégistré</button>
									
								</div>
                            </div> <hr><br>
                        </form>

                            <!-- tableau d'affichage -->

                            <div class="row">
  <div class="col-md-12">
  <table class="table table-bordered table-striped table-hover table-condensed table-responsive data_table">
    <thead>
        <tr>
              <th style="width: 2%;"></th>
              <th class="text-center" ><strong>Caractéristique</strong></th>
              <th style="width: 30%;" class="text-center"><strong>Actions</strong></th>
        </tr>
    </thead>
    <tbody> <?php while($caract = mysqli_fetch_assoc($caracte)){ ?>
        <tr> 
            <td style="width: 2%;"><?php echo $caract['num']; ?></td>
            <td class="text-center"> <?php echo $caract['caracteristique']; ?> </td>
            <td style="width: 30%;" class="text-center"><a data-toggle="modal" data-target="#mcaract<?php echo $caract['num']; ?>" class="btn btn-primary btn-md fa fa-edit"> Modifier</a> <a data-toggle="modal" data-target="#scaract<?php echo $caract['num']; ?>" class="btn btn-danger btn-md fa fa-trash"> Supprimer</a> 

<!-- modal pour modifier -->

<div id="mcaract<?php echo $caract['num']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modifier caracteristique</h4>
      </div>
      
      <?php echo $msg_modif_caract; ?>

		      <div class="modal-body">
		      
			     <div > 
       		 <form method="post">
			        <div class="row"> 
				          <input type="hidden" name="mnumcaract" value="<?php echo $caract['num']; ?>">
				    	<div class="col-md-12 text-center"> <input style="width: 60%;" class="form-control" type="text" name="mcaract" value="<?php echo $caract['caracteristique']; ?>" required></div> 
			  		</div> <br>

		 	 	</div>

		      </div>

		    <div class="modal-footer">
		            <button class="btn btn-danger" type="button" data-dismiss="modal">Fermer</button> 
		            <button class="btn btn-success" type="submit" name="modif_caracteristique">Valider</button> 
		    </div>
        
        </form>

    </div>

  </div>
</div> <!-- fin de la modification -->

<!-- modal pour supression -->

		<div id="scaract<?php echo $caract['num']; ?>" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		        <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Suppression de caractéristique</h4>
		      </div>

				<?php echo $msg_supp_caract; ?>

		      <form method="post">

		      <div class="modal-body">
		        <input type="hidden" name="snumcaract" value="<?php echo $caract['num']; ?>">
		        <i style="color: #ff3333;" class="fa fa-exclamation-triangle" id="tri"> </i> <br> <br>
		        <p> Voulez-vous vraiment supprimer la caractéristique <b><?php echo $caract['caracteristique']; ?></b> </p>
		      </div>

		        <div class="modal-footer">
		         <button type="submit" name="supp_caracteristique" class="btn btn-danger fa fa-trash"> Oui</button>
		         <button type="button" class="btn btn-success fa fa-check" data-dismiss="modal"> Non</button>
		      </div>

		      </form>

		    </div> 
		  </div>
		</div> <!-- fin de la supression -->

</td>
    </tr> <?php } ?>

          </tbody> 
</table>  

</div> </div> <!-- fin row et col du tableau -->
                       
                       </div> <!-- fin panel body -->

              </div> <!-- fin panel avant panel body -->

            </div> <!-- fin panel default 3 -->

            <!-- ************************************************ Structures Bénéficiaires ******************************************** -->

                <div class="panel panel-info">
                    <div class="panel-heading text-center"> <a class="panel-title" data-toggle="collapse" data-parent="#element" href="#benef">Les structures bénéficiaires</a> </div>
                        
                     <div id="benef" class="panel-collapse collapse">
                        <div class="panel-body">

                        <form method="post"> <?php echo $msg_save_benef; ?>
                            <div class="row">
                                <div class="col-md-12 text-center"> 
                                	<span class="input input--jiro">
										<input class="input__field input__field--jiro" type="text" id="input-10" name="benef" required/>
										<label class="input__label input__label--jiro" for="input-10">
											<span style="font-size: 16px;" class="input__label-content input__label-content--jiro">Bénéficiaire</span>
										</label>
									</span> <br><button type="submit" class="btn btn-success" name="save_beneficiaire"> Enrégistré</button>
									
								</div>
                            </div> <hr><br>
                        </form>

                        <!-- tableau d'affichage -->

                            <div class="row">
  <div class="col-md-12">
  <table class="table table-bordered table-striped table-hover table-condensed table-responsive data_table">
    <thead>
        <tr>
              <th style="width: 2%;"></th>
              <th class="text-center" ><strong>Structure bénéficiaire</strong></th>
              <th style="width: 30%;" class="text-center"><strong>Actions</strong></th>
        </tr>
    </thead>
    <tbody> <?php while($benef = mysqli_fetch_assoc($benefi)){ ?>
        <tr> 
            <td style="width: 2%;"><?php echo $benef['num']; ?></td>
            <td class="text-center"> <?php echo $benef['beneficiaire']; ?> </td>
            <td style="width: 30%;" class="text-center"><a data-toggle="modal" data-target="#mbenef<?php echo $benef['num']; ?>" class="btn btn-primary btn-md fa fa-edit"> Modifier</a> <a data-toggle="modal" data-target="#sbenef<?php echo $benef['num']; ?>" class="btn btn-danger btn-md fa fa-trash"> Supprimer</a> 

<!-- modal pour modifier -->

<div id="mbenef<?php echo $benef['num']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modifier bénéficiaire</h4>
      </div>
      
      <?php echo $msg_modif_benef; ?>

		      <div class="modal-body">
		      
			     <div > 
       		 <form method="post">
			        <div class="row"> 
				          <input type="hidden" name="mnumbenef" value="<?php echo $benef['num']; ?>">
				    	<div class="col-md-12 text-center"> <input style="width: 60%;" class="form-control" type="text" name="mbenef" value="<?php echo $benef['beneficiaire']; ?>" required></div> 
			  		</div> <br>

		 	 	</div>

		      </div>

		    <div class="modal-footer">
		            <button class="btn btn-danger" type="button" data-dismiss="modal">Fermer</button> 
		            <button class="btn btn-success" type="submit" name="modif_beneficiaire">Valider</button> 
		    </div>
        
        </form>

    </div>

  </div>
</div> <!-- fin de la modification -->

<!-- modal pour supression -->

		<div id="sbenef<?php echo $benef['num']; ?>" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		        <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Suppression de bénéficiaire</h4>
		      </div>

				<?php echo $msg_supp_benef; ?>

		      <form method="post">

		      <div class="modal-body">
		        <input type="hidden" name="snumbenef" value="<?php echo $benef['num']; ?>">
		        <i style="color: #ff3333;" class="fa fa-exclamation-triangle" id="tri"> </i> <br> <br>
		        <p> Voulez-vous vraiment supprimer la bénéficiaire <b><?php echo $benef['beneficiaire']; ?></b> </p>
		      </div>

		        <div class="modal-footer">
		         <button type="submit" name="supp_beneficiaire" class="btn btn-danger fa fa-trash"> Oui</button>
		         <button type="button" class="btn btn-success fa fa-check" data-dismiss="modal"> Non</button>
		      </div>

		      </form>

		    </div> 
		  </div>
		</div> <!-- fin de la supression -->

</td>
    </tr> <?php } ?>

          </tbody> 
</table>  

</div> </div> <!-- fin row et col du tableau -->

                       </div> <!-- fin panel body -->

              </div> <!-- fin panel avant panel body -->

            </div> <!-- fin panel default 4 -->

            <!-- ************************************************ Zones sanitaire ******************************************** -->

                <div class="panel panel-info">
                    <div class="panel-heading text-center"> <a class="panel-title" data-toggle="collapse" data-parent="#element" href="#sanitaire">Les zones sanitaires </a> </div>
                        
                     <div id="sanitaire" class="panel-collapse collapse">
                        <div class="panel-body">

                        <form method="post"> <?php echo $msg_save_zone; ?>
                            <div class="row">
                                <div class="col-md-12 text-center"> 
                                	<span class="input input--jiro">
										<input class="input__field input__field--jiro" type="text" id="input-10" name="zone" required/>
										<label class="input__label input__label--jiro" for="input-10">
											<span style="font-size: 16px;" class="input__label-content input__label-content--jiro">Zone sanitaire</span>
										</label>
									</span> <br><button type="submit" class="btn btn-success" name="save_zone"> Enrégistré</button>
									
								</div>
                            </div> <hr><br>
                        </form>

                         <!-- tableau d'affichage -->

                            <div class="row">
  <div class="col-md-12">
  <table class="table table-bordered table-striped table-hover table-condensed table-responsive data_table">
    <thead>
        <tr>
              <th style="width: 2%;"></th>
              <th class="text-center" ><strong>Zone sanitaire</strong></th>
              <th style="width: 30%;" class="text-center"><strong>Actions</strong></th>
        </tr>
    </thead>
    <tbody> <?php while($zone = mysqli_fetch_assoc($zones)){ ?>
        <tr> 
            <td style="width: 2%;"><?php echo $zone['num']; ?></td>
            <td class="text-center"> <?php echo $zone['zone_sanitaire']; ?> </td>
            <td style="width: 30%;" class="text-center"><a data-toggle="modal" data-target="#mzone<?php echo $zone['num']; ?>" class="btn btn-primary btn-md fa fa-edit"> Modifier</a> <a data-toggle="modal" data-target="#szone<?php echo $zone['num']; ?>" class="btn btn-danger btn-md fa fa-trash"> Supprimer</a> 

<!-- modal pour modifier -->

<div id="mzone<?php echo $zone['num']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modifier zone sanitaire</h4>
      </div>
      
      <?php echo $msg_modif_zone; ?>

		      <div class="modal-body">
		      
			     <div > 
       		 <form method="post">
			        <div class="row"> 
				          <input type="hidden" name="mnumzone" value="<?php echo $zone['num']; ?>">
				    	<div class="col-md-12 text-center"> <input style="width: 60%;" class="form-control" type="text" name="mzone" value="<?php echo $zone['zone_sanitaire']; ?>" required></div> 
			  		</div> <br>

		 	 	</div>

		      </div>

		    <div class="modal-footer">
		            <button class="btn btn-danger" type="button" data-dismiss="modal">Fermer</button> 
		            <button class="btn btn-success" type="submit" name="modif_zone">Valider</button> 
		    </div>
        
        </form>

    </div>

  </div>
</div> <!-- fin de la modification -->

<!-- modal pour supression -->

		<div id="szone<?php echo $zone['num']; ?>" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		        <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Suppression de zone sanitaire</h4>
		      </div>

				<?php echo $msg_supp_zone; ?>

		      <form method="post">

		      <div class="modal-body">
		        <input type="hidden" name="snumzone" value="<?php echo $zone['num']; ?>">
		        <i style="color: #ff3333;" class="fa fa-exclamation-triangle" id="tri"> </i> <br> <br>
		        <p> Voulez-vous vraiment supprimer la zone sanitaire <b><?php echo $zone['zone_sanitaire']; ?></b> </p>
		      </div>

		        <div class="modal-footer">
		         <button type="submit" name="supp_zone" class="btn btn-danger fa fa-trash"> Oui</button>
		         <button type="button" class="btn btn-success fa fa-check" data-dismiss="modal"> Non</button>
		      </div>

		      </form>

		    </div> 
		  </div>
		</div> <!-- fin de la supression -->

</td>
    </tr> <?php } ?>

          </tbody> 
</table>  

</div> </div> <!-- fin row et col du tableau -->

                      </div> <!-- fin panel body -->

              </div> <!-- fin panel avant panel body -->

            </div> <!-- fin panel default 5 -->

            <!-- ************************************************ Départements ******************************************** -->

                <div class="panel panel-info">
                    <div class="panel-heading text-center"> <a class="panel-title" data-toggle="collapse" data-parent="#element" href="#depart">Les départements</a> </div>
                        
                     <div id="depart" class="panel-collapse collapse">
                        <div class="panel-body">

                        <form method="post"> <?php echo $msg_save_depart; ?>
                            <div class="row">
                                <div class="col-md-12 text-center"> 
                                	<span class="input input--jiro">
										<input class="input__field input__field--jiro" type="text" id="input-10" name="depart" required />
										<label class="input__label input__label--jiro" for="input-10">
											<span style="font-size: 16px;" class="input__label-content input__label-content--jiro">Département</span>
										</label>
									</span> <br><button type="submit" class="btn btn-success" name="save_depart"> Enrégistré</button>
									
								</div>
                            </div> <hr><br>
                        </form>

                        <!-- tableau d'affichage -->

                            <div class="row">
  <div class="col-md-12">
  <table class="table table-bordered table-striped table-hover table-condensed table-responsive data_table">
    <thead>
        <tr>
              <th style="width: 2%;"></th>
              <th class="text-center" ><strong>Département</strong></th>
              <th style="width: 30%;" class="text-center"><strong>Actions</strong></th>
        </tr>
    </thead>
    <tbody> <?php while($depart = mysqli_fetch_assoc($departe)){ ?>
        <tr> 
            <td style="width: 2%;"><?php echo $depart['num']; ?></td>
            <td class="text-center"> <?php echo $depart['departement']; ?> </td>
            <td style="width: 30%;" class="text-center"><a data-toggle="modal" data-target="#mdepart<?php echo $depart['num']; ?>" class="btn btn-primary btn-md fa fa-edit"> Modifier</a> <a data-toggle="modal" data-target="#sdepart<?php echo $depart['num']; ?>" class="btn btn-danger btn-md fa fa-trash"> Supprimer</a> 

<!-- modal pour modifier -->

<div id="mdepart<?php echo $depart['num']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modifier département</h4>
      </div>
      
      <?php echo $msg_modif_depart; ?>

		      <div class="modal-body">
		      
			     <div > 
       		 <form method="post">
			        <div class="row"> 
				          <input type="hidden" name="mnumdepart" value="<?php echo $depart['num']; ?>">
				    	<div class="col-md-12 text-center"> <input style="width: 60%;" class="form-control" type="text" name="mdepart" value="<?php echo $depart['departement']; ?>" required></div> 
			  		</div> <br>

		 	 	</div>

		      </div>

		    <div class="modal-footer">
		            <button class="btn btn-danger" type="button" data-dismiss="modal">Fermer</button> 
		            <button class="btn btn-success" type="submit" name="modif_depart">Valider</button> 
		    </div>
        
        </form>

    </div>

  </div>
</div> <!-- fin de la modification -->

<!-- modal pour supression -->

		<div id="sdepart<?php echo $depart['num']; ?>" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		        <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Suppression de département</h4>
		      </div>

				<?php echo $msg_supp_depart; ?>

		      <form method="post">

		      <div class="modal-body">
		        <input type="hidden" name="snumdepart" value="<?php echo $depart['num']; ?>">
		        <i style="color: #ff3333;" class="fa fa-exclamation-triangle" id="tri"> </i> <br> <br>
		        <p> Voulez-vous vraiment supprimer le département <b><?php echo $depart['departement']; ?></b> </p>
		      </div>

		        <div class="modal-footer">
		         <button type="submit" name="supp_depart" class="btn btn-danger fa fa-trash"> Oui</button>
		         <button type="button" class="btn btn-success fa fa-check" data-dismiss="modal"> Non</button>
		      </div>

		      </form>

		    </div> 
		  </div>
		</div> <!-- fin de la supression -->

</td>
    </tr> <?php } ?>

          </tbody> 
</table>  

</div> </div> <!-- fin row et col du tableau -->

                       </div> <!-- fin panel body -->

              </div> <!-- fin panel avant panel body -->

            </div> <!-- fin panel default 6 -->

            <!-- ************************************************ Communes ******************************************** -->

                <div class="panel panel-info">
                    <div class="panel-heading text-center"> <a class="panel-title" data-toggle="collapse" data-parent="#element" href="#commune">Les communes </a> </div>
                        
                     <div id="commune" class="panel-collapse collapse">
                        <div class="panel-body">

                        <form method="post"> <?php echo $msg_save_com; ?>
                            <div class="row">
                                <div class="col-md-12 text-center"> 
                                	<span class="input input--jiro">
										<input class="input__field input__field--jiro" type="text" id="input-10" name="commune" required />
										<label class="input__label input__label--jiro" for="input-10">
											<span style="font-size: 16px;" class="input__label-content input__label-content--jiro">Commune</span>
										</label>
									</span> <br><button type="submit" class="btn btn-success" name="save_com"> Enrégistré</button>
									
								</div>
                            </div> <hr><br>
                        </form>

                        <!-- tableau d'affichage -->

                            <div class="row">
  <div class="col-md-12">
  <table class="table table-bordered table-striped table-hover table-condensed table-responsive data_table">
    <thead>
        <tr>
              <th style="width: 2%;"></th>
              <th class="text-center" ><strong>Commune</strong></th>
              <th style="width: 30%;" class="text-center"><strong>Actions</strong></th>
        </tr>
    </thead>
    <tbody> <?php while($com = mysqli_fetch_assoc($comm)){ ?>
        <tr> 
            <td style="width: 2%;"><?php echo $com['num']; ?></td>
            <td class="text-center"> <?php echo $com['commune']; ?> </td>
            <td style="width: 30%;" class="text-center"><a data-toggle="modal" data-target="#mcom<?php echo $com['num']; ?>" class="btn btn-primary btn-md fa fa-edit"> Modifier</a> <a data-toggle="modal" data-target="#scom<?php echo $com['num']; ?>" class="btn btn-danger btn-md fa fa-trash"> Supprimer</a> 

<!-- modal pour modifier -->

<div id="mcom<?php echo $com['num']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modifier commune</h4>
      </div>
      
      <?php echo $msg_modif_com; ?>

		      <div class="modal-body">
		      
			     <div > 
       		 <form method="post">
			        <div class="row"> 
				          <input type="hidden" name="mnumcom" value="<?php echo $com['num']; ?>">
				    	<div class="col-md-12 text-center"> <input style="width: 60%;" class="form-control" type="text" name="mcom" value="<?php echo $com['commune']; ?>" required></div> 
			  		</div> <br>

		 	 	</div>

		      </div>

		    <div class="modal-footer">
		            <button class="btn btn-danger" type="button" data-dismiss="modal">Fermer</button> 
		            <button class="btn btn-success" type="submit" name="modif_com">Valider</button> 
		    </div>
        
        </form>

    </div>

  </div>
</div> <!-- fin de la modification -->

<!-- modal pour supression -->

		<div id="scom<?php echo $com['num']; ?>" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		        <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Suppression de commune</h4>
		      </div>

				<?php echo $msg_supp_com; ?>

		      <form method="post">

		      <div class="modal-body">
		        <input type="hidden" name="snumcom" value="<?php echo $com['num']; ?>">
		        <i style="color: #ff3333;" class="fa fa-exclamation-triangle" id="tri"> </i> <br> <br>
		        <p> Voulez-vous vraiment supprimer la commune <b><?php echo $com['commune']; ?></b> </p>
		      </div>

		        <div class="modal-footer">
		         <button type="submit" name="supp_com" class="btn btn-danger fa fa-trash"> Oui</button>
		         <button type="button" class="btn btn-success fa fa-check" data-dismiss="modal"> Non</button>
		      </div>

		      </form>

		    </div> 
		  </div>
		</div> <!-- fin de la supression -->

</td>
    </tr> <?php } ?>

          </tbody> 
</table>  

</div> </div> <!-- fin row et col du tableau -->

                       </div> <!-- fin panel body -->

              </div> <!-- fin panel avant panel body -->

            </div> <!-- fin panel default 7 -->


         </div>  <!-- fin group element -->

		</div> <!-- fin col-md-9-offset-1 -->

    </div> <!-- fin col-md-10 -->


  	</div> <!-- fin row content -->

  </div> <!-- fin contentainer-fluid -->

 </div> <!-- fin container -->





<script type="text/javascript">
	$(document).ready(function() {
	    $('.data_table').DataTable();
	    $('#mdf').on('click', function() {
	    window.location.reload(true); });
	} );
</script>

</body>


<footer id="colorlib-footer" role="contentinfo">
            <div>
                
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                            <small class="block">
                            Copyright ©<script>document.write(new Date().getFullYear());</script> UNICEF | Tous droits réservés | Powered by <b>Derrick ALAVO</b>
                            </small>
                        </p> <small class="block"></small>

                    </div> <small class="block"></small>

                </div> <small class="block"></small>

            </div> <small class="block"></small>
</footer>


</html>