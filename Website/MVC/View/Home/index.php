<link type="text/css" rel="stylesheet" href="<?php echo __css_directory__;?>/home.css" />
<link type="text/css" rel="stylesheet" href="<?php echo __css_directory__;?>/nav.css" />

<script type="text/javascript" src="/<?php echo __js_directory__  ; ?>/home.js"></script>
<title>Thibault Dulon - Portfolio</title>

<?php
    // inclure ci-dessus les balises à inclure dans la balise <head> du layout
    $head = $this->RegisterViewHead();
    // START CONTENT
    // Intégrer ci-dessous la vue
?>

<div class="homePage">    
    <div id="menuStrat" class="strat activeStrat">
	<h1 class="title">Bienvenue sur mon portfolio !</h1>
	
	<?php
	    include __partial_directory__ . '/nav.php';
	?>
	
	<p class="contenu">
	    Je suis un passionné de web MAIS PAS QUE !<br/>Grand cinéphile et musicien invétéré, j'ai plus d'une corde à mon arc !<br/><br/>
	</p>
	<div class="presentationContainer suricate">
	    <p class="contenu presentation">
		J'ai la curiosité du suricate,
	    </p>
	    <div class="imgContainer presentation">
		<img src="<?php echo __image_directory__; ?>/suricate.png" alt="image de suricate"/>
	    </div>
	    <div class="cl"></div>
	</div>
	<div class="presentationContainer ane">
	    <p class="contenu presentation">
		L'obstination d'un âne,
	    </p>
	    <div class="imgContainer presentation">
		<img src="<?php echo __image_directory__; ?>/ane.png" alt="image d'un âne"/>
	    </div>
	    <div class="cl"></div>
	</div>
	<div class="presentationContainer pingouin">
	    <p class="contenu presentation">
		Et l'esprit social du pingouin.
	    </p>
	    <div class="imgContainer presentation">
		<img src="<?php echo __image_directory__; ?>/pingouin.png" alt="image d'un âne"/>
	    </div>
	    <div class="cl"></div>
	</div>
	<div class="returnTop"><a href="#menuStrat">^</a></div>
    </div>
    
    <div id="skillStrat" class="strat">
	<h2 class="title">Mes compétences</h2>
	
	<div class="skillContainer">
	    <div class="column">
	    <?php
		$cpt = 1;
		foreach($Model->_skillsCategories as $c){
	    ?>
		<div class="categoryContainer">
		    <h3 class="title"><?php echo $c; ?></h3>
		<?php
			foreach($Model->_skills as $skill){
			    if($skill['category'] == $c){
		?>
		    <div class="skillbar clearfix " data-percent="<?php echo $skill['mark'] * 100 / 20; ?>%">
			<div class="skillbar-title" style="background: <?php echo $Model->_skillsCategoriesColor[$c]; ?>;"><span><?php echo $skill['title']; ?></span></div>
			<div class="skillbar-bar" style="background: <?php echo $Model->_skillsCategoriesColor[$c]; ?>;"></div>
			<div class="skill-bar-percent"><?php echo $skill['mark'] * 100 / 20; ?>%</div>
		    </div>
		
	    <?php
			    }
			}
	    ?>
		</div>
	    <?php
			if($cpt % (count($Model->_skillsCategories) / 2) == 0 && $cpt < count($Model->_skillsCategories)){
	    ?>
		</div><div class="column">
	    <?php
			}
			else if ($cpt % (count($Model->_skillsCategories) / 2) == 0){
	    ?>
		</div>
	    <?php
			}
		    $cpt++;
		}
	    ?>
	    </div>
	</div>
	<div class="returnTop"><a href="#menuStrat">^</a></div>
    </div>
    
    <div id="portfolioStrat" class="strat">
	<h2 class="title">Mes réalisations</h2>
	
	<?php
	    foreach($Model->_projects as $project){
	?>
	
	<?php
	    }
	?>
	<div class="returnTop"><a href="#menuStrat">^</a></div>
    </div>
    
    <div id="companyStrat" class="strat">
	<h2 class="title">Mes missions en entreprise</h2>
	
	<div class="returnTop"><a href="#menuStrat">^</a></div>
    </div>
    
    <div id="contactStrat" class="strat">
	<h2 class="title">Contactez-moi</h2>
	
	<div class="returnTop"><a href="#menuStrat">^</a></div>
    </div>
</div>