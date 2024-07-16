<?
// BDD CORHOM
include("connect_btpc.php");


if (isset($_GET['id'])){
	$recherche="SELECT * FROM annonces WHERE ID_annonce='".$_GET['id']."'";
} else { header("Location: nos_offres_emploi.php"); }


$result_recherche=mysql_query($recherche) or die (mysql_error());
$total_lignes=mysql_num_rows($result_recherche);
?>

<!DOCTYPE html>
<html lang="en" class=" js no-touch cssanimations csstransforms csstransforms3d csstransitions cssfilters preserve3d">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Formulaire de contact</title>
	<meta name="description" content="Contactez-nous gr?ce au formulaire ci-dessous."/>
	<meta name="keywords" content="mentions l?gales, siret, code APE, SARL CORHOM BTP"/>
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
      <!--<div class="container">
        <div class="row">
          <div class="col-lg-12 mb-4 mt-2 text-center">
            <h2>Vous ?tes</h2>
          </div>
        </div>
      </div>-->
      <!--<div class="container ">
       <div class="row">
          <div class="col-sm-12 mt-4 mb-2 text-center">
            <h2>TESTIMONIALS</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-6">
            <blockquote class="blockquote">
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <small class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></small> 
            </blockquote>
          </div>
          <div class="col-sm-6 col-lg-6">
            <blockquote class="blockquote">
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <small class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></small> 
            </blockquote>
          </div>
          <div class="col-sm-6 col-lg-6">
            <blockquote class="blockquote">
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <small class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></small> 
            </blockquote>
          </div>
          <div class="col-sm-6 col-lg-6">
            <blockquote class="blockquote">
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <small class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></small> 
            </blockquote>
          </div>
        </div>
      </div>-->
      
      <div class="container">
        <!--<div class="row">
          <div class="col-12 mb-2 text-center">
            <br><h2>Contactez-nous</h2>
          </div>
        </div>-->
        <div class="row">
          <div class="col-12 mb-2 dancing">
            <br><br><a href="javascript:history.back()" class="retour_h3 hvr-icon-wobble-horizontal"><i class="fa fa-arrow-circle-left hvr-icon"></i> Retour aux offres d'emploi</a><br>
			  
            <div align="justify">
                <div class="offre">
				 <?
						  $row=mysql_fetch_array($result_recherche);
						  if($row['validation']=='2'){echo "<tr><td align=\"center\">L'annonce n'est plus valable.</td></tr>"; }
						  else {
						  $result_recherche=mysql_query($recherche) or die (mysql_error());
						  while ($row2=mysql_fetch_array($result_recherche)){
						  	$titre=utf8_encode($row2['intitule']);
							$ville=utf8_encode($row2['ville']);
							$secteur=$row2['secteur'];
							$ID_annonce=$row2['ID_annonce'];
							$departement=substr($row2['departement'],0,(strlen($row2['departement'])-1));
							$departement=str_replace("all","",$departement);
							$date=$row2['date'];
							$contrat=$row2['contrat'];
							$experience=$row2['experience'];
							$niveau=$row2['niveau'];
							$description=$row2['description'];
							$profil=$row2['profil'];
							
							$annee_s = substr($date, 0, 4);
							$mois_s = substr($date, 5, 2);
							$jour_s = substr($date, 8, 2);
							$date_final=$jour_s."/".$mois_s."/".$annee_s; 
							
							//$numligne=mysql_num_rows($result_recherche);
							//if($numligne%6==1){ ceho"<tr><td>$numligne</td></tr>"; }
							
							echo "<div class=\"offre2_titre\">".stripslashes($titre)." F/H</div><BR />";
							 
							 	$postit_1="";
								$requete1="SELECT * FROM codif_secteur ORDER BY ordre";
								$result1=mysql_query ($requete1) or die (mysql_error());
								while ($row1=mysql_fetch_array($result1)) {
									$conclusion=$row1['codif_secteur'];
									$id_codif_secteur=$row1['id_codif_secteur'];
									$rubrique=$row1['rubrique'];
									switch($rubrique){
										case 0:
										if (isset($secteur)){if (ereg(",".$id_codif_secteur.",",$secteur)){ $postit_1=$conclusion;}}
										break;
									}
								}
							 
							 
							echo "<span class=\"offre2_secteur\">Secteur: $postit_1</span><BR /><BR />";
							echo "$date_final<BR />";
							echo "<STRONG>Localisation : </STRONG>".$ville;
							//if($departement!=""){ echo " ($departement)"; }
							echo "<BR><BR>
							  <STRONG>Type de contrat : </STRONG>";
							  $contrat=str_replace("Array","",$contrat);
							  $contrat=substr($contrat,0,(strlen($contrat)-1));
							  echo utf8_encode($contrat)."<BR>
							  <STRONG>Niveau d'exp&eacute;rience requis : </STRONG>".utf8_encode($experience)."<BR>
							  <STRONG>Niveau d'&eacute;tude requis : </STRONG>".utf8_encode($niveau)."<BR><BR><div align=\"justify\">".nl2br(htmlentities($description))."<BR><BR><BR />".nl2br(utf8_encode($profil))."<BR /><BR />Ref.: <span class=\"titre_noir\">".$ID_annonce."</span><DIV align=\"center\"><a href=\"depot_cv.php?o=1&id=".$ID_annonce."\" class=\"postuler hvr-icon-wobble-horizontal\">Postuler &agrave; cette offre <i class=\"fa fa-arrow-circle-right hvr-icon\"></i></A></DIV>";
						  }
						 } 
							?>
				    </div>
                </div>
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