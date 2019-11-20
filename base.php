
	
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
        <li class="active"><a href="base.php"><b>Base de données &amp; saisie</b></a></li>
        <li><a href="actualiser.php"><b>Actualisation</b></a></li>
        <li><a href="synthese.php"><b>Synthèse</b></a></li>
        <li><a href="reporting.php"><b>Reporting</b></a></li>
      </ul><br>
      
    </div>


    <div class="col-sm-10">

      			<div class="row">

					  <div class="col-md-12">
     
      					<div class="row">
      						<div class="col-md-4"> <h4><b>Base de données & saisie</b></h4> </div>
      						<div class="col-md-6"> <button style="width: 30%;" data-toggle="modal" data-target="#ajout" class="btn btn-danger">Ajouter</button> 

      							<!-- Modal pour ajouter les données -->

      	<div id="ajout" class="modal fade" role="dialog">
			<div class="modal-dialog modal-lg">
				<!-- Modal content-->
				<div class="modal-content">

				    <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Ajouter base</h4>
				    </div><br>
				      
					<div class="modal-body">
						<div class="form-group">

						<form method="post"> <?php echo $msg_save_base; ?>

								<div class="row" style="font-size: 40px;">

									<div class="col-md-4"> 
											<select id="slt1" class="form-control" name="section" required> 
												<option disabled selected hidden value=""> Section</option> 
												<option> Suivie </option> 
												<option> Politique_Sociale </option> 
												<option> Protection </option> 
												<option> REC </option> 
												<option> Education </option> 
											</select>
									</div>
									<div class="col-md-4"> 
										<select id="slt1" class="form-control" name="nature" required> 
											<option disabled selected hidden value=""> Nature </option> 
											<?php while($natu = mysqli_fetch_assoc($nat)){ ?> <option> <?php echo $natu['nature']; ?> </option> <?php } ?> 
										</select> </div>
									<div class="col-md-4">
										<select id="slt1" class="form-control" name="design" required>
											<option disabled selected hidden value=""> Désignation </option> 
											 <?php while($design = mysqli_fetch_assoc($designa)){ ?> <option> <?php echo $design['designation']; ?> </option> <?php } ?> 
										</select> </div>

								</div> <br><br>

								<div class="row">

									<div class="col-md-4"> 
										<select id="slt2" class="form-control" name="caract" required> 
											<option disabled selected hidden value=""> Caratéristique </option> 
											<?php while($caract = mysqli_fetch_assoc($caracte)){ ?> <option> <?php echo $caract['caracteristique']; ?> </option> <?php } ?> 
										</select> 
									</div>
									<div class="col-md-4"> <div class="input-group"> <input id="slt2" class="form-control date tdate" type="text" name="date_livraison"placeholder="Date de livraison" required> <span class="input-group-addon"><span class="fa fa-calendar-alt"></span></span> </div>
									</div>
									<div class="col-md-2"> <input id="slt2" type="number" class="form-control" name="quantite" placeholder="Quantité" required> </div>
									<div class="col-md-2"> <input id="slt2" type="number" class="form-control" name="cout" placeholder="Coût" required > </div>

								</div> <br><br>

								<div class="row">

									<div class="col-md-4"> 
									<select id="slt1" class="form-control" name="benef" required> 
										<option disabled selected hidden value=""> Structure bébéficiaire </option> 
										<?php while($benef = mysqli_fetch_assoc($benefi)){ ?> <option> <?php echo $benef['beneficiaire']; ?> </option> <?php } ?> 
									</select> </div>
									<div class="col-md-4"> 
										<select id="slt1" class="form-control" name="commune" required> 
											<option disabled selected hidden value=""> Commune </option> 
											<?php while($com = mysqli_fetch_assoc($comm)){ ?> <option> <?php echo $com['commune']; ?> </option> <?php } ?> 
										</select> </div>
									<div class="col-md-4">
										<select id="slt1" class="form-control" name="zone" required>
											<option disabled selected hidden value=""> Zone sanitaire </option> 
											<?php while($zone = mysqli_fetch_assoc($zones)){ ?> <option> <?php echo $zone['zone_sanitaire']; ?> </option> <?php } ?> 
										</select> </div>

								</div> <br><br>

								<div class="row">

									<div class="col-md-4"> 
										<select id="slt2" class="form-control" name="depart" required> 
											<option disabled selected hidden value=""> Département </option> 
											<?php while($depart = mysqli_fetch_assoc($departe)){ ?> <option> <?php echo $depart['departement']; ?> </option> <?php } ?> 
										</select> </div>
									<div class="col-md-4"> 
											<select id="slt2" class="form-control" name="fonct" required> 
												<option disabled selected hidden value=""> Fonctionnalité </option> 
												<option> Fonctionnel </option> 
												<option> Non Fonctionnel </option> 
												<option> RAS </option> 
											</select>
									</div>
									<div class="col-md-4"> 
											<select id="slt2" class="form-control" name="ammort" required> 
												<option disabled selected hidden value=""> Amortissement </option> 
												<option> Amorti </option> 
												<option> Non Amorti </option> 
											</select>
									</div>

								</div><br><br>

								<div class="modal-footer">
						            <button class="btn btn-danger fa fa-times" type="button" data-dismiss="modal"> Fermer</button> 
						            <button class="btn btn-success fa fa-save" type="submit" name="save_base"> Enrégistrer</button> 
						    	</div>

						</form>

						</div> <!-- fin form-group -->
					</div> <!-- fin modal body -->

				</div> <!-- fin modal content -->
			</div> <!-- fin modal dialogue -->
		</div> <!-- fin modal -->

      						</div>
      					</div> <br>
      						<!-- Le grand Tableau -->

					  <table id="base" class="display">
					    <thead style="color: #006600;">
					        <tr>
					              <th style="width: 3%;"><b>I</b></th>
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

					    <tbody style="color: #000;">
					        <tr> <?php while($base = mysqli_fetch_assoc($bases)){ ?>

					            <td style="width: 3%;"> <?php echo $base['i']; ?></td>
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