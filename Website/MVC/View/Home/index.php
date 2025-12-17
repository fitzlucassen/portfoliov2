<title><?php echo _("Thibault Dulon - Head of Platform &amp; Engineering Leader"); ?></title>
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
$aboutRoute = fitzlucassen\FLFramework\Library\Core\Router::GetUrl("home", "about", null, $this->_lang);
$servicesRoute = fitzlucassen\FLFramework\Library\Core\Router::GetUrl("home", "services", null, $this->_lang);
$workRoute = fitzlucassen\FLFramework\Library\Core\Router::GetUrl("home", "work", null, $this->_lang);
?>
<div itemscope itemtype="http://schema.org/Person">
	<div id="colorlib-hero" class="js-fullheight">
		<?php
		if (isset($this->Model->_message) && !empty($this->Model->_message)) {
		?>
			<p class="tooltip-message">
				<?php echo $this->Model->_message; ?>
			</p>
		<?php
		}
		?>
		<p class="social-media">
			<a href="https://www.instagram.com/the_journey_quest" target="_blank">Instagram</a>
		</p>
		<div class="owl-carousel">
				<div class="item">
					<div class="hero-flex js-fullheight">
						<div class="col-three-forth" style="position: relative;overflow-x:hidden;">
							<picture class="hero-img js-fullheight js-parallax" data-parallax-speed="0.25" style="position:absolute;left:0;top:0;">
							<source srcset="/<?php echo __image_directory__; ?>/img_bg_neige.webp" type="image/webp">
							<source srcset="/<?php echo __image_directory__; ?>/img_bg_neige.jpg" type="image/jpeg">
							<img src="/<?php echo __image_directory__; ?>/img_bg_neige.jpg" alt="Un développeur est un créatif" class="js-fullheight" style="width:auto"/>
						</picture>
						<link itemprop="image" href="https://www.thibaultdulon.com/<?php echo __image_directory__; ?>/img_bg_1.webp" />
					</div>
					<div class="col-one-forth js-fullheight">
						<div class="display-t js-fullheight">
							<div class="display-tc js-fullheight">
						<div class="text-inner">
							<div class="desc">
								<h1><?php echo _("I'm <b itemprop=\"name\">Thibault</b>, a Head of Platform and engineering leader."); ?></h1>
								<p><a href="#contact" class="btn-view"><?php echo _("Get in touch"); ?> <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
							</div>
						</div>
					</div>
				</div>
			</div>
				<div class="item">
					<div class="hero-flex js-fullheight">
						<div class="col-three-forth">
							<picture class="hero-img js-fullheight js-parallax" data-parallax-speed="0.2" style="position:absolute;left:0;top:0;">
							<source srcset="/<?php echo __image_directory__; ?>/img_bg_2.webp" type="image/webp">
							<source srcset="/<?php echo __image_directory__; ?>/img_bg_2.jpg" type="image/jpeg">
							<img src="/<?php echo __image_directory__; ?>/img_bg_2.jpg" alt="Un développeur aime voyager" class="js-fullheight" style="width:auto"/>
						</picture>
					</div>
					<div class="col-one-forth js-fullheight">
						<div class="display-t js-fullheight">
							<div class="display-tc js-fullheight">
						<div class="text-inner">
							<div class="desc">
								<h1><?php echo _("I design resilient, scalable platforms for fintech."); ?></h1>
								<p><a href="#contact" class="btn-view"><?php echo _("Get in touch"); ?> <i class="icon-arrow-right3"></i></a></p>
							</div>
						</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="colorlib-services">
		<div class="container">
				<div class="row">
						<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
							<span><?php echo _("What I do"); ?></span>
							<h2 itemprop="jobTitle"><?php echo _("Platforms, engineering leadership &amp; developer experience"); ?></h2>
						</div>
				</div>
			<div class="row">
				<div class="col-md-3 text-center animate-box">
					<div class="services">
								<span class="icon">
									<i class="icon-briefcase"></i>
								</span>
									<div class="desc">
										<h3><a href="#"><?php echo _("Engineering leadership"); ?></a></h3>
										<h4><?php echo _("Technical vision aligned with business"); ?></h4>
										<h4><?php echo _("Coaching, mentoring &amp; team culture"); ?></h4>
										<h4><?php echo _("Technical roadmapping &amp; prioritisation"); ?></h4>
									</div>
					</div>
				</div>
				<div class="col-md-3 text-center animate-box">
					<div class="services">
								<span class="icon">
									<i class="icon-lightbulb"></i>
								</span>
									<div class="desc">
										<h3><a href="#"><?php echo _("Platform &amp; architecture"); ?></a></h3>
										<h4><?php echo _("Distributed systems"); ?></h4>
										<h4><?php echo _("Scalable and resilient payment platforms"); ?></h4>
										<h4><?php echo _("API gateway, identity provider, queuing, logging...etc."); ?></h4>
									</div>
					</div>
				</div>
				<div class="col-md-3 text-center animate-box">
					<div class="services">
								<span class="icon">
									<i class="icon-list"></i>
								</span>
									<div class="desc">
										<h3><a href="#"><?php echo _("Developer experience"); ?></a></h3>
										<h4><?php echo _("Internal tooling, CI/CD and test automation"); ?></h4>
										<h4><?php echo _("Shared libraries and internal platforms"); ?></h4>
										<h4><?php echo _("Documentation and architecture decision records"); ?></h4>
									</div>
					</div>
				</div>

				<div class="col-md-3 text-center animate-box">
					<div class="services">
								<span class="icon">
									<i class="icon-hard-drive"></i>
								</span>
									<div class="desc">
										<h3><a href="#"><?php echo _("Cloud &amp; operations"); ?></a></h3>
										<h4><?php echo _("Operability, observability and incident management"); ?></h4>
										<h4><?php echo _("SRE culture and platform reliability"); ?></h4>
										<h4><?php echo _("AWS, containers, Kubernetes, FinOps"); ?></h4>
									</div>
					</div>
				</div>
			</div>

					<div class="row">
						<p style="margin-bottom: 0;text-align: center;">
							<a href="<?php echo $servicesRoute; ?>" class="btn btn-primary">
								<?php echo _("Learn more about how I can help"); ?>
							</a>
						</p>
					</div>
		</div>
	</div>

		<div class="colorlib-case colorlib-bg-white">
		<div class="container">
				<div class="row">
						<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
							<span><?php echo _("Projects"); ?></span>
							<h2><?php echo _("A selection of technical projects I'm proud of"); ?></h2>
						</div>
				</div>
			<div class="work-wrap">
				<div class="row animate-box">
					<div class="owl-carousel1">
						<?php
						$cpt = 1;
						foreach ($this->Model->_projects as $project) {
						?>
							<div class="item" itemscope itemtype="http://schema.org/CreativeWork">
								<div class="col-md-6">
									<picture class="case-img" style="overflow:hidden;text-align:center;">
										<source srcset="/<?php echo __image_directory__ . '/' . $project->getImage(); ?>.webp" type="image/webp">
										<source srcset="/<?php echo __image_directory__ . '/' . $project->getImage(); ?>.jpg" type="image/jpeg"> 
										<img src="/<?php echo __image_directory__ . '/' . $project->getImage(); ?>.jpg" alt="<?php echo $project->getTitle(); ?>" class="case-img" style="width: auto;display:inline-block;">
									</picture>
									<link itemprop="image" href="https://www.thibaultdulon.com/<?php echo __image_directory__; ?>/<?php echo $project->getImage(); ?>.webp" />
								</div>
								<div class="col-md-6">
									<div class="case-desc">
										<p class="tag" itemprop="keywords"><span><?php echo $project->getKeywords(); ?></span></p>
										<h3 itemprop="name"><a href="#"><?php echo $project->getTitle(); ?></a></h3>
										<p itemprop="description"><?php echo $project->getDescription(); ?></p>
										<p><a href="<?php echo $workRoute; ?>" class="btn btn-primary"><?php echo _("See details"); ?></a></p>
									</div>
								</div>
							</div>
						<?php
							$cpt++;
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="colorlib-subscribe">
		<div class="overlay"></div>
			<div class="container">
			<div class="row row-padded-bottom">
					<div class="col-md-8 col-md-offset-2 text-center animate-box" itemprop="description">
									<p><?php echo _("As Head of Platform at Mangopay, I help engineering teams design and run resilient, scalable, secure and compliant payment platforms."); ?></p>
							<p><?php echo _("After a web &amp; e‑business master (top of my class) and 10+ years across agencies, e‑commerce, startups and fintech, I grew from backend developer to lead developer and platform engineering leader."); ?></p>
							<p style="margin-bottom: 0;">
								<a href="<?php echo $aboutRoute; ?>" class="resume">
									<i class="icon-documents"></i> <?php echo _("Read more about my journey"); ?>
								</a>
							</p>
					</div>
			</div>
				<div class="row" id="contact">
						<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
							<h2><?php echo _("Get in touch"); ?></h2>
							<p><?php echo _("Have an opportunity, a collaboration idea or just want to chat? Drop me a message."); ?></p>
					</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<div class="row">
						<div class="col-md-12">
							<form class="form-inline qbstp-header-subscribe" action="" method="POST">
								<div class="col-md-6 text-center animate-box">
									<div class="form-group" style="display: block;">
										<input type="text" class="form-control" id="name" name="name" placeholder="<?php echo _("Enter your name"); ?>*" required>
									</div>
								</div>
								<div class="col-md-6 text-center animate-box">
									<div class="form-group" style="display: block;">
										<input type="email" class="form-control" id="email" name="email" placeholder="<?php echo _("Enter your email"); ?>*" required>
									</div>
								</div>
								<br />
								<br />
								<div class="col-md-12 text-center animate-box">
									<div class="form-group" style="display: block;">
										<textarea style="width: 100%;display:block;outline:none;" class="form-control" id="message" name="message" rows="5" placeholder="<?php echo _("Tell me more"); ?>...*" required></textarea>
									</div>
								</div>
								<br />
								<br />
								<br />
								<br />
								<br />

								<div class="col-md-3 text-center animate-box">
								</div>
								<div class="col-md-6 text-center animate-box">
									<div class="g-recaptcha" data-sitekey="6LfGjQcaAAAAAE8nOXAXIGIETF3bZPyQBSVSXVgg" style="width:304px;margin:auto;"></div>
								</div>
								<div class="col-md-3 text-center animate-box">
								</div>
								<div class="col-md-12">&nbsp;</div>

								<div class="col-md-3 text-center animate-box">
								</div>
								<div class="col-md-6 text-center animate-box">
									<div class="form-group" style="display: block;margin:auto;">
										<button type="submit" name="submit" class="btn btn-primary"><?php echo _("Send"); ?></button>
									</div>
								</div>
								<div class="col-md-3 text-center animate-box">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>