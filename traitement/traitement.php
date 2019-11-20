
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


									// ENREGISTREMENT ELEMENTAIRE

// ************************* Enrégistrement & affichage de nature

	$msg_save_nature='';

if (isset($_POST['save_nature'])) {
	
			$nature = $_POST['nature'];
			$sql = "INSERT INTO nature(num, nature) VALUES (NULL, '$nature')";
        			$conn->query($sql);
	        		$msg_save_nature = ' <script>swal("Bien!", "Nature enregistrée avec succès", "success");</script> ';

		}

$req = "SELECT * FROM nature";
        		$nat = $conn->query($req);

$req = "SELECT * FROM nature";
        		$nats = $conn->query($req);
				$nat1 = array();
				while($nat2 = mysqli_fetch_assoc($nats)){ $nat1[] = $nat2; }

// Modification nature

	$msg_modif_nature='';

if (isset($_POST['modif_nature'])) {
	
			$mnum = $_POST['mnumnat'];
			$mnature = $_POST['mnature'];
			$sql = "UPDATE nature SET nature='$mnature' WHERE num=$mnum";
        			$conn->query($sql);
	        		$msg_modif_nature = ' <script>swal("Bien!", "Nature modifiée avec succès", "success");</script> ';
	        		header('Refresh: 2;URL=elementaire.php');
		}

// Supression nature

	$msg_supp_nature='';

if (isset($_POST['supp_nature'])) {
	
			$snum = $_POST['snumnat'];
			$sql = "DELETE FROM nature WHERE num=$snum";
        			$conn->query($sql);
	        		$msg_supp_nature = ' <script>swal("Bien!", "Nature supprimée avec succès", "success");</script> ';
	        		header('Refresh: 2;URL=elementaire.php');
		}


		// ************************* Enrégistrement & affichage de désignation

	$msg_save_design='';

if (isset($_POST['save_designation'])) {
	
			$design = $_POST['design'];
			$sql = "INSERT INTO designation(numdesign, designation) VALUES (NULL, '$design')";
        			$conn->query($sql);
	        		$msg_save_design = ' <script>swal("Bien!", "Désignation enregistrée avec succès", "success");</script> ';

		}

$req = "SELECT * FROM designation";
        		$designa = $conn->query($req);

$req = "SELECT * FROM designation";
        		$desi = $conn->query($req);
				$designa1 = array();
				while($designa2 = mysqli_fetch_assoc($desi)){ $designa1[] = $designa2; }


// Modification désignation

	$msg_modif_design='';

if (isset($_POST['modif_designation'])) {
	
			$mnum = $_POST['mnumdesign'];
			$mdesign = $_POST['mdesign'];
			$sql = "UPDATE designation SET designation='$mdesign' WHERE numdesign=$mnum";
        			$conn->query($sql);
	        		$msg_modif_design = ' <script>swal("Bien!", "Désignation modifiée avec succès", "success");</script> ';
	        		header('Refresh: 2;URL=elementaire.php');
		}

// Supression désignation

	$msg_supp_design='';

if (isset($_POST['supp_designation'])) {
	
			$snum = $_POST['snumdesign'];
			$sql = "DELETE FROM designation WHERE numdesign=$snum";
        			$conn->query($sql);
	        		$msg_supp_design = ' <script>swal("Bien!", "Désignation supprimée avec succès", "success");</script> ';
	        		header('Refresh: 2;URL=elementaire.php');
		}


		// ************************** Enrégistrement & affichage de caracteristique

	$msg_save_caract='';

if (isset($_POST['save_carateristique'])) {
	
			$caract = $_POST['caract'];
			$sql = "INSERT INTO caracteristique(num, caracteristique) VALUES (NULL, '$caract')";
        			$conn->query($sql);
	        		$msg_save_caract = ' <script>swal("Bien!", "caractéristique enregistrée avec succès", "success");</script> ';

		}

$req = "SELECT * FROM caracteristique";
        		$caracte = $conn->query($req);

