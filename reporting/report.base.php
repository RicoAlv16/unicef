
<?php
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "suivi_equipements_intrants";

// Connexion à la base

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connexion echouee: " . mysqli_connect_error());

} else{
	$req = "SELECT * FROM base_donnees_intrants_equipement WHERE etat ='1' ORDER BY i ASC ";
        		$base = $conn->query($req);
				$rows = array();
				while($row = mysqli_fetch_assoc($base)){ $rows[] = $row; } ?>
				;;;;; BASE DE DONNEES INTRANTS & EQUIPEMENTS


    I; Section; Nature; Designation; Caracteristique; Quantite; Date de livraison; Cout; Stucture beneficiaire; Commune; Zone sanitaire; Departement; Fonctionalite; Amortissement
    <?php
    foreach($rows as $row) 
    {
       echo "\n".'"'.utf8_decode($row['i'].'"; '.$row['section'].'; '.$row['nature'].'; '.$row['designation'].'; '.$row['caracteristique'].'; '.$row['quantite'].'; '.$row['date_livraison'].'; '.$row['cout'].'; '.$row['beneficiaire'].'; '.$row['commune'].'; '.$row['zone_sanitaire'].'; '.$row['departement'].'; '.$row['fonctionalite'].'; '.$row['amortissement'].'');
    }
    header("Content-type: text/csv");
    header("Content-disposition: attachment; filename=report_base.csv");
}

?>