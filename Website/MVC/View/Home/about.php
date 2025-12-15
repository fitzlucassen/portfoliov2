<title><?php echo _("About - Thibault Dulon"); ?></title>
<?php
	// inclure ci-dessus les balises à inclure dans la balise <head> du layout
	$this->endSection('head');
?>
<?php
	// inclure ci-dessous les balises à inclure à la fin de votre DOM
	$this->beginSection();
?>
<?php
	$this->endSection('scripts');
	$this->beginSection();
	
	// START CONTENT
	// Intégrer ci-dessous la vue
	$homeRoute = fitzlucassen\FLFramework\Library\Core\Router::GetUrl("home", "index", null, $this->_lang);
?>
	<div class="colorlib-about" style="padding-bottom: 0;">
		<div class="container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
						<span><?php echo _("Who I am"); ?></span>
						<h1><?php echo _("Head of Platform &amp; engineering leader"); ?></h1>
					</div>
				</div>
			<div class="row row-padded-bottom">
				<div class="col-md-6 animate-box">
					<picture>
						<source srcset="/<?php echo __image_directory__; ?>/img_bg_2_1.webp" type="image/webp">
						<source srcset="/<?php echo __image_directory__; ?>/img_bg_2_1.webp" type="image/jpeg">
						<img src="/<?php echo __image_directory__; ?>/img_bg_2_1.jpg" class="about-2 img-responsive" alt="Picture of me, taking inspiration">
					</picture>
				</div>
				<div class="col-md-6 animate-box">
					<div class="about-desc">
							<h1><?php echo _("I'm Thibault,<br/>Head of Platform &amp;<br/>engineering leader<br/>based in France."); ?></h1>
					</div>
				</div>
			</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="about-info animate-box" style="text-align: justify;">
							<p><?php echo _("After a web &amp; e-business master, where I graduated top of my class, I worked in very different environments: agencies, e-commerce, startups and fintech."); ?></p>
							<p><?php echo _("Curious by nature, I've touched many aspects of the job: backend and frontend development, SEO, server management, architecture, cloud, web3… This breadth gives me a holistic view of the systems I build."); ?></p>
							<p><?php echo _("Today, as Head of Platform at Mangopay, I focus on designing robust and scalable platforms, improving developer experience and supporting engineering teams."); ?></p>
						</div>
				<div class="about-info animate-box">
					<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading intro-heading-2">
						<span style="font-size:18px;"><?php echo _("Experience"); ?></span>
					</div>
					<div class="row">
					<?php
						foreach ($this->Model->_companies as $company) {
					?>
						<div class="wrap">
							<div class="col-md-9 col-xs-9">
								<p class="job">
									<?php echo $company->getPoste(); ?> - 
									<span>
										<a href="<?php echo $company->getUrl(); ?>" target="_blank">@<?php echo $company->getTitle(); ?></a>
									</span>
								</p>
								<p class="loc">Paris - France</p>
							</div>
							<div class="col-md-3 col-xs-3">
								<span class="year"><?php echo $company->getPeriod(); ?></span>
							</div>
							<div style="clear: both;"></div>
							<p style="font-size: 14px;">
								<?php echo $company->getDescription(); ?>
							</p>
						</div>
					<?php
						}
					?>
					</div>
				</div>

				<div class="about-info animate-box">
					<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading intro-heading-2">
						<span style="font-size:18px;"><?php echo _("Education"); ?></span>
					</div>
					<div class="row">
					<?php
						foreach ($this->Model->_studies as $degree) {
					?>
						<div class="wrap">
							<div class="col-md-9 col-xs-9">
								<p class="job">
									<?php echo $degree->getTitle(); ?> - 
									<span>
										<a href="<?php echo $degree->getUrl(); ?>" target="_blank">@<?php echo $degree->getSchool(); ?></a>
									</span>
								</p>
								<p class="loc">France</p>
							</div>
							<div class="col-md-3 col-xs-3">
								<span class="year"><?php echo $degree->getPeriod(); ?></span>
							</div>
							<div style="clear: both;"></div>
							<p style="font-size: 14px;">
								<?php echo $degree->getDescription(); ?>
							</p>
						</div>
					<?php
						}
					?>
					</div>
				</div>

				<div class="about-info animate-box" style="margin-bottom: 0;">
					<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading intro-heading-2">
						<span style="font-size:18px;"><?php echo _("Interests"); ?></span>
					</div>
					<div class="row">
						<div class="wrap" style="border:none;">
							<div class="col-md-3 col-xs-3" >
								<span class="icon">
									<i class="icon-plane" style="font-size: 100px;"></i>
								</span>
							</div>
							<div class="col-md-9 col-xs-9">
								<p class="job">
								<?php echo _("Travelling is definitly my greatest passion.<br/>I've already been in Australia, Peru, Bolivia, Mexico, Guatemala, Colombia, Ecuador, Iceland...etc."); ?>
								</p>
							</div>
						</div>

						<div class="wrap" style="border:none;">
							<div class="col-md-3 col-xs-3" >
								<span class="icon">
									<i class="icon-music" style="font-size: 100px;"></i>
								</span>
							</div>
							<div class="col-md-9 col-xs-9">
								<p class="job">
								<?php echo _("Also passionated about music, I played guitar in a rock band during 5 years and I'm still much into playing and listening music."); ?>
								</p>
							</div>
						</div>

						<div class="wrap" style="border:none;">
							<div class="col-md-3 col-xs-3" >
								<span class="icon">
									<i class="icon-video-camera" style="font-size: 100px;"></i>
								</span>
							</div>
							<div class="col-md-9 col-xs-9">
								<p class="job">
								<?php echo _("Another great passion of mine is cinema. I'm a movie addict and I never refuse to go watching a movie, from drama to comedia and biopic to thriller."); ?>
								</p>
							</div>
						</div>
						</div>

							<div class="about-info animate-box">
								<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading intro-heading-2">
									<span style="font-size:18px;"><?php echo _("Contributions &amp; talks"); ?></span>
								</div>
								<div class="row">
									<div class="wrap" style="border:none;">
										<div class="col-md-12 col-xs-12">
											<p class="job"><?php echo _("Medium article &mdash; How building a tiny home in a van made me a better lead dev."); ?></p>
											<p><a href="https://medium.com/mangopay/how-building-a-tiny-home-in-a-van-made-me-a-better-lead-dev-5f1c29667792" target="_blank" class="btn-view"><?php echo _("Read the article"); ?></a></p>
										</div>
									</div>

									<div class="wrap" style="border:none;">
										<div class="col-md-12 col-xs-12">
											<p class="job"><?php echo _("Medium article &mdash; Parallels between scaling the Matterhorn and building technical platforms."); ?></p>
											<p><a href="https://medium.com/mangopay/conquering-the-summit-navigating-the-parallels-between-scaling-the-matterhorn-and-building-a-3458e5dd70ad" target="_blank" class="btn-view"><?php echo _("Read the article"); ?></a></p>
										</div>
									</div>

									<div class="wrap" style="border:none;">
										<div class="col-md-12 col-xs-12">
											<p class="job"><?php echo _("Podcast (FR) &mdash; Conversation about my journey and platform engineering."); ?></p>
											<p><a href="https://www.youtube.com/watch?v=QPh_b5qGxEA" target="_blank" class="btn-view"><?php echo _("Listen to the episode"); ?></a></p>
										</div>
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
</div>

