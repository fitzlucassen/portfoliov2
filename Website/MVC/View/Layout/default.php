<!DOCTYPE HTML>
<html lang="fr">
    <head>
	<?php
	    // La page à modifier pour inclure le CSS le JS et les balises meta du layout (toutes les pages)
	    include(__partial_directory__ . "/meta.php");
	    
	    // L'inclusion des CSS, JS et HTML personnalisés pour chaque page
	    // C'est à remplir dans les vues.
	    $this->Render($this->Head);
	    
	    // S'il n'y a pas de title de précisé, on inclue le title par défaut présent en base de données
	    if(!$this->ContainsTitle($this->Head)) {
	?>
		<title><?php $this->Render($this->Model->_headerInformations->getTitle()); ?></title>
	<?php
	    }
	?>
    </head>

    <body>
	    <?php
			include(__partial_directory__ . "/header.php");
		?>
		
		<div id="colorlib-page">
			<header>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="colorlib-navbar-brand">
								<a class="colorlib-logo <?php echo $this->Model->_action != "index" ? "black" : "";?>" href="/">T.</a>
							</div>
							<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
						</div>
					</div>
				</div>
			</header>
		
		<?php
			// Inclusion de la vue cible
			$this->Render($this->Body);

			include(__partial_directory__ . "/footer.php");
		?>
		
		</div>
    </body>
</html>