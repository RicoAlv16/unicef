
<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "suivi_equipements_intrants";

// Connexion à la base

function bdd() {

    try 
	{        
         $bdd= new PDO('mysql:host=localhost;dbname=suivi_equipements_intrants;charset=utf8','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
      // On active le mode d'affichage des erreurs, et le lancement d'exception en cas d'erreur
         $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (Exception $ex) 
	{
        die('Erreur : '. $ex->getMessage());
    }
    return $bdd;
}


   function getQuantite($designe) {
                $sql= "SELECT SUM(quantite) as quantites FROM base_donnees_intrants_equipement WHERE designation='".$designe."' AND etat='1'  GROUP BY designation  ";                   
                 $req = bdd()->prepare($sql);               
                  $req->execute();
                 $rep= $req->fetch(PDO::FETCH_ASSOC);
                return ($rep['quantites']==null)?0:$rep['quantites'];
        
   }

    function getQuantiteZone($designa,$zone) {
                $sql= "SELECT SUM(quantite) as quantite_zone FROM base_donnees_intrants_equipement WHERE designation='".$designa."' AND zone_sanitaire='".$zone."' AND etat='1'  GROUP BY designation, zone_sanitaire  ";                   
                 $req = bdd()->prepare($sql);               
                  $req->execute();
                 $rep= $req->fetch(PDO::FETCH_ASSOC);
                return ($rep['quantite_zone']==null)?0:$rep['quantite_zone'];
        
   }

    function listeZone() {
        $sql= "SELECT distinct zone_sanitaire  FROM base_donnees_intrants_equipement WHERE etat='1' ORDER BY zone_sanitaire ASC";                   
        $req = bdd()->prepare($sql);               
        $req->execute();
        return $rep1= $req->fetchAll(PDO::FETCH_ASSOC);
    }
    


 $conn = null; // fin connexion

?>
