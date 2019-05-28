<title><?php echo _("My last projects - Thibault"); ?></title>
<?php
	// inclure ci-dessus les balises à inclure dans la balise <head> du layout
	$head = $this->RegisterViewHead();
	// START CONTENT
	// Intégrer ci-dessous la vue
?>	

<div class="colorlib-work">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
				<span><?php echo _("My last projects"); ?></span>
				<h1><?php echo _("Happy spending my time to this projects"); ?></h1>
			</div>
		</div>
		<div class="row">
			<?php
				$cpt = 1;
				foreach ($this->Model->_projects as $project) {
			?>
			<div class="col-md-12 no-gutters">
				<div class="work-entry-flex animate-box js-fullheight">
					<div class="col-three-forth js-fullheight">
						<div class="row no-gutters">
							<div class="col-md-12 col-md-offset-0 <?php echo $cpt % 2 == 0 ? "col-md-push-12" : ""; ?> no-gutters">
								<div class="work-img js-fullheight" style="background-image: url(/<?php echo __image_directory__ . '/' . $project->getImage(); ?>);">
								</div>
							</div>
						</div>
					</div>
					<div class="col-one-forth js-fullheight">
						<div class="row no-gutters">
							<div class="col-md-12 col-md-offset-0 <?php echo $cpt % 2 == 0 ? "col-md-pull-10" : "col-md-pull-2"; ?> col-xs-pull-1 no-gutters">
								<div class="display-t js-fullheight">
									<div class="display-tc js-fullheight">
										<div class="text-inner text-inner-left">
											<p class="tag"><span><?php echo $project->getKeywords(); ?></span></p>
											<h2 style="margin-bottom: 0;"><a href="#"><?php echo $project->getTitle(); ?></a></h2>
											<i style="font-size:14px;"><?php echo $project->getDcrea(); ?></i>
											<br/>
											<br/>
											<p><?php echo $project->getDescription(); ?></p>
											<p><a href="<?php echo $project->getLink(); ?>" target="_blank" class="btn-view"><?php echo _("See the website"); ?></a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
					$cpt++;
				}
			?>
		</div>
		
		<div class="row">
			<p class="btn-footer" style="text-align: center;"><a href="/en/#contact"><?php echo _("Convinced? Write me for yours!"); ?></a></p>
		</div>
	</div>
</div>