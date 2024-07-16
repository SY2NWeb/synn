<?
// BDD BTPC
include("connect_btpc.php");

//$metier=stripslashes($_POST['metier']);
/*
$postit_2="";
$requete1="SELECT * FROM codif_metier WHERE id_codif_metier='$metier'";
$result1=mysql_query ($requete1) or die (mysql_error());
while ($row1=mysql_fetch_array($result1)) {
	$postit_2=utf8_encode($row1['codif_metier']);
}*/

$email1=$_POST['email1'];


// on recupere les cases cochées pour $metier
if(isset($_POST["metier"])) 
{  
   $c_choix = $_POST["metier"]; 
   foreach($c_choix as $val3) 
	  { 
	  $metier .=stripslashes($val3).",";
	  $compteur_metier++;
	  } 
	  
}
$metier=",".$metier;
//$secteur=stripslashes($secteur);
$metier=str_replace("Array","",$metier);
$metier=utf8_encode($metier);


// on recupere les cases cochées pour $secteur
if(isset($_POST["secteur"])) 
{  
   $b_choix = $_POST["secteur"]; 
   foreach($b_choix as $val2) 
	  { 
	  $secteur .=stripslashes($val2).",";
	  $compteur_secteur++;
	  } 
	  
}
$secteur=",".$secteur;
//$secteur=stripslashes($secteur);
$secteur=str_replace("Array","",$secteur);
$secteur=utf8_encode($secteur);

$postit_2="";
$requete1="SELECT * FROM codif_metier ORDER BY ordre";
$result1=mysql_query ($requete1) or die (mysql_error());
while ($row1=mysql_fetch_array($result1)) {
	$conclusion=utf8_encode($row1['codif_metier']);
	$id_codif_metier=$row1['id_codif_metier'];
	$rubrique=$row1['rubrique'];
	switch($rubrique){
		case 0:
		if (isset($metier)){if (ereg(",".$id_codif_metier.",",$metier)){ $postit_2 .=$conclusion.", ";}}
		break;
	}
}
//echo $postit_2; 

$postit_1="";
$requete1="SELECT * FROM codif_secteur ORDER BY ordre";
$result1=mysql_query ($requete1) or die (mysql_error());
while ($row1=mysql_fetch_array($result1)) {
	$conclusion=utf8_encode($row1['codif_secteur']);
	$id_codif_secteur=$row1['id_codif_secteur'];
	$rubrique=$row1['rubrique'];
	switch($rubrique){
		case 0:
		if (isset($secteur)){if (ereg(",".$id_codif_secteur.",",$secteur)){ $postit_1 .=$conclusion.", ";}}
		break;
	}
}
//echo $postit_1; 

//------------------------------
if(isset($_POST["lieu_trav"])) 
{ 
   $a_choix = $_POST["lieu_trav"]; 
   foreach($a_choix as $val) 
	  { 
	  $lieu_trav .=$val.","; 
	  } 
}
else{ 
   $lieu_trav=""; 
} 
$lieu_trav=stripslashes($lieu_trav);
$lieu_trav=str_replace("Array","",$lieu_trav);
$lieu_trav=str_replace("all","toute la France",$lieu_trav);


if(isset($_POST["ref_annonce"])) 
{ 
   $d_choix = $_POST["ref_annonce"]; 
   foreach($d_choix as $val) 
	  { 
	  	$ref_annonce .=$val.";"; 
	  } 
}
else{ 
   $ref_annonce=""; 
} 
$ref_annonce=stripslashes($ref_annonce);
$ref_annonce=str_replace("Array","",$ref_annonce);


//-----------------------------------------------------------------------------------------------------
// recup et verif du CV -------------------------------------------------------------------------------

