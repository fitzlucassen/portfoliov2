<title>Thibault - Web Developer</title>
<?php
	// inclure ci-dessus les balises à inclure dans la balise <head> du layout
	$head = $this->RegisterViewHead();
	// START CONTENT
	// Intégrer ci-dessous la vue
?>	

<div id="colorlib-hero" class="js-fullheight">
	<p class="social-media">
		<a href="https://www.facebook.com/thibault.dulon.5" target="_blank">Facebook</a>
		<a href="https://www.instagram.com/the_journey_quest" target="_blank">Instagram</a>
	</p>
	<div class="owl-carousel">
		<div class="item">
			<div class="hero-flex js-fullheight">
				<div class="col-three-forth">
					<div class="hero-img js-fullheight" style="background-image: url(/<?php echo __image_directory__; ?>/img_bg_1.jpg);background-position: left center;"></div>
				</div>
				<div class="col-one-forth js-fullheight">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight">
							<div class="text-inner">
								<div class="desc">
									<h1>I’m Thibault, a developer from around Paris.</h1>
									<p><a href="#contact" class="btn-view">Hire me now <i class="icon-arrow-right3"></i></a></p>
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
									<h1>I'm a Web Engineer &amp; Architect based in Paris.</h1>
									<p><a href="#contact" class="btn-view">Hire me now <i class="icon-arrow-right3"></i></a></p>
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
				<span>What I Do</span>
				<h2>Development, SEO, hosting and a bit of magic</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 text-center animate-box">
				<div class="services">
					<span class="icon">
						<i class="icon-briefcase"></i>
					</span>
					<div class="desc">
						<h3><a href="#">Showcase website</a></h3>
						<h4>One page website</h4>
						<h4>Contact form</h4>
						<h4>Showcase of your business</h4>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center animate-box">
				<div class="services">
					<span class="icon">
						<i class="icon-lightbulb"></i>
					</span>
					<div class="desc">
						<h3><a href="#">Complexe features</a></h3>
						<h4>Membership management</h4>
						<h4>Payment</h4>
						<h4>Algorithm</h4>
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
						<h4>Coding practice</h4>
						<h4>Measurement tooling</h4>
						<h4>Advices for SEO/SEM</h4>
					</div>
				</div>
			</div>
			
			<div class="col-md-3 text-center animate-box">
				<div class="services">
					<span class="icon">
						<i class="icon-hard-drive"></i>
					</span>
					<div class="desc">
						<h3><a href="#">Hosting</a></h3>
						<h4>Domain name reservation</h4>
						<h4>Hosting solutions</h4>
						<h4>Advices for more</h4>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<p style="margin-bottom: 0;text-align: center;"><a href="/en/services.html" class="btn btn-primary">More about my services</a></p>
		</div>
	</div>
</div>

<div class="colorlib-case colorlib-bg-white">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
				<span>Work</span>
				<h2>Happy spending my time to this projects</h2>
			</div>
		</div>
		<div class="work-wrap">
			<div class="row animate-box">
				<div class="owl-carousel1">
				<?php
					$cpt = 1;
					foreach ($this->Model->_projects as $project) {
				?>
					<div class="item">
						<div class="col-md-6">
							<div class="case-img" style="background-image: url(/<?php echo __image_directory__ . '/' . $project->getImage(); ?>);"></div>
						</div>
						<div class="col-md-6">
							<div class="case-desc">
								<p class="tag"><span><?php echo $project->getKeywords(); ?></span></p>
								<h3><a href="#"><?php echo $project->getTitle(); ?></a></h3>
								<p><?php echo $project->getDescription(); ?></p>
								<p><a href="/en/work.html" class="btn btn-primary">See details</a></p>
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
			<div class="col-md-8 col-md-offset-2 text-center animate-box">
				<p>Web developer since 7 years now, I'm passionated about web technologies in general.</p>
				<p>
					By having seen every side of my job, design, complex algorithm, hosting, architecture, SEO...etc
					I got what we name a full stack profile. Thanks to that, I can propose you the best of each part
					to fit your needs at best.
				</p>
				<p style="margin-bottom: 0;"><a href="/en/about.html" class="resume"><i class="icon-documents"></i> Read my resume here</a></p>
			</div>
		</div>
		<div class="row" id="contact">
			<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
				<h2>Contact me</h2>
				<p>Any question or needs? Send me a message!</p>
			</div>
		</div>
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2">
				<div class="row">
					<div class="col-md-12">
						<form class="form-inline qbstp-header-subscribe" action="" method="POST">
							<div class="col-md-6 text-center animate-box">
								<div class="form-group" style="display: block;">
									<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
								</div>
							</div>
							<div class="col-md-6 text-center animate-box">
								<div class="form-group" style="display: block;">
									<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
								</div>
							</div>
							<br/>
							<br/>
							<div class="col-md-12 text-center animate-box">
								<div class="form-group" style="display: block;">
									<textarea style="width: 100%;display:block;outline:none;" class="form-control" id="message" name="message" rows="5" placeholder="Tell me more..."></textarea>
								</div>
							</div>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<div class="col-md-3 text-center animate-box">
							</div>
							<div class="col-md-6 text-center animate-box">
								<div class="form-group" style="display: block;margin:auto;">
									<button type="submit" name="submit" class="btn btn-primary">Send</button>
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


<?php /*
<!-- Start Container-->
<div class="container">
	<!-- ========================================
	Contact
	==========================================-->
	<!-- row -->
	<div class="row" id="contact">
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
*/
?>