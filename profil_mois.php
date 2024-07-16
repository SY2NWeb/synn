<?
include('connect.php');

//connexion
mysql_connect($dbhost,$dbuser,$dbpass) or die (mysql_error());
mysql_selectdb($dbname);



?>
<!DOCTYPE html>
<html lang="en" class=" js no-touch cssanimations csstransforms csstransforms3d csstransitions cssfilters preserve3d">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Les profils du mois</title>
	<meta name="description" content="CORHOM vous propose différents services : Nous recrutons pour vous de plusieurs manières. Nous vous accompagnons à l'aide de bilans de compétences et d'accompagnement à la recherche d'emplois."/>
	<meta name="keywords" content="demarche,autre façon de recruter, bilans de compétence, évaluation interne"/>
	<meta name="author" content="corhombtp.com"/>
	<link rel="icon" href="images/favicon.gif" type="image/gif"/>
    
    <link href="css/general.css" rel="stylesheet">
	<!-- Bootstrap -->
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	<!-- animation menu -->  
	<link href="css/hover.css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">  
	<script type="text/javascript" async="" src="js/ga.js"></script>
	<script src="js/modernizr.min.js"></script>
	<script src="js/jquery-1.8.3.min.js"></script>
	<!-- icons -->
	<link href="css/fontawesome-all.css" rel="stylesheet" media="all"> 
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Caveat|Nunito|PT+Sans" rel="stylesheet">
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
        <div class="row">
          <div class="col-12 mb-2 text-center">
            <br>
            <h2 class="dancing_h2">Les profils du mois</h2><br>Retrouvez ici chaque mois des profils que nous mettons en avant.
          </div>
        </div>
        <div class="row">
          <div class="row">
            <div class="col-12 mb-2 dancing">
              <h3 class="dancing_h3" id="notre_demarche">T&eacute;l&eacute;chargez nos bulletins</h3>
              <p>
				   <? 
  			    $recherche="SELECT * FROM histo_bulletin WHERE date NOT LIKE '".date("my")."' ORDER BY id_histo DESC LIMIT 0,6";
				$result_recherche=mysql_query($recherche) or die (mysql_error());
				while($row=mysql_fetch_array($result_recherche)){
					echo "<img src=\"images/pdf.png\" alt=\pdf\" width=\"45\"  border=\"0\" /><a href=\"./convergence/bulletin".$row['date'].".pdf\" target=\"_blank\" class=\"titre_bleu\">";
					  $mois_suivant=substr($row['date'],0,2);
					  if($mois_suivant=="01"){ echo "JANVIER ";}
					  else if($mois_suivant=="02"){ echo "FEVRIER ";}
					  else if($mois_suivant=="03"){ echo "MARS ";}
					  else if($mois_suivant=="04"){ echo "AVRIL ";}
					  else if($mois_suivant=="05"){ echo "MAI ";}
					  else if($mois_suivant=="06"){ echo "JUIN ";}
					  else if($mois_suivant=="07"){ echo "JUILLET ";}
					  else if($mois_suivant=="08"){ echo "AOUT ";}
					  else if($mois_suivant=="09"){ echo "SEPTEMBRE ";}
					  else if($mois_suivant=="10"){ echo "OCTOBRE ";}
					  else if($mois_suivant=="11"){ echo "NOVEMBRE ";}
					  else if($mois_suivant=="12"){ echo "DECEMBRE ";}
					  echo " 20".substr($row['date'],2,2)."</a><br>";
				
				}
				  
				   
				?>
              </p>
  <br>
              </p>
            </div>
          </div>
        </div>
     
        <div class="row"></div>
		
		<div class="row"></div>
		
		<div class="row"></div>
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