if($_FILES['curic']!=""){
	if(isset($_FILES['curic'])){  // params
		unset($erreur);
		$extensions_ok = array('doc', 'docx', 'rtf', 'odt', 'pdf','DOC', 'DOCX', 'RTF', 'ODT', 'PDF');
		$taille_max = 1000000;
		$dest_dossier = 'mail/';
		// utilisez également des slashes sous windows : $dest_dossier  = 'd:/damien/photos/';
		// vérifications  
		if( !in_array( substr(strrchr($_FILES['curic']['name'], '.'), 1), $extensions_ok ) )  
		{    
			$erreur = 'Veuillez sélectionner un fichier de type doc, rtf ou pdf !';    
		}  
		elseif( file_exists($_FILES['curic']['tmp_name'])
				and filesize($_FILES['curic']['tmp_name']) > $taille_max)  
		{    
			$erreur = 'Votre fichier doit faire moins de 1 Mo !';  
		}  
		// copie du fichier  
		if(!isset($erreur))  {    
			$dest_fichier = basename($_FILES['curic']['name']);
			// formatage nom fichier    
			// enlever les accents    
			$dest_fichier = strtr($dest_fichier,     
			'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',     
			'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');    
			// remplacer les caracteres autres que lettres, chiffres et point par _    
			$dest_fichier = preg_replace('/([^.a-z0-9]+)/i', '_', $dest_fichier);    
			// copie du fichier    
			move_uploaded_file($_FILES['curic']['tmp_name'], $dest_dossier . $dest_fichier); 
		}
	}
}

//-----------------------------------------------------------------------------------------------------
// recup et verif de la lettre de motivation ----------------------------------------------------------

if($_FILES['lettre']!=""){
	if(isset($_FILES['lettre'])){  // params
		unset($erreur);
		$extensions_ok = array('doc', 'docx', 'rtf', 'odt', 'pdf','DOC', 'DOCX', 'RTF', 'ODT', 'PDF');
		$taille_max = 1000000;
		$dest_dossier = 'mail/';
		// utilisez également des slashes sous windows : $dest_dossier  = 'd:/damien/photos/';
		// vérifications  
		if( !in_array( substr(strrchr($_FILES['lettre']['name'], '.'), 1), $extensions_ok ) )  
		{    
			$erreur = 'Veuillez sélectionner un fichier de type doc, rtf ou pdf !';    
		}  
		elseif( file_exists($_FILES['lettre']['tmp_name'])
				and filesize($_FILES['lettre']['tmp_name']) > $taille_max)  
		{    
			$erreur = 'Votre fichier doit faire moins de 1 Mo !';  
		}  
		// copie du fichier  
		if(!isset($erreur))  {    
			$dest_fichier2 = basename($_FILES['lettre']['name']);
			// formatage nom fichier    
			// enlever les accents    
			$dest_fichier2 = strtr($dest_fichier2,     
			'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',     
			'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');    
			// remplacer les caracteres autres que lettres, chiffres et point par _    
			$dest_fichier2 = preg_replace('/([^.a-z0-9]+)/i', '_', $dest_fichier2);    
			// copie du fichier    
			move_uploaded_file($_FILES['lettre']['tmp_name'], $dest_dossier . $dest_fichier2); 
		}
	}
}

//echo "//".$ref_annonce."//";

//envoi email(s) indépendants
include "libmail.php";
$tableau = explode(";",$ref_annonce);
		  $countA=0;
			// On parcourt le tableau
			foreach($tableau as $index=>$valeur){
				
				if($valeur!="" && $valeur!=";" && $valeur!=";;" && $valeur!=";;;" && $valeur!="-1"){
					
					if($_FILES['curic']['name']!=""){
	
						$requeteF="SELECT * FROM annonces WHERE ID_annonce='$valeur'";
						$resultF=mysql_query ($requeteF) or die (mysql_error());
						$rowF=mysql_fetch_array($resultF);
						$intitule=$rowF['intitule'];
						
$corps="
Réf. de l'annonce : 
$valeur ".utf8_encode($intitule)."

Métier recherché :
".html_entity_decode($postit_2)."

Secteur :
".html_entity_decode($postit_1)." 

Lieu : 
".html_entity_decode($lieu_trav)."

Email : $email1";
						
						//recherche email annonce
						$requeteAA="SELECT email FROM user_btpcadres LEFT OUTER JOIN annonces ON annonces.ID_user = user_btpcadres.ID_user WHERE ID_annonce='$valeur'";
						$resultAA=mysql_query ($requeteAA) or die (mysql_error());
						$rowAA=mysql_fetch_array($resultAA);
						
						//echo $rowAA['email'];
						
						
						$m= new Mail; // create the mail
						$m->From( "$email1" );
						
						if($valeur=="candidature spontanee"){
							$m->To( "contact@corhombtp.com" );
							//$m->To( "anthony.martin@corhombtp.com" );
						} else { 
							$m->To( $rowAA['email'] );
							//$m->To( "anthony.martin@corhombtp.com" );
							 
						}
						
						//$m->To( "contact@btpcadres.com" );
						$m->Subject( "Depot de candidature CORHOM BTP" );
						$m->Body($corps);	// set the body
						//$m->Cc( "someone@somewhere.fr");
						//$m->Bcc( "someoneelse@somewhere.fr");
						$m->Priority(1) ;	
						$m->Attach( "mail/".$dest_fichier, "", "attachement" ) ;	
						if($_FILES['lettre']['name']!="") {
							$m->Attach( "mail/".$dest_fichier2, "", "attachement" ) ;
						}	
						$m->Send();	// send the mail
						//echo "Service en maintenance, veuillez réessayer plus tard svp.";
					} else {
						$message_erreur="Votre email n'a pas été envoyé car il ne contient pas de pièces jointes.<br><br><a href=\"javascript:history.back()\" class=\"retour_cv hvr-icon-wobble-horizontal\"><i class=\"fa fa-arrow-circle-left hvr-icon\"></i> Retour</a>";
					}
					
				} 
				$countA++;
			}
			
			
	