$req = "SELECT * FROM caracteristique";
        		$cat = $conn->query($req);
				$cat1 = array();
				while($cat2 = mysqli_fetch_assoc($cat)){ $cat1[] = $cat2; }        		


// Modification caracteristique

	$msg_modif_caract='';

if (isset($_POST['modif_caracteristique'])) {
	
			$numcaract = $_POST['mnumcaract'];
			$mcaract = $_POST['mcaract'];
			$sql = "UPDATE caracteristique SET caracteristique='$mcaract' WHERE num=$numcaract";
        			$conn->query($sql);
	        		$msg_modif_caract = ' <script>swal("Bien!", "Caractéristique modifiée avec succès", "success");</script> ';
	        		header('Refresh: 2;URL=elementaire.php');
		}

// Supression caracteristique

	$msg_supp_caract='';

if (isset($_POST['supp_caracteristique'])) {
	
			$snumcaract = $_POST['snumcaract'];
			$sql = "DELETE FROM caracteristique WHERE num=$snumcaract";
        			$conn->query($sql);
	        		$msg_supp_caract = ' <script>swal("Bien!", "Caractéristique supprimée avec succès", "success");</script> ';
	        		header('Refresh: 2;URL=elementaire.php');
		}


		// ************************** Enrégistrement & affichage de bénéficiaire

	$msg_save_benef='';

if (isset($_POST['save_beneficiaire'])) {
	
			$benef = $_POST['benef'];
			$sql = "INSERT INTO beneficiaire(num, beneficiaire) VALUES (NULL, '$benef')";
        			$conn->query($sql);
	        		$msg_save_benef= ' <script>swal("Bien!", "Bénéficiaire enregistrée avec succès", "success");</script> ';

		}

$req = "SELECT * FROM beneficiaire";
        		$benefi = $conn->query($req);

$req = "SELECT * FROM beneficiaire";
        		$ben = $conn->query($req);
				$ben1 = array();
				while($ben2 = mysqli_fetch_assoc($ben)){ $ben1[] = $ben2; }


// Modification bénéficiaire

	$msg_modif_benef='';

if (isset($_POST['modif_beneficiaire'])) {
	
			$mnumbenef = $_POST['mnumbenef'];
			$mbenef = $_POST['mbenef'];
			$sql = "UPDATE beneficiaire SET beneficiaire='$mbenef' WHERE num=$mnumbenef";
        			$conn->query($sql);
	        		$msg_modif_benef = ' <script>swal("Bien!", "Bénéficiaire modifiée avec succès", "success");</script> ';
	        		header('Refresh: 2;URL=elementaire.php');
		}

// Supression bénéficiaire

	$msg_supp_benef='';

if (isset($_POST['supp_beneficiaire'])) {
	
			$snumbenef = $_POST['snumbenef'];
			$sql = "DELETE FROM beneficiaire WHERE num=$snumbenef";
        			$conn->query($sql);
	        		$msg_supp_benef = ' <script>swal("Bien!", "Bénéficiaire supprimée avec succès", "success");</script> ';
	        		header('Refresh: 2;URL=elementaire.php');
		}


		// ************************** Enrégistrement & affichage de zone sanitaire

	$msg_save_zone='';

if (isset($_POST['save_zone'])) {
	
			$zone = $_POST['zone'];
			$sql = "INSERT INTO zone_sanitaire(num, zone_sanitaire) VALUES (NULL, '$zone')";
        			$conn->query($sql);
	        		$msg_save_zone = ' <script>swal("Bien!", "Zone enregistrée avec succès", "success");</script> ';

		}

$req = "SELECT * FROM zone_sanitaire";
        		$zones = $conn->query($req);

$req = "SELECT * FROM zone_sanitaire";
        		$zon = $conn->query($req);
				$zone1 = array();
				while($zone2 = mysqli_fetch_assoc($zon)){ $zone1[] = $zone2; }


// Modification zone sanitaire

	$msg_modif_zone='';

