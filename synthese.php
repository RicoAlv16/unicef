
	
<?php require('traitement/traitement_synthese.php'); ?>

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
        <li><a href="actualiser.php"><b>Actualisation</b></a></li>
        <li class="active"><a href="synthese.php"><b>Synthèse</b></a></li>
        <li><a href="reporting.php"><b>Reporting</b></a></li>
      </ul><br>
      
    </div>


    <div class="col-sm-10">

      					<div class="row">
      						<div class="col-md-4"> <h4><b>Répartition des équipements</b></h4> </div>
      					</div> <br>

      						<!-- Le grand Tableau -->

					  <table class="synt table table-bordered table-striped table-hover table-condensed table-responsive">

                <thead>
                      <tr style="background: #003366; color: #ffffff;">
                        <th>Désignation</th>
                        <th>Nombre</th>
                        <?php 
                         foreach(listeZone() as $key=>$val){
                                   $zones=$val['zone_sanitaire'];
                                  // $array[$zones]= getQuantiteZone($rep['designation'],$val['zone_sanitaire']);
                                  echo utf8_decode( "<th>$zones</th>" );
                              }
                        ?>
                        
                      </tr>
                </thead>

                <tbody>
                        <?php 
                        $sql= "SELECT * FROM base_donnees_intrants_equipement GROUP BY designation ";                   
                    $req = bdd()->prepare($sql);               
                      $req->execute();
                       while ($rep= $req->fetch()){ 
                            
                              $design=$rep['designation'];
                              $qte=getQuantite($rep['designation']);
                               echo utf8_decode( '<tr>
                                  <td id="bleu"> '.$design.'  </td>
                                  <td id="bleu"> '.$qte.'</td>');
                               foreach(listeZone() as $key=>$val){
                                   $zone=$val['zone_sanitaire'];
                                  $zone= getQuantiteZone($rep['designation'],$val['zone_sanitaire']);

                                          echo utf8_encode( "<td>".$zone."</td>" ); 
                               
                                  
                            
                              }
                                echo " </tr>"; 
                      }
                        
                        ?>
                     
                    </tbody>
                  </table>

                  

    </div> <!-- fin col-md-10 -->

  	</div> <!-- fin row content -->

  </div> <!-- fin contentainer-fluid -->

 </div> <!-- fin container -->





<script type="text/javascript">
	$(document).ready(function() { $('.synt').DataTable(); 
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