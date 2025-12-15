<title><?php echo _("How I help engineering teams - Thibault Dulon"); ?></title>
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

<div class="colorlib-services">
		<div class="container">
			<div class="row">
					<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
						<span><?php echo _("What I do"); ?></span>
						<h1><?php echo _("Platform, engineering leadership &amp; developer experience"); ?></h1>
					</div>
			</div>
		
			<div class="row">
				<div class="col-md-3 text-center animate-box iconService">
				<div class="services" style="padding-top: 130px;background: none;">
					<span class="icon">
						<i class="icon-briefcase"></i>
					</span>
				</div>
			</div>
				<div class="col-md-9 text-center animate-box">
					<div class="services">
						<div class="desc">
								<h3><a href="#"><?php echo _("Engineering leadership &amp; platform vision"); ?></a></h3>
								<p style="font-size:14px;text-align:justify">
								<?php echo _("As Head of Platform, I help product and tech teams define a clear technical vision: aligning platform strategy with business goals, setting a direction and making it actionable for the teams."); ?>
								<br/>
								<br/>
								<?php echo _("I build technical roadmaps, facilitate trade-offs (risk / impact / cost), run rituals (design reviews, architecture guilds...) and support engineers through mentoring and coaching."); ?>
								</p>
						</div>
					</div>
				</div>
			<div style="clear:both;"></div>

				<div class="col-md-9 text-center animate-box">
					<div class="services">
						<div class="desc">
								<h3><a href="#"><?php echo _("Platform &amp; architecture"); ?></a></h3>
								<p style="font-size:14px;text-align:justify">
								<?php echo _("I've worked on turning monoliths into distributed systems, building high-volume payment APIs and designing cross-cutting components (identity provider, API gateway, messaging, logging...)."); ?>
								<br/>
								<br/>
								<?php echo _("I help teams define the right domain boundaries, pick the appropriate patterns (CQRS, event-driven, microservices when it makes sense) and keep architectures simple enough to be operable."); ?>
								</p>
						</div>
					</div>
				</div>
			<div class="col-md-3 text-center animate-box iconService">
				<div class="services" style="padding-top: 130px;background: none;">
					<span class="icon">
						<i class="icon-lightbulb"></i>
					</span>
				</div>
			</div>
			<div style="clear:both;"></div>

			<div class="col-md-3 text-center animate-box iconService">
				<div class="services" style="padding-top: 130px;background: none;">
					<span class="icon">
						<i class="icon-list"></i>
					</span>
				</div>
			</div>
				<div class="col-md-9 text-center animate-box">
					<div class="services">
						<div class="desc">
								<h3><a href="#"><?php echo _("Developer experience &amp; internal tooling"); ?></a></h3>
								<p style="font-size:14px;text-align:justify">
								<?php echo _("I design internal platforms and tooling to make engineers faster: shared libraries, CLIs and generators, CI/CD pipelines, living documentation, ADR templates, and healthy code review practices."); ?>
								<br/>
								<br/>
								<?php echo _("The goal is to reduce the time from idea to production while keeping a high standard of quality and reliability."); ?>
								</p>
						</div>
					</div>
				</div>
			<div style="clear:both;"></div>
			
				<div class="col-md-9 text-center animate-box iconService">
					<div class="services">
						<div class="desc">
								<h3><a href="#"><?php echo _("Cloud, reliability &amp; compliance"); ?></a></h3>
								<p style="font-size:14px;text-align:justify">
								<?php echo _("I work with product, security and operations teams to make systems truly operable: observability, incident management, SRE practices, automation and FinOps."); ?>
								<br/>
								<br/>
								<?php echo _("I also partner with risk, compliance and legal teams so that architectures remain aligned with regulatory constraints (especially in a fintech / payments context)."); ?>
								</p>
						</div>
					</div>
				</div>
			<div class="col-md-3 text-center animate-box iconService">
				<div class="services" style="padding-top: 130px;background: none;">
					<span class="icon">
						<i class="icon-hard-drive"></i>
					</span>
				</div>
			</div>
			<div style="clear:both;"></div>

			<div class="col-md-3 text-center animate-box iconService">
				<div class="services" style="padding-top: 130px;background: none;">
					<span class="icon">
						<i class="icon-arrow-loop"></i>
					</span>
				</div>
			</div>
			<div class="col-md-9 text-center animate-box">
				<div class="services">
					<div class="desc">
						<h3><a href="#">BlockChain Smart Contract Audit</a></h3>
						<p style="font-size:14px;text-align:justify">
						<?php echo _("SERVICES_TEXT_BLOCKCHAIN_AUDIT"); ?>
						</p>
					</div>
				</div>
			</div>
			<div style="clear:both;"></div>
		</div>

			<div class="row">
					<p class="btn-footer" style="text-align: center;">
						<a href="<?php echo $homeRoute; ?>#contact"><?php echo _("Want to discuss your platform challenges? Get in touch."); ?></a>
					</p>
			</div>
	</div>
</div>