if (isset($_POST['modif_zone'])) {
	
			$numzone = $_POST['mnumzone'];
			$mzone = $_POST['mzone'];
			$sql = "UPDATE zone_sanitaire SET zone_sanitaire='$mzone' WHERE num=$numzone";
        			$conn->query($sql);
	        		$msg_modif_zone = ' <script>swal("Bien!", "Zone modifiée avec succès", "success");</script> ';
	        		header('Refresh: 2;URL=elementaire.php');
		}

// Supression zone sanitaire

	$msg_supp_zone='';

if (isset($_POST['supp_zone'])) {
	
			$snumzone = $_POST['snumzone'];
			$sql = "DELETE FROM zone_sanitaire WHERE num=$snumzone";
        			$conn->query($sql);
	        		$msg_supp_zone = ' <script>swal("Bien!", "Zone supprimée avec succès", "success");</script> ';
	        		header('Refresh: 2;URL=elementaire.php');
		}


		// ************************** Enrégistrement & affichage de département

	$msg_save_depart='';

if (isset($_POST['save_depart'])) {
	
			$depart = $_POST['depart'];
			$sql = "INSERT INTO departement(num, departement) VALUES (NULL, '$depart')";
        			$conn->query($sql);
	        		$msg_save_depart = ' <script>swal("Bien!", "Département enregistré avec succès", "success");</script> ';

		}

$req = "SELECT * FROM departement";
        		$departe = $conn->query($req);

$req = "SELECT * FROM departement";
        		$dep = $conn->query($req);
				$dep1 = array();
				while($dep2 = mysqli_fetch_assoc($dep)){ $dep1[] = $dep2; }

// Modification département

	$msg_modif_depart='';

if (isset($_POST['modif_depart'])) {
	
			$mnum = $_POST['mnumdepart'];
			$mdepart = $_POST['mdepart'];
			$sql = "UPDATE departement SET departement='$mdepart' WHERE num=$mnum";
        			$conn->query($sql);
	        		$msg_modif_depart = ' <script>swal("Bien!", "Département modifié avec succès", "success");</script> ';
	        		header('Refresh: 2;URL=elementaire.php');
		}

// Supression département

	$msg_supp_depart='';

if (isset($_POST['supp_depart'])) {
	
			$snum = $_POST['snumdepart'];
			$sql = "DELETE FROM departement WHERE num=$snum";
        			$conn->query($sql);
	        		$msg_supp_depart = ' <script>swal("Bien!", "Département supprimé avec succès", "success");</script> ';
	        		header('Refresh: 2;URL=elementaire.php');
		}


		// ************************** Enrégistrement & affichage de commune

	$msg_save_com='';

if (isset($_POST['save_com'])) {
	
			$com = $_POST['commune'];
			$sql = "INSERT INTO commune(num, commune) VALUES (NULL, '$com')";
        			$conn->query($sql);
	        		$msg_save_com = ' <script>swal("Bien!", "Commune enregistrée avec succès", "success");</script> ';

		}

$req = "SELECT * FROM commune";
        		$comm = $conn->query($req);

$req = "SELECT * FROM commune";
        		$com = $conn->query($req);
				$com1 = array();
				while($com2 = mysqli_fetch_assoc($com)){ $com1[] = $com2; }

// Modification commune

	$msg_modif_com='';

if (isset($_POST['modif_com'])) {
	
			$mnum = $_POST['mnumcom'];
			$mcom = $_POST['mcom'];
			$sql = "UPDATE commune SET commune='$mcom' WHERE num=$mnum";
        			$conn->query($sql);
	        		$msg_modif_com = ' <script>swal("Bien!", "Commune modifiée avec succès", "success");</script> ';
	        		header('Refresh: 2;URL=elementaire.php');
		}

// Supression commune

	$msg_supp_com='';

if (isset($_POST['supp_com'])) {
	
			$snum = $_POST['snumcom'];
			$sql = "DELETE FROM commune WHERE num=$snum";
        			$conn->query($sql);
	        		$msg_supp_com = ' <script>swal("Bien!", "Commune supprimée avec succès", "success");</script> ';
	        		header('Refresh: 2;URL=elementaire.php');
		}

// ********************************************************************************************************



