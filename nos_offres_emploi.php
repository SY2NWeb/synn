<?
// BDD BTPC
include("connect_btpc.php");

//connexion
mysql_connect($dbhost,$dbuser,$dbpass) or die (mysql_error());
mysql_selectdb($dbname);

if(isset($_POST['page']) && $_POST['page']=="index"){
	$recherche="SELECT DISTINCT annonces.intitule, annonces.ID_annonce, annonces.ville, annonces.secteur, annonces.departement, annonces.date, codif_secteur.id_codif_secteur,
codif_secteur.rubrique, codif_secteur.id_niv1, codif_secteur.id_niv2, departement.id_region FROM annonces
LEFT OUTER JOIN departement ON SUBSTR(annonces.departement, 1, CHAR_LENGTH(annonces.departement) - 1) = departement.id_departement LEFT OUTER JOIN codif_secteur ON codif_secteur.id_codif_secteur = REPLACE(annonces.secteur,',','') WHERE (ID_user='1299' OR ID_user='1303' OR ID_user='1300' OR ID_user='1301' OR ID_user='1302' OR ID_user='1267' OR ID_user='2005' OR ID_user='450' OR ID_user='3941' OR ID_user='4600' OR ID_user='4594' OR ID_user='4602' OR ID_user='4596' OR ID_user='4597' OR ID_user='9815') AND validation='1' AND poste LIKE(',".$_POST['metier'].",')";
} else {
	$recherche="SELECT DISTINCT annonces.intitule, annonces.ID_annonce, annonces.ville, annonces.secteur, annonces.departement, annonces.date, codif_secteur.id_codif_secteur,
codif_secteur.rubrique, codif_secteur.id_niv1, codif_secteur.id_niv2, departement.id_region FROM annonces
LEFT OUTER JOIN departement ON SUBSTR(annonces.departement, 1, CHAR_LENGTH(annonces.departement) - 1) = departement.id_departement LEFT OUTER JOIN codif_secteur ON codif_secteur.id_codif_secteur = REPLACE(annonces.secteur,',','') WHERE (ID_user='1299' OR ID_user='1303' OR ID_user='1300' OR ID_user='1301' OR ID_user='1302' OR ID_user='1267' OR ID_user='2005' OR ID_user='450' OR ID_user='3941' OR ID_user='4600' OR ID_user='4594' OR ID_user='4602' OR ID_user='4596' OR ID_user='4597' OR ID_user='9815') AND validation='1'";
}

if (isset($_POST['secteur'])){
	$secteur=$_POST['secteur'];
	if($secteur!='tous' && substr($secteur,0,2)!='TT' && substr($secteur,0,2)!='ST'){
		$recherche .=" AND secteur LIKE '%,$secteur,%'";
	}
	if(substr($secteur,0,2)=='TT'){
		//echo " 1";
		$recherche .=" AND id_niv1='".str_replace("TT","",$secteur)."'";
	}
	if(substr($secteur,0,2)=='ST'){
		//echo " 1";
		$recherche .=" AND id_niv2='".str_replace("ST","",$secteur)."'";
	}
}


if (isset($_POST['choix_dpt'])){
	$choix_dpt=$_POST['choix_dpt'];
	//echo substr($choix_dpt,0,2);
	if($choix_dpt!='all' && $choix_dpt!='international' && substr($choix_dpt,0,2)!='RR'){
		//echo " 0";
		$recherche .=" AND annonces.departement LIKE '$choix_dpt,'";
	}
	if(substr($choix_dpt,0,2)=='RR'){
		//echo " 1";
		$recherche .=" AND (departement.id_region='".str_replace("RR","",$choix_dpt)."' OR annonces.departement='all,')";
	}
}


