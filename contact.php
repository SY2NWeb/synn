<!DOCTYPE html>
<html lang="en" class=" js no-touch cssanimations csstransforms csstransforms3d csstransitions cssfilters preserve3d">
  <head>
    <meta charset="utf-8">
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
      <!--<div class="container">
        <div class="row">
          <div class="col-lg-12 mb-4 mt-2 text-center">
            <h2>Vous �tes</h2>
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
            <h3 class="dancing_h3" id="notre_demarche"><br>
            Contactez-nous</h3>
		    <form action="contact-ok.php" method="post" name="form1" id="form1">
			  
				
				
				<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="14%"></td>
                    <td colspan="3"></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="3">
                      
					  
					    <div>Vous souhaitez contacter notre agence de : </div>
						<!-- Custom select structure --> 
						<div class="select_mate" data-mate-select="active" >
							<select name="agence" onchange="" onclick="return false;" id="">
							<option value="choisissez"  >Choisissez </option>
							<option value="dijon">Dijon</option>
							<option value="lyon" >Lyon</option>
							</select>

							<p class="selecionado_opcion"  onclick="open_select(this)" ></p><span onclick="open_select(this)" class="icon_select_mate" ><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
								<path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
								<path d="M0-.75h24v24H0z" fill="none"/>
							</svg></span>
							<div class="cont_list_select_mate">
							  <ul class="cont_select_int">  </ul> 
							</div>
						</div>
						
	
				    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="3">&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="3">
					   <div class="radio">
						  Vous &ecirc;tes ?
							<input id="candidat" type="radio" name="statut" value="candidat" checked>
							<label for="candidat">un candidat</label>
							<input id="entreprise" type="radio" name="statut" value="entreprise">
							<label for="entreprise">une entreprise</label>
						   <input id="etudiant" type="radio" name="statut" value="etudiant">
							<label for="etudiant">un &eacute;tudiant</label>
						</div>
					  </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="3">&nbsp;</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td colspan="3">
						
                    
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td width="86%" ><div class="row_form">
						  <span>
							<input required class="balloon" id="email" name="email" type="text" placeholder=""/><label for="class">Email</label>
						</span><span class="obligatoire" title="Requis">* <span style="font-size: 0.7em;">champ obligatoire</span></span></div> <div class="row_form">
						  <span>
							<input required class="balloon" id="nom" name="nom" type="text" placeholder="" /><label for="class">Nom</label>
						  </span><span class="obligatoire" title="Requis">*</span></div></td>
					 <td>&nbsp;</td>
					  <td></td>
                  </tr>
                  <tr>
                    <td height="22"></td>
                    <td colspan="3">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="22">&nbsp;</td>
                    <td colspan="3"><div class="row_form">
						  <span>
							<input class="balloon" id="societe" name="societe" type="text" placeholder="" /><label for="class">Soci&eacute;t&eacute;</label>
						  </span>
					</div></td>
                  </tr>
                  <tr>
                    <td height="22"></td>
                    <td colspan="3"><div class="row_form">
						  <span>
							<input class="balloon" id="telephone" name="telephone" type="text" placeholder="" /><label for="class">T&eacute;l&eacute;phone</label>
						  </span>
					</div></td>
                  </tr>
                  <tr>
                    <td height="23">&nbsp;</td>
                    <td colspan="3">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="22"></td>
                    <td><div class="row_form">
						  <span>
							<input class="balloon" id="adresse" name="adresse" type="text" placeholder="" /><label for="class">Adresse</label>
						  </span>
					</div></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="22"></td>
                    <td colspan="3"><div class="row_form"> <span>
                      <input class="balloon" id="codepostal" name="codepostal" type="text" placeholder="" /><label for="class2">Code postal</label>
                    </span></div> 
                        <div class="row_form"> <span>
                          <input class="balloon" id="ville" name="ville" type="text" placeholder="" />
                          <label for="class3">Ville</label>
                        </span> </div>
                    </td>
                  </tr>
                  <tr>
                    <td nowrap="nowrap">&nbsp;</td>
                    <td colspan="3">&nbsp;</td>
                  </tr>
                  <tr>
                    <td nowrap="nowrap">&nbsp;</td>
                    <td colspan="3" valign="top">
					  <textarea required class="balloon_tx" id="commentaire" name="commentaire" placeholder="votre message" cols="40" rows="5"></textarea>
				    <span class="row_form"><span class="obligatoire" title="Requis">*</span></span>				    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="3"><p><br>
                    Conform&eacute;ment  au R&egrave;glement G&eacute;n&eacute;ral sur la Protection des Donn&eacute;es (RGPD) applicable au 25 Mai  2018 et à la loi n° 78-17 du 6 janvier 1978 modifi&eacute;e relative &agrave; l'informatique,  aux fichiers et aux libert&eacute;s, nous vous informons qu'en nous communiquant vos  informations, vous consentez à ce que vos donn&eacute;es soient conserv&eacute;es dans le but  de vous fournir les informations ou services pour lesquels vous nous avez  sollicit&eacute;s, dans le cadre de nos activit&eacute;s. <a href="mentions_legales.php" class="adresse">En savoir plus</a></p>
                    <p>
                      <input name="checkbox" type="checkbox" required="required" id="checkbox">
                      <label for="checkbox">Je comprends et j'accepte  </label>
                    </p></td>
                  </tr>
                  <tr>
                    <td height="26" colspan="4"><div align="center">
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
	  <!-- select -->
	  <script src="js/select.js"></script>
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