// ************************* ENREGISTREMENT ET AFFICHAGE DE LA BASE DE DONNES

	$msg_save_base='';

if (isset($_POST['save_base'])) {
	
		// $_POST = array_map('mysql_real_escape_string', $_POST);
            $section = mysqli_real_escape_string($conn, $_POST['section']);
            $nature = mysqli_real_escape_string($conn, $_POST['nature']);
            $design = mysqli_real_escape_string($conn, $_POST['design']);
            $caract = mysqli_real_escape_string($conn, $_POST['caract']);
            $date_livraison = mysqli_real_escape_string($conn, $_POST['date_livraison']);
            $quantite = mysqli_real_escape_string($conn, $_POST['quantite']);
            $cout = mysqli_real_escape_string($conn, $_POST['cout']);
            $benef = mysqli_real_escape_string($conn, $_POST['benef']);
            $commune = mysqli_real_escape_string($conn, $_POST['commune']);
            $zone = mysqli_real_escape_string($conn, $_POST['zone']);
            $depart = mysqli_real_escape_string($conn, $_POST['depart']);
            $fonct = mysqli_real_escape_string($conn, $_POST['fonct']);
            $ammort = mysqli_real_escape_string($conn, $_POST['ammort']);

		$sql = "INSERT INTO base_donnees_intrants_equipement(i, section, nature, designation, caracteristique, quantite, date_livraison, cout, beneficiaire, commune, zone_sanitaire, departement, fonctionalite, amortissement, etat) VALUES (NULL, '$section', '$nature', '$design', '$caract', '$quantite', '$date_livraison', '$cout', '$benef', '$commune', '$zone', '$depart', '$fonct', '$ammort', 1)";

        			$baz = $conn->query($sql);
	        		$msg_save_base = ' <script>swal("Bien!", "Base enregistrée avec succès", "success");</script> ';
		}

$req = "SELECT * FROM base_donnees_intrants_equipement WHERE etat ='1' ORDER BY i ASC ";
        		$bases = $conn->query($req);


// Modification BASE

		$msg_modif_base='';

if (isset($_POST['modif_base'])) {
	
			$m_i = $_POST['m_i'];
			$section = $_POST['Msection'];
            $nature = $_POST['Mnature'];
			$design = $_POST['Mdesign'];
            $caract = $_POST['Mcaract'];
            $date_livraison = $_POST['Mdate_livraison'];
            $quantite = $_POST['Mquantite'];
            $cout = $_POST['Mcout'];
            $benef = $_POST['Mbenef'];
            $commune = $_POST['Mcommune'];
            $zone = $_POST['Mzone'];
            $depart = $_POST['Mdepart'];
            $fonct = $_POST['Mfonct'];
            $ammort = $_POST['Mammort'];
			$sql = "UPDATE base_donnees_intrants_equipement SET section='$section', nature='$nature', designation='$design', caracteristique='$caract', date_livraison='$date_livraison', quantite='$quantite', cout='$cout', beneficiaire='$benef', commune='$commune', zone_sanitaire='$zone', departement='$depart', fonctionalite='$fonct', amortissement='$ammort', etat='1' WHERE i=$m_i";
        			$conn->query($sql);
	        		$msg_modif_base = ' <script>swal("Bien!", "Base modifiée avec succès", "success");</script> ';
	        		header('Refresh: 2;URL=actualiser.php');
		}


// Supression BASE

	$msg_supp_base='';

if (isset($_POST['supp_base'])) {
	
			$s_i = $_POST['s_i'];
			$sql = "UPDATE base_donnees_intrants_equipement SET etat='0' WHERE i=$s_i";
        			$conn->query($sql);
	        		$msg_supp_base = ' <script>swal("Bien!", "Base supprimée avec succès", "success");</script> ';
	        		header('Refresh: 2;URL=actualiser.php');
		}




        	// while($qtee = mysqli_fetch_assoc($qt)){ $qtt='<p>'. $qtee['qte']. '</p>'; }
        	
// ***************************************************************************************

} mysqli_close($conn); // fin connexion

?>