<!DOCTYPE html>
<html lang="en" class=" js no-touch cssanimations csstransforms csstransforms3d csstransitions cssfilters preserve3d">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Nos références</title>
	<meta name="description" content="CORHOM BTP vous propose différents services : Nous recrutons pour vous de plusieurs manières. Nous vous accompagnons à l'aide de bilans de compétences et d'accompagnement à la recherche d'emplois."/>
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
	
	  <!--[if lt IE 9]><script type="text/javascript" src="excanvas.js"></script><![endif]-->
    <script src="js/tagcanvas.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      
		
		
		
		var o = {
  textColour: '#ff0000',
			ActiveCursor:"default",
            outlineColour: '#ff00ff',
			outlineMethod:"none",
            reverse: true,
            depth: 0.8, animTiming:"Smooth", maxSpeed: 0.03, minSpeed: 0.03, wheelZoom: false, initial: [0,0.02],
};
function tcStart() {
  var s = (new Date).getTime() / 360;
  o.initial[0] = 0.2 * Math.cos(s);
  o.initial[1] = 0.2 * Math.sin(s);
  TagCanvas.Start('myCanvas','tags',o);
}
function tcPause() { TagCanvas.Pause('exampleCanvas'); }
function tcResume() { TagCanvas.Resume('exampleCanvas'); }
function tcRotate() {
  TagCanvas.RotateTag('myCanvas', {
    index: Math.floor(Math.random() * 20), lat: -60, lng: -60, time: 800, active: 1
  });
}
function tcSpeed() {
  var a = Math.random() * Math.PI * 2, b = 0.1 + Math.random() * 0.9;
  TagCanvas.SetSpeed('myCanvas', [b * Math.sin(a), b * Math.cos(a)]);
}
window.onload = function() {
  var counter = 20;
  TagCanvas.Start('myCanvas','tags',o);
  function modTags() {
    var a = document.getElementById('tags').getElementsByTagName('a'), i, r;
    for(i = 0; i < 5; ++i) {
      r = ~~(Math.random() * 20);
      a[r].innerHTML = 'Tag ' + ++counter;
    }
    setTimeout(modTags, 5000);
  }
  setTimeout(modTags, 5000);
}
    </script>
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
            <h2 class="dancing_h2">Nos r&eacute;f&eacute;rences</h2>
          </div>
        </div>
        <div class="row">
          <div class="row">
            <div class="col-12 mb-2 dancing">
								<div id="myCanvasContainer" class="centrage">
									  <canvas width="600" height="600" id="myCanvas">
										<p>Anything in here will be replaced on browsers that support the canvas element</p>
									  </canvas>
									</div>
									<div id="tags">
									  <ul>
										<?
										// on déclare un tableau qui contiendra le nom des fichiers de nos miniatures  
											$tableau = array();  
											// on ouvre notre dossier contenant les miniatures  
											$dossier = opendir ('./images/references/');  
											while ($fichier = readdir ($dossier)) { 
											   if ($fichier != '.' && $fichier != '..' && $fichier != 'index.php') { 
												  // on stocke le nom des fichiers des miniatures dans un tableau 
												  $tableau[] = $fichier; 
											   }  
											}
											sort($tableau);  
											closedir ($dossier);  
											// on compte le nombre de miniatures  
											$nbpics = count($tableau);  

											// si on a au moins une miniature, on les affiche toutes  
											if ($nbpics != 0) { 
											   for ($i=0; $i<$nbpics; $i++){ 
												  // pour chaque miniature, on affiche la miniature munie d'un lien vers la photo en taille réelle 
												  $nom=str_replace(".gif","",$tableau[$i]);
												  $nom=str_replace("_"," ",$nom);
												  echo '<li><a href=""><img src="../images/references/' , $tableau[$i] , '" alt="'.$nom.'" title="'.$nom.'" />test</a></li>'; 
											   } 

											}  
										?>
										</ul>
									</div>
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