<link type="text/css" rel="stylesheet" href="<?php echo __css_directory__;?>/home.css" />
<script type="text/javascript" src="/<?php echo __js_directory__  ; ?>/home.js"></script>
<title>Thibault - Mon portfolio</title>

<?php
    // inclure ci-dessus les balises à inclure dans la balise <head> du layout
    $head = $this->RegisterViewHead();
    // START CONTENT
    // Intégrer ci-dessous la vue
?>

<div class="homePage">    
    <div id="menuStrat" class="strat activeStrat">
	<h1 class="title">Bienvenue sur mon portfolio !</h1>
	<div class="imgContainer">
	    <img src="<?php echo __image_directory__; ?>/moi.jpg" alt="Image de Thibault Dulon" />
	</div>
	<p class="contenu">
	    Je suis un passionné de web MAIS PAS QUE !
	</p>
	
	<?php
	    include __partial_directory__ . '/nav.php';
	?>
	
	<div class="returnTop"><a href="#menuStrat">^</a></div>
    </div>
    
    <div id="CVStrat" class="strat">
	<div class="returnTop"><a href="#menuStrat">^</a></div>
    </div>
    
    <div id="skillStrat" class="strat">
	<div class="returnTop"><a href="#menuStrat">^</a></div>
    </div>
    
    <div id="portfolioStrat" class="strat">
	<div class="returnTop"><a href="#menuStrat">^</a></div>
    </div>
    
    <div id="contactStrat" class="strat">
	<div class="returnTop"><a href="#menuStrat">^</a></div>
    </div>
</div>