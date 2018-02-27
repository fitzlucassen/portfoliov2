<title>Thibault - Développeur web</title>
<?php
	// inclure ci-dessus les balises à inclure dans la balise <head> du layout
	$head = $this->RegisterViewHead();
	// START CONTENT
	// Intégrer ci-dessous la vue
?>		
<!-- Start Container-->
<div class="container">
	<!-- row -->
	<div class="row">
		<!-- =========================================
		SIDEBAR
		==========================================-->
		<!-- Start Sidebar -->
		<aside class="col l4 m12 s12 sidebar z-depth-1" id="sidebar">
			<!--	Sidebar row -->
			<div class="row">
				<!--	top section	 -->
				<div class="heading">
					<!-- ====================
					IMAGE
					==========================-->
					<div class="feature-img">
						<img src="<?php echo __image_directory__; ?>/profile-img.jpg" class="responsive-img" alt="">
					</div>
					<!-- ========================================
					NAME AND TAGLINE
					==========================================-->
					<div class="title col s12 m12 l9 right	wow fadeIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
						<h2>Thibault Dulon</h2> <!-- title name -->
						<span style="font-size:14pt;">Architecte web</span>	<!-- tagline -->
					</div>
				</div>
				<!-- sidebar info -->
				<div class="col l12 m12 s12 sort-info sidebar-item">
					<div class="row" style="margin-bottom: 0;">
						<div class="col m12 s12 l3 icon"> <!-- icon -->
							<i class="fa fa-user"></i>
						</div>
						<div class="col m12 s12 l9 info wow fadeIn a1 animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;"> <!-- text -->
							<div class="section-item-details">
								<p>Développeur depuis 6 ans, je me passionne pour les nouvelles technologies du web. Auditeur de plusieurs Meetup et acteur dans quelques Hackathon, je suis spécialisé dans la conception de site, la veille technologique et le référencement.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col l12 m12 s12	skills sidebar-item">
					<div class="row" style="margin-bottom: 0;">
						<div class="col m12 l3 s12 icon">
							<i class="fa fa-sitemap"></i> <!-- icon -->
						</div>
						<!-- Links -->
						<div class="col m12 l9 s12 info wow fadeIn a4 animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
							<p class="website">
								<a href="https://www.linkedin.com/in/thibaultdulon" target="_blank">Linkedin</a>
							</p>
							<p class="website">
								<a href="https://github.com/fitzlucassen" target="_blank">Github</a>
							</p>
						</div>
					</div>
				</div>

				<!-- SKILLS -->
				<div class="col l12 m12 s12	skills sidebar-item">
					<div class="row">
						<div class="col m12 l3 s12 icon">
							<i class="fa fa-calendar-o"></i> <!-- icon -->
						</div>
						<!-- Skills -->
						<div class="col m12 l9 s12 skill-line a5 wow fadeIn animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
							<h3>Compétences Back </h3>

							<?php
								foreach ($this->Model->_skills as $skill) {
									if($skill->getCategory() == 'Back-End'){
							?>
							<span><?php echo $skill->getTitle(); ?></span>
							<div class="progress">
								<div class="determinate"><?php echo $skill->getMark(); ?>%<i class="fa fa-circle"></i></div>
							</div>
							<?php
									}
								}
							?>
							<?php
								foreach ($this->Model->_skills as $skill) {
									if($skill->getCategory() == 'Base de données'){
							?>
							<span><?php echo $skill->getTitle(); ?></span>
							<div class="progress">
								<div class="determinate"><?php echo $skill->getMark(); ?>%<i class="fa fa-circle"></i></div>
							</div>
							<?php
									}
								}
							?>
						</div>
					</div>
					<div class="row">
						<div class="col m12 l3 s12 icon">
						</div>
						<div class="col m12 l9 s12 skill-line a5 wow fadeIn animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
							<h3>Compétences Front </h3>

							<?php
								foreach ($this->Model->_skills as $skill) {
									if($skill->getCategory() == 'Front-End'){
							?>
							<span><?php echo $skill->getTitle(); ?></span>
							<div class="progress">
								<div class="determinate"><?php echo $skill->getMark(); ?>%<i class="fa fa-circle"></i></div>
							</div>
							<?php
									}
								}
							?>
							<?php
								foreach ($this->Model->_skills as $skill) {
									if($skill->getCategory() == 'Framework/API'){
							?>
							<span><?php echo $skill->getTitle(); ?></span>
							<div class="progress">
								<div class="determinate"><?php echo $skill->getMark(); ?>%<i class="fa fa-circle"></i></div>
							</div>
							<?php
									}
								}
							?>
						</div>
					</div>
				</div>
			</div>	 <!-- end row -->
		</aside><!-- end sidebar -->

		<section class="col s12 m12 l8 section">
			<div class="row">
				<!-- =========================================
				Work experiences
				==========================================-->
				<div class="section-wrapper z-depth-1">
					<div class="section-icon col s12 m12 l2">
						<i class="fa fa-suitcase"></i>
					</div>
					<div class="custom-content col s12 m12 l10 wow fadeIn a1 animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
						<h2>Experiences Professionnelles</h2>

						<?php
							foreach ($this->Model->_companies as $company) {
						?>
						<div class="custom-content-wrapper wow fadeIn a2 animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
							<h3><?php echo $company->getPoste(); ?> <span><a href="<?php echo $company->getUrl(); ?>" target="_blank" style="color: #767270;">@<?php echo $company->getTitle(); ?></a></span></h3>
							<span><?php echo $company->getPeriod(); ?></span>
							<p><?php echo $company->getDescription(); ?></p>
						</div>
						<?php
							}
						?>
					</div>
				</div>

				<!-- ========================================
				Education
				==========================================-->

				<div class="section-wrapper z-depth-1">
					<div class="section-icon col s12 m12 l2">
						<i class="fa fa-graduation-cap"></i>
					</div>
					<div class="custom-content col s12 m12 l10 wow fadeIn a1 animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
						<h2>Formation </h2>

						<?php
							foreach ($this->Model->_studies as $degree) {
						?>
						<div class="custom-content-wrapper wow fadeIn a2 animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
							<h3><?php echo $degree->getTitle(); ?> <span><a href="<?php echo $degree->getUrl(); ?>" target="_blank" style="color: #767270;">@<?php echo $degree->getSchool(); ?></a></span></h3>
							<span><?php echo $degree->getPeriod(); ?></span>
							<p><?php echo $degree->getDescription(); ?></p>
						</div>
						<?php
							}
						?>
					</div>
				</div>

				<!-- ========================================
				Interests
				==========================================-->

				<div class="section-wrapper z-depth-1">
					<div class="section-icon col s12 m12 l2">
						<i class="fa fa-camera-retro"></i>
					</div>
					<div class="interests col s12 m12 l10 wow fadeIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
						<h2>Centres d'Intérêt </h2>
						<ul> <!-- interetsr icon start -->
							<li><i class="fa fa-plane" data-position="top" data-delay="50" style="display: inline-block; width:40px;vertical-align: middle;"></i>&nbsp;&nbsp;Voyageur irrassasiable <i>(Islande, Australie, Croatie, Pérou, Bolivie, États-Unis...etc.)</i></li>
							<li><i class="fa fa-headphones" data-position="top" data-delay="50" style="display: inline-block; width:40px;vertical-align: middle;"></i>&nbsp;&nbsp;Compositeur et musicien passionné</li>
							<li><i class="fa fa-film" data-position="top" data-delay="50" style="display: inline-block; width:40px;vertical-align: middle;"></i>&nbsp;&nbsp;Cinéphile invétéré</li>
						</ul> <!-- interetsr icon end -->
					</div>
				</div>
			</div><!-- end row -->
		</section><!-- end section -->
	</div> <!-- end row -->

	<div class="row">
		<section class="section" style="padding-left: 0px !important;">
			<div class="full-portfolio">
				<div class="wow fadeIn a1 animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
					<div id="loader" style="display: none;">
                        <div class="loader-icon"></div>
                    </div>
					<div class="screenshots" id="portfolio-item">
						<div class="row">
							<ul class="grid">
								<?php
									$cpt = 1;
									foreach ($this->Model->_projects as $project) {
								?>
								<li class="col <?php echo $cpt <= 2 ? 'm6' : 'm3'; ?> 2 mix category-1" style="display: inline-block;">
									<a href="portfolio-full.html" class="sa-view-project-detail" data-action="#project-<?php echo $cpt; ?>">
										<figure class="more">
											<img src="<?php echo __image_directory__ . '/' . $project->getImage(); ?>" alt="Screenshot <?php echo $cpt; ?>" class="">
											<figcaption>
												<div class="caption-content">
													<div class="single_image">
														<h2><?php echo $project->getTitle(); ?></h2>
														<p><?php echo $project->getDescription(); ?></p>
													</div>
												</div>
											</figcaption>
										</figure>
									</a>
								</li>
								<?php
										$cpt++;
										if($cpt == 3)
											echo '</ul><br style="clear:both;"/><br/><ul class="grid">';
									}
								?>
							</ul>
						</div>
					</div>

					<!-- PROJECT DETAILS WILL BE LOADED HERE -->
					<div class="sa-project-gallery-view" id="project-gallery-view" style="display: none;">
						<?php
							$cpt = 1;
							foreach ($this->Model->_projects as $project) {
						?>
						<div class="single-project col s12 m6 l12 z-depth-1" id="project-<?php echo $cpt; ?>" style="display: none;">
							<div class="row">
								<div class="col s12 full-project">
									<h3 class="dark-text full-project-title"><?php echo $project->getTitle(); ?></h3>
									<div class="project-description">
										<p><?php echo $project->getDescription(); ?></p>
									</div>
									<div class="project-information">
										<ul>
											<li><b class="dark-text">Date: </b> <?php echo $project->getDcrea(); ?></li>
											<li><b class="dark-text">Keywords: </b> <?php echo $project->getKeywords(); ?></li>
											<li style="text-align:center;margin-top:20px;"><span class="dark-text"></span><a href="<?php echo $project->getLink(); ?>" target="_blank">Voir le site</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<?php
								$cpt++;
							}
						?>
					</div>
					<div class="back-btn col s12">  
						<a id="back-button" class="btn btn-info waves-effect" href="#" style="display: none;"><i class="fa fa-long-arrow-left"></i> Retour </a>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- row -->
	<div class="row">
		<section class="section" style="padding-left: 0 !important;">
			<div class="section-wrapper z-depth-1" style="background-color: #5da4d9;">
				<div class="section-icon col s12 m12 l2" style="color: #fff">
					<i class="fa fa-star"></i>
				</div>
				<div class="custom-content col s12 m12 l10 wow fadeIn a1 animated skill-line" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
					<h2 style="color: #fff">Autres compétences</h2>

					<?php
						foreach ($this->Model->_skills as $skill) {
							if($skill->getCategory() == 'Other'){
					?>
					<span style="color: #fff"><?php echo $skill->getTitle(); ?></span>
					<div class="progress" style="width: 90%;">
						<div class="determinate"><?php echo $skill->getMark(); ?>%<i class="fa fa-circle" style="color: #fff"></i></div>
					</div>
					<?php
							}
						}
					?>
				</div>
			</div>
		</section>
	</div>
	<!-- ========================================
	Contact
	==========================================-->
	<!-- row -->
	<div class="row">
		<section class="section" style="padding-left: 0 !important;">
			<div class="section-wrapper z-depth-1">
				<div class="section-icon col s12 m12 l2">
					<i class="fa fa-paper-plane-o"></i>
				</div>
				<div class="col s12 m12 l10 wow fadeIn a1 animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
					<h2>Contactez-moi</h2>
					<div class="contact-form" id="contact">
						<div class="row">
							<form role="form" id="contactForm" data-toggle="validator" novalidate="true">
								<div id="msgSubmit" class="h3 text-center hidden"></div>
								<div class="input-field col s12">
									<label for="name" class="h4">Nom *</label>
									<input type="text" class="form-control validate" id="name" required="" data-error="Nouveau message d'erreur">
								</div>
								<div class="input-field col s12">
									<label for="email" class="h4">E-mail *</label>
									<input type="email" class="form-control validate" id="email" required="">
								</div>
								<div class="input-field col s12">
									<label for="message" class="h4">Message *</label>
									<textarea id="message" class="form-control materialize-textarea validate" required=""></textarea>
								</div>
								<button type="submit" id="form-submit" class="btn btn-success disabled">Envoyer</button>
								<div class="clearfix"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>	<!-- end container -->