if (isset($_GET['or'])){
	$ordre=$_GET['or'];
	if($ordre=="date"){ $recherche .=" ORDER BY date DESC"; }
	if($ordre=="dpt"){ $recherche .=" ORDER BY departement ASC, date DESC"; }
} else { $recherche .=" ORDER BY id_annonce DESC, date DESC"; }

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
            <h3 class="dancing_h3_bleu" id="notre_demarche"><br>
            Nos offres d'emploi</h3>
			  
            <div align="justify">
                <p>
                 <table width="100%" border="0" align="center" cellpadding="2" cellspacing="0">
				 <TR>
                   <TD><form id="form1" name="form1" method="post" action="">
                       <label>
                         <select name="choix_dpt" class="select_depot" id="choix_dpt" onChange="this.form.submit()">
						  	<option value="all" <? if($choix_dpt=="all"){ echo "selected"; }?>>Toute la France</option>
							<option value="International" <? if (ereg("International","$choix_dpt")){echo "selected";} ?>>International</option>
						  	<?     
                         	$requete3="SELECT * FROM `region` WHERE 1";
							$result3=mysql_query ($requete3) or die (mysql_error());
							while ($row3=mysql_fetch_array($result3)) {
								$id_region=$row3['id_region'];
								$nom_region=utf8_encode($row3['region']);
								/*
								echo "<optgroup label=\"$nom_region\" style=\"background-color: #eee; color:#000; font-style:normal;\">";*/
								
								echo "<option value=\"RR".$id_region."\" style=\"background-color: #eee; color:#000; font-style:normal;\" "; 
								if ($choix_dpt=="RR".$id_region){echo "selected";}
								echo ">$nom_region</option>";
								
								$requete4="SELECT * FROM `departement` WHERE id_region='$id_region' ORDER BY id_departement ASC";
								$result4=mysql_query ($requete4) or die (mysql_error());
								while ($row4=mysql_fetch_array($result4)) {
									$id_departement=$row4['id_departement'];
									$departementbis=utf8_encode($row4['departement']);
									echo "<OPTION value='$id_departement' style=\"color:#000000; background-color:#fff;\" ";
									if ($choix_dpt==$id_departement){echo "selected";} 
									echo ">$id_departement $departementbis</OPTION>";
								}
							}
						   ?>
                          </select> |
                         <select name="secteur" class="select_depot" id="secteur" onChange="this.form.submit()">
						  <option value="tous" <? if($secteur=="tous"){ echo "selected"; }?>>Tous les secteurs</option>
						  <?     
                        $requete1="SELECT * FROM codif_secteur ORDER BY ordre";
                        $result1=mysql_query ($requete1) or die (mysql_error());
                        while ($row1=mysql_fetch_array($result1)) {
                            $conclusion=$row1['codif_secteur'];
                            $id_codif_secteur=$row1['id_codif_secteur'];
                            $rubrique=$row1['rubrique'];
							
							$req_detail="SELECT * FROM annonces WHERE (ID_user='1299' OR ID_user='1303' OR ID_user='1300' OR ID_user='1301' OR ID_user='1302' OR ID_user='1267' OR ID_user='2005' OR ID_user='450' OR ID_user='3941' OR ID_user='4600' OR ID_user='4594' OR ID_user='4602' OR ID_user='4596' OR ID_user='4597') AND validation='1' AND secteur LIKE (',$id_codif_secteur,')";
							$res_detail=mysql_query ($req_detail) or die (mysql_error());
							$tot=mysql_num_rows($res_detail);
							
                            switch($rubrique){
                                case 0:
									// secteur
                                echo "<OPTION value='$id_codif_secteur' style=\"color:#fff; background-color:#515253; font-style:none !important;\" ";
                                if (isset($secteur)){
                                    if ($secteur==$id_codif_secteur){echo "selected"; }
                                }
								
								echo ">$conclusion ";
								if($tot>0){ echo "(".$tot.")"; }
								echo "</OPTION>";    
								break;
                                
                                case 1:
									// titre
                                echo "</optgroup><option value=\"TT$id_codif_secteur\" style=\"background-color:#fff; color:#515253; font-style:none !important;\"";
								if (isset($secteur)){
                                    if ($secteur=="TT".$id_codif_secteur){echo "selected"; }
                                }
								echo">$conclusion</option>";
                                break;
                                
                                case 2:
									// sous titre
                                echo "</optgroup><option value=\"ST$id_codif_secteur\" style=\"font-style:none !important;\"";
								if (isset($secteur)){
                                    if ($secteur=="ST".$id_codif_secteur){echo "selected"; }
                                }
								echo ">-> $conclusion</option>";
                                break;
                                
                            }
                        } echo $secteur; ?>
                          </select>
                         </label> | 
					   <!-- <a href="nos_offres_emploi.php?or=date" class="rech_offre" >Trier par date</a> | -->
					   <a href="nos_offres_emploi.php" class="rech_offre" >Tout afficher</a> <br />
                       <br />                   
                       </form>
					 </TD>
					 </TR></table>
				 <?
                          $nombre=1;
						  $color=0;
						  //echo "<a href=\"\" title=\"$recherche\">.</a>";
						  //echo $recherche;
							$result_recherche=mysql_query($recherche) or die (mysql_error());
							$total_lignes=mysql_num_rows($result_recherche);

						  while ($row=mysql_fetch_array($result_recherche)){
						  	$titre=utf8_encode($row['intitule']);
							$ville=utf8_encode($row['ville']);
							$secteur=utf8_encode($row['secteur']);
							//$secteur=substr($row['secteur'],0,(strlen($row['secteur'])-1));
							$ID_annonce=$row['ID_annonce'];
							//echo "<a title=\"$ID_annonce\">.</a> ";
							
							if($row['departement']!="all," && $row['departement']!="International,"){  
								$departement=substr($row['departement'],0,(strlen($row['departement'])-1));
								$reqdpt="SELECT * FROM `departement` WHERE id_departement='$departement'";
								$resdpt=mysql_query ($reqdpt) or die (mysql_error());
								while ($row3=mysql_fetch_array($resdpt)) {
									$departement_final=utf8_encode($row3['departement']);
								}
						  	} else {
								if($row['departement']=="all,"){ $departement_final="France"; }
								if($row['departement']=="international"){ $departement_final="International"; }
							}
					 
							$date=$row['date'];
							
							$annee_s = substr($date, 0, 4);
							$mois_s = substr($date, 5, 2);
							$jour_s = substr($date, 8, 2);
							$date_final=$jour_s."/".$mois_s."/".$annee_s; 
							/*
							if(ereg("Carri?re Publique-Para Publique","$secteur")){
								echo "<tr class=\"rech_fd\">";
							 } else { echo "<tr class=\"rech_fd\">"; }
							*/
							echo "<div class=\"div1\" onclick=\"document.location='offre.php?id=".$ID_annonce."'\"><div class=\"div_titre\"><span class=\"offre_poste\">".stripslashes($titre)." F/H</span><BR/>";
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
								
							echo "<span class=\"offre_secteur\">$postit_1</span><BR /><BR />";
							echo " <span class=\"offre_dpt\" id=\"dpt2\">".$ville."</span>";  // $departement_final." - ".
							
							echo "</div><div class=\"div2\"><span class=\"offre_date\">$date_final</span><BR /><span class=\"offre_ref\">R&eacute;f. ".$ID_annonce."</span></div></div>";
							$nombre++;
							$color++;
						  	}
							?>
								  

							
							
                      <div align="center">
                        <? if ($total_lignes<1){
                                    echo "<br><br><STRONG>Nous n?avons aucune annonce actuellement correspondant &agrave; vos crit&egrave;res. <br>N?h&eacute;sitez pas le cas &eacute;ch&eacute;ant &agrave; &eacute;largir votre zone g&eacute;ographique ou votre secteur d?activit&eacute; !</STRONG>";
                                } else {
									echo " <div ralign=\"center\"><br />
                        en partenariat avec <a href=\"http://www.btpcadres.com\" style=\"color:#42474a;\" target=\"_blank\" class=\"offre\"><img src=\"images/logo-btpcadres.jpg\" alt=\"offres d'emploi BTP et recrutement BTP batiment travaux publics\" height=\"35\" border=\"0\" align=\"absmiddle\" /><BR>Offres d'emploi pour les cadres et les techniciens de la construction</a><br />";
								} ?>
                        <br />
                        <br />
                        <br />
                      
                      </div>
                </p>
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