<title><?php echo _("Thibault - Freelance Web Developer"); ?></title>
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
					<div class="col-three-forth">
						<div class="hero-img js-fullheight" style="background-image: url(/<?php echo __image_directory__; ?>/img_bg_1.jpg);background-position: left center;"></div>
						<link itemprop="image" href="https://www.thibaultdulon.com/<?php echo __image_directory__; ?>/img_bg_1.jpg" />
					</div>
					<div class="col-one-forth js-fullheight">
						<div class="display-t js-fullheight">
							<div class="display-tc js-fullheight">
								<div class="text-inner">
									<div class="desc">
										<h1><?php echo _("I'm <b itemprop=\"name\">Thibault</b>, a developer from around Paris."); ?></h1>
										<p><a href="#contact" class="btn-view"><?php echo _("Hire me now"); ?> <i class="icon-arrow-right3"></i></a></p>
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
						<div class="hero-img js-fullheight" style="background-image: url(/<?php echo __image_directory__; ?>/img_bg_2.jpg);background-position: left center;"></div>
					</div>
					<div class="col-one-forth js-fullheight">
						<div class="display-t js-fullheight">
							<div class="display-tc js-fullheight">
								<div class="text-inner">
									<div class="desc">
										<h1><?php echo _("I'm a Web Engineer &amp; Architect based in Paris."); ?></h1>
										<p><a href="#contact" class="btn-view"><?php echo _("Hire me now"); ?> <i class="icon-arrow-right3"></i></a></p>
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
					<span><?php echo _("What I Do"); ?></span>
					<h2 itemprop="jobTitle"><?php echo _("Development, SEO, hosting and a bit of magic"); ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-briefcase"></i>
						</span>
						<div class="desc">
							<h3><a href="#"><?php echo _("Showcase website"); ?></a></h3>
							<h4><?php echo _("One page website"); ?></h4>
							<h4><?php echo _("Contact form"); ?></h4>
							<h4><?php echo _("Showcase of your business"); ?></h4>
						</div>
					</div>
				</div>
				<div class="col-md-3 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-lightbulb"></i>
						</span>
						<div class="desc">
							<h3><a href="#"><?php echo _("Complexe features"); ?></a></h3>
							<h4><?php echo _("Membership management"); ?></h4>
							<h4><?php echo _("Payment"); ?></h4>
							<h4><?php echo _("Algorithm"); ?></h4>
						</div>
					</div>
				</div>
				<div class="col-md-3 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-list"></i>
						</span>
						<div class="desc">
							<h3><a href="#">SEO</a></h3>
							<h4><?php echo _("Coding practice"); ?></h4>
							<h4><?php echo _("Measurement tooling"); ?></h4>
							<h4><?php echo _("Advices for SEO/SEM"); ?></h4>
						</div>
					</div>
				</div>

				<div class="col-md-3 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-hard-drive"></i>
						</span>
						<div class="desc">
							<h3><a href="#"><?php echo _("Hosting"); ?></a></h3>
							<h4><?php echo _("Domain name reservation"); ?></h4>
							<h4><?php echo _("Hosting solutions"); ?></h4>
							<h4><?php echo _("Advices for more"); ?></h4>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<p style="margin-bottom: 0;text-align: center;"><a href="<?php echo $serviceRoute; ?>" class="btn btn-primary"><?php echo _("More about my services"); ?></a></p>
			</div>
		</div>
	</div>

	<div class="colorlib-case colorlib-bg-white">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
					<span><?php echo _("Work"); ?></span>
					<h2><?php echo _("Happy spending my time into these web projects"); ?></h2>
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
									<div class="case-img" style="background-image: url(/<?php echo __image_directory__ . '/' . $project->getImage(); ?>);"></div>
									<link itemprop="image" href="https://www.thibaultdulon.com/<?php echo __image_directory__; ?>/<?php echo $project->getImage(); ?>" />
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
					<p><?php echo _("Web developer since 7 years now, I'm passionated about web technologies in general."); ?></p>
					<p><?php echo _("By having seen every side of my job, design, complex algorithm, hosting, architecture, SEO...etc I got what we name a full stack profile. Thanks to that, I can propose you the best of each part to fit your needs at best."); ?></p>
					<p style="margin-bottom: 0;"><a href="<?php echo $aboutRoute; ?>" class="resume"><i class="icon-documents"></i> <?php echo _("Read my resume here"); ?></a></p>
				</div>
			</div>
			<div class="row" id="contact">
				<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
					<h2><?php echo _("Ask for my development skills"); ?></h2>
					<p><?php echo _("Any question or needs? Send me a message!"); ?></p>
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