if ($_FILES['curric']['name']!="") {
	unlink($dest_dossier . $dest_fichier);
}
if ($_FILES['lettre']['name']!="") {
	unlink($dest_dossier . $dest_fichier2);
}

?>
<!DOCTYPE html>
<html lang="en" class=" js no-touch cssanimations csstransforms csstransforms3d csstransitions cssfilters preserve3d">
  <head>
    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Formulaire de contact</title>
	<meta name="description" content="Contactez-nous grâce au formulaire ci-dessous."/>
	<meta name="keywords" content="mentions légales, siret, code APE, SARL CORHOM BTP"/>
	<meta name="author" content="corhombtp.com"/>
	<link rel="icon" href="images/favicon.gif" type="image/gif"/>
    <link href="css/general.css" rel="stylesheet">
	<!-- Bootstrap -->
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	  
	<!-- animation menu -->  
	<link href="css/hover.css" rel="stylesheet" media="all">
	  
	<!-- formulaire animations -->
	<link href="css/style_form_love.css" rel="stylesheet" media="all">
	
	  
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">  
	<script type="text/javascript" async="" src="js/ga.js"></script>
	<script src="js/modernizr.min.js"></script>
	<script src="js/jquery-1.8.3.min.js"></script>
	<!-- icons -->
	<link href="css/fontawesome-all.css" rel="stylesheet" media="all"> 
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Caveat|Nunito|PT+Sans" rel="stylesheet">
	<link rel="stylesheet" href="css/select.css">
  </head>
  <body >
	 
	  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php"><img src="images/corhom_btp.png" width="255" height="72" alt=""/></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-contro  +-+
			  -ls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <? require("menu.php"); ?>
    </nav>
    <div class="vide"></div>
    <section>
            
      <div class="container">
        <!--<div class="row">
          <div class="col-12 mb-2 text-center">
            <br><h2>Contactez-nous</h2>
          </div>
        </div>-->
        <div class="row">
          <div class="col-12 mb-2 dancing">
            <h3 class="dancing_h3" id="notre_demarche"><br>
            Déposez votre CV</h3>
		    <form action="depot_cv_ok.php" method="post" name="form1" id="form1" enctype="multipart/form-data">
			  
				
				
				<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="14%"></td>
                    <td width="86"></td>
                  </tr>
                  <tr>
                    <td height="600" colspan="2" valign="top"><div align="center">
                      <br>
                      <? if($message_erreur!=""){ echo $message_erreur; } 
				 	else { echo "Nous vous remercions pour votre candidature. Elle sera &eacute;tudi&eacute;e dans les meilleurs d&eacute;lais.<br />"; }
				?>
                    </div></td>
                  </tr>
                </table>
			</form>
          </div>
        </div>
			
		
      </div>
    </section>
    
    <footer class="footer-distributed">

			<?
		include("footer.php")
		?>

  </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.2.1.min.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script> 
    <script src="js/bootstrap-4.0.0.js"></script>
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
		try {
		var pageTracker = _gat._getTracker("UA-2606770-2");
		pageTracker._trackPageview();
		} catch(err) {}
	</script>
	  
	</body>
</html>