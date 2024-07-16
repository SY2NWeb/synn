<?
// BDD BTPC
include("connect_btpc.php");

//connexion
mysql_connect($dbhost,$dbuser,$dbpass) or die (mysql_error());
mysql_selectdb($dbname);

if (isset($_GET['id'])){
	$ref=$_GET['id'];
} else { $ref=""; }

if (isset($_GET['o'])){
	$o=$_GET['o'];
} 
if (isset($_POST['o'])){
	$o=$_POST['o'];
} 
if (!isset($_GET['o']) && !isset($_POST['o'])){ $o=""; }
 
?>
<!DOCTYPE html>
<html lang="en" class=" js no-touch cssanimations csstransforms csstransforms3d csstransitions cssfilters preserve3d">
  <head>
    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Formulaire de contact</title>
	<meta name="description" content="Contactez-nous gr&agrave;ce au formulaire ci-dessous."/>
	<meta name="keywords" content="mentions l&eacute;gales, siret, code APE, SARL CORHOM BTP"/>
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
            <h3 class="dancing_h3_orange" id="notre_demarche"><br>
            D&eacute;posez votre CV</h3>
		    <form action="depot_cv_ok.php" method="post" name="form1" id="form1" enctype="multipart/form-data">
			  
				
				
				<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="14%"></td>
                    <td colspan="2"></td>
                  </tr>
                  <? if($o==""){ 
						echo "<input type=\"hidden\" name=\"ref_annonce[]\" value=\"candidature spontanee\">";
						echo " <!--"; 
					 } ?>
				  <tr>
                    <td>&nbsp;</td>
                    <td colspan="2">
                      
					  
					    
						
	
				    </td>
                  </tr>
                  <tr>
                    <td align="center"><span class="chiffre">1</span></td>
                    <td colspan="2"><strong>(maintenez la touche Ctrl pour des s&eacute;lections multiples)<br>
                      <br>
                    Choisissez la r&eacute;f&eacute;rence de l'annonce pour laquelle vous postulez<br>
                    </strong>
                      <select required name="ref_annonce[]" size="10" multiple="multiple" class="select_depot">
                      
                      <?
								$query="SELECT intitule,ID_annonce FROM annonces WHERE (ID_user='1299' OR ID_user='1303' OR ID_user='1300' OR ID_user='1301' OR ID_user='1302' OR ID_user='1267' OR ID_user='450' OR ID_user='2005' OR ID_user='3941' OR ID_user='4600' OR ID_user='4594' OR ID_user='4602' OR ID_user='4596' OR ID_user='4597' OR ID_user='9815') AND validation='1' ORDER BY ID_annonce DESC";
								$result=mysql_query($query) or die (mysql_error());
								$h=1;
								while ($row=mysql_fetch_array($result)){
									$titre=$row['intitule'];
									$ID_annonce=$row['ID_annonce'];
									echo "<OPTION value=\"$ID_annonce\" ";
									if ($ref==$ID_annonce){echo "selected";}
									echo ">R&eacute;f:$ID_annonce ($titre)</OPTION>";
									$h++;
								}
								?>
                    </select></td>
                  </tr>
                  <? 
					if($o==""){ echo "-->"; }
					if($o=="1"){ echo "<!--"; } ?>					
				<tr>
                    <td>&nbsp;</td>
                    <td colspan="2">
					   
					  </td>
                  </tr>
                  <tr>
                    <td align="center"><span class="chiffre"><? if($o==""){ echo "1"; } else { echo "2"; } ?></span></td>
                    <td colspan="2"><strong>Fonction recherch&eacute;e<br />
                    </strong>
                      <select required name="metier[]" id="metier[]" class="select_depot" size="10" multiple="multiple">
                        
						  <?     
						$postit_1="";
						$requete1="SELECT * FROM codif_metier ORDER BY ordre";
						$result1=mysql_query ($requete1) or die (mysql_error());
						while ($row1=mysql_fetch_array($result1)) {
							$conclusion=$row1['codif_metier'];
							$id_codif_metier=$row1['id_codif_metier'];
							$rubrique=$row1['rubrique'];

							switch($rubrique){
								case 0:
								echo "<OPTION value='$id_codif_metier'";
								if (isset($metier)){
									if (ereg(",".$id_codif_metier.",",$metier)){echo "selected"; }
								}
								echo ">$conclusion</OPTION>";
								break;

								case 1:
								echo "</optgroup><optgroup label=\"$conclusion\" >";
								break;

								case 2:
								echo "</optgroup><optgroup label=\"$conclusion\" >";
								break;
							}
						} ?>
                    </select></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="2">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="center"><span class="chiffre"><? if($o==""){ echo "2"; } else { echo "3"; } ?></span></td>
                    <td width="40%"><strong>Choisissez vos secteurs d'activit&eacute;</strong><br>
                      <select required name="secteur[]" size="15" multiple="multiple" class="select_depot" id="secteur[]">
                      <?     
													$postit_2="";
													$requete1="SELECT * FROM codif_secteur ORDER BY ordre";
													$result1=mysql_query ($requete1) or die (mysql_error());
													while ($row1=mysql_fetch_array($result1)) {
														$conclusion=$row1['codif_secteur'];
														$id_codif_secteur=$row1['id_codif_secteur'];
														$rubrique=$row1['rubrique'];
														switch($rubrique){
															case 0:
															echo "<OPTION value='$id_codif_secteur' style=\"color:#515253; background-color:#FFFFFF; font-style:none !important;\" ";
															if (isset($secteur)){
																if ($secteur==$id_codif_secteur){echo "selected"; }
															}
															echo ">$conclusion</OPTION>";
															break;
															
															case 1:
															echo "</optgroup><optgroup label=\"$conclusion\" style=\"background-color:#fe972e; color:#fff; font-style:none !important;\">";
															break;
															
															case 2:
															echo "</optgroup><optgroup label=\"$conclusion\" style=\"background-color:#ffc081; color:#fff; font-style:none !important;\">";
															break;
															
															case 3:
															echo "</optgroup><optgroup label=\"$conclusion\" >";
															break;
														}
													} ?>
                    </select></td>
                    <td><strong>Choisissez votre mobilit&eacute;</strong><br>
                      <select required name="lieu_trav[]" size="15" multiple="multiple" class="select_depot" id="lieu_trav[]">
                        <option value="International" <? if (ereg("International","$departement")){echo "selected";} ?>>International</option>
                        <option value="all" <? if (ereg("all","$departement")){echo "selected";} ?>>Toute 
                          la France</option>
                        <?
						$requete3="SELECT * FROM `region` WHERE 1";
						$result3=mysql_query ($requete3) or die (mysql_error());
						while ($row3=mysql_fetch_array($result3)) {
						$id_region=$row3['id_region'];
						$nom_region=utf8_encode($row3['region']);
						echo "<optgroup label=\"$nom_region\" style=\"background-color: #fff; color:#515253; font-style:normal;\">";
						$requete4="SELECT * FROM `departement` WHERE id_region='$id_region' ORDER BY id_departement ASC";
						$result4=mysql_query ($requete4) or die (mysql_error());
						while ($row4=mysql_fetch_array($result4)) {
							$id_departement=$row4['id_departement'];
							$departementbis=utf8_encode($row4['departement']);
							echo "<OPTION value='$id_departement' ";
							if (ereg($id_departement.",",$lieu_trav)){echo "selected";} 
							echo ">";
							//if(is_numeric($id_departement)>0){ echo "$id_departement"; }
							echo "$id_departement $departementbis</OPTION>";
						}
						
					}
											  
											  ?>
                    </select></td>
                  </tr>
					<? if($o=="1"){ echo "-->"; } ?>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="2">&nbsp;</td>
                  </tr>
                  <tr>
                    <td rowspan="3" align="center"><span class="chiffre"><? if($o=="1"){ echo "2"; } else { echo "3"; } ?></span></td>
                    <td colspan="2"><strong>Envoi du CV : </strong><span style="color: #fe972e;"> * (champ obligatoire)</span>&nbsp;<br>
					<input name="curic" id="curic" type="file" class="inputfile"> <br>(doc/docx/rtf/odt/pdf <span class="alerte">1 Mo max.</span>)</td>
                  </tr>
                  <tr>
                    <td colspan="2">&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2"><strong>Lettre de motivation (en option) : </strong>&nbsp;<br>
						<input name="lettre" id="lettre" class="inputfile" type="file"><br> (doc/docx/rtf/odt/pdf <span class="alerte">1 Mo max.</span>)</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td colspan="2">
						
                    
                    </td>
                  </tr>
                  <tr>
                    <td align="center"><span class="chiffre"><? if($o=="1"){ echo "3"; } else { echo "4"; } ?></span></td>
                    <td colspan="2"><div class="row_form">
					  <span>
							<input required class="balloon" id="email1" name="email1" type="text" placeholder="" /><label for="class">Email</label>
					  </span>
						  <span class="obligatoire" title="Requis">*</span></div></td>
                  </tr>
                  <tr>
                    <td height="26">&nbsp;</td>
                    <td height="26" colspan="2"><p><br>
                      Conform&eacute;ment  au R&egrave;glement G&eacute;n&eacute;ral sur la Protection des Donn&eacute;es (RGPD) applicable au 25 Mai  2018 et &agrave; la loi n&deg; 78-17 du 6 janvier 1978 modifi&eacute;e relative &agrave; l'informatique,  aux fichiers et aux libert&eacute;s, nous vous informons qu'en nous communiquant vos  informations, vous consentez &agrave; ce que vos donn&eacute;es soient conserv&eacute;es dans le but  de vous fournir les informations ou services pour lesquels vous nous avez  sollicit&eacute;s, dans le cadre de nos activit&eacute;s. <a href="mentions_legales.php" class="adresse">En savoir plus</a></p>
                      <p>
                        <input name="checkbox" type="checkbox" required="required" id="checkbox">
                        <label for="checkbox">Je comprends et j'accepte </label>
                    </p></td>
                  </tr>
                  <tr>
                    <td height="26" colspan="3"><div align="center">
                      
                      &nbsp;<input type="submit" name="Submit" value="Envoyer la demande" class="submit hvr-grow-shadow"/>
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