<div class="colorlib-skills">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
				<span><?php echo _("Skills"); ?></span>
				<h2><?php echo _("My Skills &amp; Abilities"); ?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
					<div class="col-md-6 animate-box">
						<p>
						<?php echo _("Backend side of coding is what user cannot see. Backend side of coding is everything that concerned algorithm, logic and data persistence. I always was more interesting by backend development and its variety of possibilities. "); ?>
						</p>
					</div>
					<div class="col-md-6">
						<div class="row">
						<?php
							foreach ($this->Model->_skills as $skill) {
								if($skill->getCategory() == 'Back-End'){
						?>
							<div class="col-md-12 animate-box">
								<div class="progress-wrap">
									<h3><?php echo $skill->getTitle(); ?></h3>
									<div class="progress">
										<div class="progress-bar color-1" role="progressbar" aria-valuenow="<?php echo $skill->getMark(); ?>"
										aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $skill->getMark(); ?>%">
										<span><?php echo $skill->getMark(); ?>%</span>
										</div>
									</div>
								</div>
							</div>
						<?php
								}
							}
						?>	
						</div>
					</div>
					<div style="clear:both;"></div>

					<div class="col-md-6">
						<div class="row">
						<?php
							foreach ($this->Model->_skills as $skill) {
								if($skill->getCategory() == 'Base de données'){
						?>
							<div class="col-md-12 animate-box">
								<div class="progress-wrap">
									<h3><?php echo $skill->getTitle(); ?></h3>
									<div class="progress">
										<div class="progress-bar color-1" role="progressbar" aria-valuenow="<?php echo $skill->getMark(); ?>"
										aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $skill->getMark(); ?>%">
										<span><?php echo $skill->getMark(); ?>%</span>
										</div>
									</div>
								</div>
							</div>
						<?php
								}
							}
						?>	
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<p>
						<?php echo _("As a backend side developer, you always have to interact with databases. Database is a great world where optimisation is the main purpose of everything."); ?>
						</p>
					</div>
				</div>
				<br/>
				<br/>
				<br/>
				<br/>
				<div class="row">
					<div class="col-md-6 animate-box">
						<p>
						<?php echo _("Frontend side of coding is what user can immediatly see. Frontend side of coding is all about design, ergonomy and behavior. I always liked to complete my work with some frontend development."); ?>
						</p>
					</div>
					<div class="col-md-6">
						<div class="row">
						<?php
							foreach ($this->Model->_skills as $skill) {
								if($skill->getCategory() == 'Front-End'){
						?>
							<div class="col-md-12 animate-box">
								<div class="progress-wrap">
									<h3><?php echo $skill->getTitle(); ?></h3>
									<div class="progress">
										<div class="progress-bar color-1" role="progressbar" aria-valuenow="<?php echo $skill->getMark(); ?>"
										aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $skill->getMark(); ?>%">
										<span><?php echo $skill->getMark(); ?>%</span>
										</div>
									</div>
								</div>
							</div>
						<?php
								}
							}
						?>	
						</div>
					</div>
					<div style="clear:both;"></div>

					<div class="col-md-6">
						<div class="row">
						<?php
							foreach ($this->Model->_skills as $skill) {
								if($skill->getCategory() == 'Framework/API'){
						?>
							<div class="col-md-12 animate-box">
								<div class="progress-wrap">
									<h3><?php echo $skill->getTitle(); ?></h3>
									<div class="progress">
										<div class="progress-bar color-1" role="progressbar" aria-valuenow="<?php echo $skill->getMark(); ?>"
										aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $skill->getMark(); ?>%">
										<span><?php echo $skill->getMark(); ?>%</span>
										</div>
									</div>
								</div>
							</div>
						<?php
								}
							}
						?>	
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<p>
						<?php echo _("In the frontend world, there are a lot of tools, API and Framework that can help you to do whatever you want in an easier and cleaner way."); ?>
						</p>
					</div>
				</div>
				<br/>
				<br/>
				<br/>
				<br/>
				<div class="row">
					<div class="col-md-6 animate-box">
						<p>
						<?php echo _("I obviously have many more other skills but maybe I sould let a bit of mystery. Finally, here are some other usefull things I know and you can rely on."); ?>
						</p>
					</div>
					<div class="col-md-6">
						<div class="row">
						<?php
							foreach ($this->Model->_skills as $skill) {
								if($skill->getCategory() == 'Other'){
						?>
							<div class="col-md-12 animate-box">
								<div class="progress-wrap">
									<h3><?php echo $skill->getTitle(); ?></h3>
									<div class="progress">
										<div class="progress-bar color-1" role="progressbar" aria-valuenow="<?php echo $skill->getMark(); ?>"
										aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $skill->getMark(); ?>%">
										<span><?php echo $skill->getMark(); ?>%</span>
										</div>
									</div>
								</div>
							</div>
						<?php
								}
							}
						?>	
						</div>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div>
		</div>
		<br/><br/>
		
		<div class="row">
					<p class="btn-footer" style="text-align: center;">
						<a href="<?php echo $homeRoute; ?>#contact"><?php echo _("Want to talk? Get in touch."); ?></a>
					</p>
		</div>
	</div>
</div>
