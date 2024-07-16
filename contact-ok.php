<?

$message="
Demande d'informations pour $agence: \n

Vous etes : ".stripslashes($_POST['statut'])."\n
Email: ".stripslashes($_POST['email'])."\n
Nom : ".stripslashes($_POST['nom'])." 
Societe : ".stripslashes($_POST['societe'])." \n
Telephone : ".stripslashes($_POST['telephone'])."
Adresse : ".stripslashes($_POST['adresse'])."
Code postal : ".stripslashes($_POST['codepostal'])."
Ville : ".stripslashes($_POST['ville'])." \n
Commentaire : ".stripslashes($_POST['commentaire'])." \n";
			
			
include "libmail.php";
	$m= new Mail; // create the mail
	$m->From( $_POST['email'] );
	if($_POST['agence']=='dijon'){	 $m->To( "contact@corhombtp.com" ); }
	if($_POST['agence']=='lyon'){	 $m->To( "contact@corhombtp.com" ); }
	if($_POST['agence']=='paris'){	 $m->To( "contact@corhombtp.com" ); }
	if($_POST['choix']=='entreprise'){	 $m->Subject( "Demande d'informations d'une ENTREPRISE pour corhombtp.com" ); }
	else { $m->Subject( "Demande d'informations du site corhombtp.com" ); }
	$m->Body( utf8_decode($message) );	// set the body
	//$m->Cc( "someone@somewhere.fr");
	//$m->Bcc( "someoneelse@somewhere.fr");
	$m->Priority(1) ;	
	//$m->Attach( "LES_HOMMES.doc", "", "attachement" ) ;	// attach a file of type image/gif to be displayed in the message if possible
	$m->Send();	// send the mail




?>
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
            <h2>Vous êtes</h2>
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
		    <form action="contact2.php" method="post" name="form1" id="form2">
			  
				
				
				<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="14%"></td>
                    <td width="86"></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td height="400" valign="top"><br>
                      Votre demande vient d'&ecirc;tre envoy&eacute;e. Celle-ci sera étudiée dans les meilleurs délais.</td>
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