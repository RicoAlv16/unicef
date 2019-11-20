
	
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
	<link rel="stylesheet" media="screen" href="DataTables/DataTables-1.10.16/css/jquery.dataTables.min.css"/>
	<link rel="stylesheet" media="screen" href="datetimepicker/css/bootstrap-datetimepicker.min.css"/>
 

	<script src="js/sweetalert.min.js"></script>
	<script src="js/classie.js"></script>
  	<script src="js/jquery-3.3.1.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<script src="datetimepicker/js/bootstrap-datetimepicker.js"></script>
	<script src="DataTables/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>

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
        <li><a href="elementaire.php"><b>Elémentaires</b></a></li>
        <li><a href="base.php"><b>Base de données &amp; saisie</b></a></li>
        <li class="active"><a href="actualiser.php"><b>Actualisation</b></a></li>
        <li><a href="synthese.php"><b>Synthèse</b></a></li>
        <li><a href="reporting.php"><b>Reporting</b></a></li>
      </ul><br>
      
    </div>


    <div class="col-sm-10">

      			<div class="row">

					  <div class="col-md-12">
     
      					<div class="row">
      						<div class="col-md-4"> <h4><b>Actualisation</b></h4> </div>
      					</div> <br>
      						<!-- Le grand Tableau -->

					  <table id="base" class="display">
					    <thead style="color: #006600;">
					        <tr>
					              <th> <b>M</b></th>
					              <th> <b>S</b></th>
					              <th> <b>I</b></th>
					              <th class="text-center" ><b>Section</b></th>
					              <th class="text-center" ><b>Nature</b></th>
					              <th class="text-center" ><b>Désignation</b></th>
					              <th class="text-center" ><b>Caractéristiques</b></th>
					              <th class="text-center" ><b>Quantité</b></th>
					              <th class="text-center" ><b>Date de livraison</b></th>
					              <th class="text-center" ><b>Coût($US)</b></th>
					              <th class="text-center" ><b>Structure bénéficiaire</b></th>
					              <th class="text-center" ><b>Commune</b></th>
					              <th class="text-center" ><b>Zone sanitaire</b></th>
					              <th class="text-center" ><b>Département</b></th>
					              <th class="text-center" ><b>Fonctionalité</b></th>
					              <th class="text-center" ><b>Amortissement</b></th>
					        </tr>
					    </thead>
					    
					    <tbody style="color: #000;"> <?php while($base = mysqli_fetch_assoc($bases)){ ?>
					        <tr> 

					            <td>  <a data-toggle="modal" data-target="#m<?php echo $base['i']; ?>" class="btn btn-primary btn-md fa fa-edit"> </a> 

					            	<!-- Modal pour ajouter les données -->

      	<div id="m<?php echo $base['i']; ?>" class="modal fade" role="dialog">
			<div class="modal-dialog modal-lg">
				<!-- Modal content-->
				<div class="modal-content">

				    <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Modifier base</h4>
				    </div><br>

				    <?php echo $msg_modif_base; ?>

						<form method="post"> 
				      
					<div class="modal-body"> 
						<div class="form-group">

								<div class="row" style="font-size: 40px;">
									<div class="col-md-4"> 
											<input type="hidden" value="<?php echo $base['i']; ?>" name="m_i">
											<select id="slt1" class="form-control" name="Msection" required> 
												<option > <?php echo $base['section']; ?> </option> 
												<option> Suivie </option> 
												<option> Politique_Sociale </option> 
												<option> Protection </option> 
												<option> REC </option> 
												<option> Education </option> 
											</select>
									</div>



									<div class="col-md-4"> 
										<select id="slt1" class="form-control" name="Mnature" required> 
											<option > <?php echo $base['nature']; ?> </option> 
											<?php foreach($nat1 as $nat2) { ?> <option> <?php echo $nat2['nature']; ?> </option> <?php } ?> 
										</select> </div>



									<div class="col-md-4">
										<select id="slt1" class="form-control" name="Mdesign" required>
											<option > <?php echo $base['designation']; ?> </option> 
											<?php foreach($designa1 as $designa2) { ?> <option> <?php echo $designa2['designation']; ?> </option> <?php } ?> 
										</select> </div> 

								</div> <br><br>

								<div class="row">

									<div class="col-md-4"> 
										<select id="slt2" class="form-control" name="Mcaract" required> 
											<option > <?php echo $base['caracteristique']; ?> </option> 
											<?php foreach($cat1 as $cat2) { ?> <option> <?php echo $cat2['caracteristique']; ?> </option> <?php } ?> 
										</select> 
									</div>
									<div class="col-md-4"> <div class="input-group"> <input id="slt2" class="form-control date tdate" type="text" name="Mdate_livraison"placeholder="Date de livraison" value="<?php echo $base['date_livraison']; ?>" required> <span class="input-group-addon"><span class="fa fa-calendar-alt"></span></span> </div>
									</div>
									<div class="col-md-2"> <input id="slt2" type="number" class="form-control" name="Mquantite" placeholder="Quantité" value="<?php echo $base['quantite']; ?>" required> </div>
									<div class="col-md-2"> <input id="slt2" type="number" class="form-control" name="Mcout" placeholder="Coût" value="<?php echo $base['cout']; ?>" required > </div>

								</div> <br><br>

								<div class="row">

									<div class="col-md-4"> 
									<select id="slt1" class="form-control" name="Mbenef" required> 
											<option > <?php echo $base['beneficiaire']; ?> </option> 
											<?php foreach($ben1 as $ben2) { ?> <option> <?php echo $ben2['beneficiaire']; ?> </option> <?php } ?> 
									</select> </div>
									<div class="col-md-4"> 
										<select id="slt1" class="form-control" name="Mcommune" required> 
											<option > <?php echo $base['commune']; ?> </option> 
											<?php foreach($com1 as $com2) { ?> <option> <?php echo $com2['commune']; ?> </option> <?php } ?> 
										</select> </div>
									<div class="col-md-4">
										<select id="slt1" class="form-control" name="Mzone" required>
											<option > <?php echo $base['zone_sanitaire']; ?> </option> 
											<?php foreach($zone1 as $zone2) { ?> <option> <?php echo $zone2['zone_sanitaire']; ?> </option> <?php } ?> 
										</select> </div>

								</div> <br><br>

								<div class="row">

									<div class="col-md-4"> 
										<select id="slt2" class="form-control" name="Mdepart" required> 
												<option > <?php echo $base['departement']; ?> </option> 
											<?php foreach($dep1 as $dep2) { ?> <option> <?php echo $dep2['departement']; ?> </option> <?php } ?> 
										</select> </div>
									<div class="col-md-4"> 
											<select id="slt2" class="form-control" name="Mfonct" required> 
												<option > <?php echo $base['fonctionalite']; ?> </option> 
												<option> Fonctionnel </option> 
												<option> Non Fonctionnel </option> 
												<option> RAS </option> 
											</select>
									</div>
									<div class="col-md-4"> 
											<select id="slt2" class="form-control" name="Mammort" required> 
												<option > <?php echo $base['amortissement']; ?> </option> 
												<option> Amorti </option> 
												<option> Non Amorti </option> 
											</select>
									</div>

								</div><br><br>

								<div class="modal-footer">
						            <button class="btn btn-danger fa fa-times" type="button" data-dismiss="modal"> Fermer</button> 
						            <button class="btn btn-success fa fa-save" type="submit" name="modif_base"> Enrégistrer</button> 
						    	</div>

						</form>

						</div> <!-- fin form-group -->
					</div> <!-- fin modal body -->

				</div> <!-- fin modal content -->
			</div> <!-- fin modal dialogue -->
		</div> <!-- fin modal -->

					            </td>

					            <td>  <a data-toggle="modal" data-target="#sbase<?php echo $base['i']; ?>" class="btn btn-danger btn-md fa fa-trash"> </a> 

					            	<!-- modal pour supression -->

		<div id="sbase<?php echo $base['i']; ?>" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		        <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Suppression de base</h4>
		      </div>

				<?php echo $msg_supp_base; ?>

		      <form method="post">

		      <div class="modal-body text-center">
		        <input type="hidden" name="s_i" value="<?php echo $base['i']; ?>">
		        <i style="color: #ff3333;" class="fa fa-exclamation-triangle tri"> </i> <br> <br>
		        <p> <b> Voulez-vous vraiment supprimer cette ligne </b> </p>
		      </div>

		        <div class="modal-footer">
		         <button type="submit" name="supp_base" class="btn btn-danger fa fa-trash"> Oui</button>
		         <button type="button" class="btn btn-success fa fa-check" data-dismiss="modal"> Non</button>
		      </div>

		      </form>

		    </div> 
		  </div>
		</div> <!-- fin de la supression -->

					            </td>

					            <td>  <?php echo $base['i']; ?></td>
					            <td>  <?php echo $base['section']; ?> </td>
					            <td>  <?php echo $base['nature']; ?> </td>
					            <td>  <?php echo $base['designation']; ?> </td>
					            <td>  <?php echo $base['caracteristique']; ?> </td>
					            <td>  <?php echo $base['quantite']; ?> </td>
					            <td>  <?php echo $base['date_livraison']; ?> </td>
					            <td>  <?php echo $base['cout']; ?> </td>
					            <td>  <?php echo $base['beneficiaire']; ?> </td>
					            <td>  <?php echo $base['commune']; ?> </td>
					            <td>  <?php echo $base['zone_sanitaire']; ?> </td>
					            <td>  <?php echo $base['departement']; ?> </td>
					            <td>  <?php echo $base['fonctionalite']; ?> </td>
					            <td>  <?php echo $base['amortissement']; ?> </td>

					    </tr> <?php } ?>
					          </tbody> 
					</table>  

					</div> </div>

    </div> <!-- fin col-md-10 -->

  	</div> <!-- fin row content -->

  </div> <!-- fin contentainer-fluid -->

 </div> <!-- fin container -->





<script type="text/javascript">
	$(document).ready(function() { $('#base').DataTable(); 
	$(".tdate").datetimepicker({format: 'dd/mm/yyyy hh:ii', autoclose: true, todayBtn: true });
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