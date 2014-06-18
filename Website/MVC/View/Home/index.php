<link type="text/css" rel="stylesheet" href="<?php echo __css_directory__;?>/home.css" />
<title>FLFramework - Le framework PHP français</title>


<script type="text/javascript" src="<?php echo __js_directory__ ?>/home.js"></script>
<?php
    // inclure ci-dessus les balises à inclure dans la balise <head> du layout
    $head = $this->RegisterViewHead();
    // START CONTENT
    // Intégrer ci-dessous la vue
?>
<div class="page">
	<div class="bloc" id="blocMe">
		<div class="hublot">
			<img src="<?php echo __image_directory__;?>/moi.jpg" alt="">
		</div>

		<h1 class="title">Thibault Dulon</h1>
		<h2 class="subtitle">Web Developer</h2>
		<p class="contenu" style="margin-top:40px;">
			<span class="guillemet">«</span>
			<i class="left">Développeur web depuis 3ans,</i>
			<i> je me passione pour les nouvelles technologies du web. 
				Auditeur de plusieurs Meetup et acteur dans quelques Hackathon, je suis spécialisé dans la conception de site, la veille 
			</i>
			<i class="left">
				technologique et le référencement.
			</i>
			<span class="guillemet">»</span>

			<span class="cl"></span>
		</p>
	</div>
	<div class="blocContainer" style="width: 290px;">
		<div class="bloc" id="blocContact">
			<h2 class="title">Retrouvez-moi</h2>
			<br/>
			<br/>

			<div class="contactLine">
				<a href="https://github.com/fitzlucassen" target="_blank">
					<img src="<?php echo __image_directory__;?>/github.png" alt="">
				</a>
			</div>
			<div class="contactLine">
				<a href="http://fr.viadeo.com/fr/profile/thibault.dulon1" target="_blank">
					<img src="<?php echo __image_directory__;?>/viadeo.png" alt="">
				</a>
			</div>
			<div class="contactLine">
				<a href="https://twitter.com/Fitz_Lucassen" target="_blank">
					<img src="<?php echo __image_directory__;?>/twitter.png" alt="">
				</a>
			</div>
			<div class="contactLine">
				<a href="#blocContactForm">
					<img src="<?php echo __image_directory__;?>/email.png" alt="">
				</a>
			</div>
		</div>
		<div class="bloc" id="blocCompanies">
			<h2 class="title">J'y ai travaillé</h2>
			<br/>

			<?php
				foreach ($this->Model->_companies as $company) {
			?>
					<div class="companyLine">
						<a href="<?php echo $company->getUrl(); ?>" target="_blank">
							<img src="<?php echo __image_directory__ . '/' . $company->getImage(); ?>" alt="">
						</a>
					</div>
			<?php
				}
			?>
		</div>
	</div>

	<div class="bloc" id="blocSkills">
		<h2 class="title">Mes compétences Front-End</h2>
		<br/>

		<?php
			foreach ($this->Model->_skills as $skill) {
				if($skill->getCategory() == 'Front-End'){
		?>
				<div class="skillbar clearfix " data-percent="<?php echo $skill->getMark() * 100 / 20; ?>%">
					<div class="skillbar-title" style="background: #2c3e50;"><span><?php echo $skill->getTitle(); ?></span></div>
					<div class="skillbar-bar" style="background: #4e5f72;"></div>
					<div class="skill-bar-percent"><?php echo $skill->getMark() * 100 / 20; ?>%</div>
				</div> <!-- End Skill Bar -->
		<?php
				}
			}
		?>
		<h2 class="subtitle" style="margin-bottom:10px;">Côté API/Framework...</h2>
		<?php
			foreach ($this->Model->_skills as $skill) {
				if($skill->getCategory() == 'Framework/API'){
		?>
				<div class="skillbar clearfix " data-percent="<?php echo $skill->getMark() * 100 / 20; ?>%">
					<div class="skillbar-title" style="background: #2c3e50;"><span><?php echo $skill->getTitle(); ?></span></div>
					<div class="skillbar-bar" style="background: #4e5f72;"></div>
					<div class="skill-bar-percent"><?php echo $skill->getMark() * 100 / 20; ?>%</div>
				</div> <!-- End Skill Bar -->
		<?php
				}
			}
		?>
	</div>
	<div class="bloc" id="blocSkillsBack">
		<h2 class="title">Mes compétences Back-End</h2>
		<br/>

		<?php
			foreach ($this->Model->_skills as $skill) {
				if($skill->getCategory() == 'Back-End'){
		?>
				<div class="skillbar clearfix " data-percent="<?php echo $skill->getMark() * 100 / 20; ?>%">
					<div class="skillbar-title" style="background: #2c3e50;"><span><?php echo $skill->getTitle(); ?></span></div>
					<div class="skillbar-bar" style="background: #4e5f72;"></div>
					<div class="skill-bar-percent"><?php echo $skill->getMark() * 100 / 20; ?>%</div>
				</div> <!-- End Skill Bar -->
		<?php
				}
			}
		?>
		<h2 class="subtitle" style="margin-bottom:10px;">Côté Base de données...</h2>
		<?php
			foreach ($this->Model->_skills as $skill) {
				if($skill->getCategory() == 'Base de données'){
		?>
				<div class="skillbar clearfix " data-percent="<?php echo $skill->getMark() * 100 / 20; ?>%">
					<div class="skillbar-title" style="background: #2c3e50;"><span><?php echo $skill->getTitle(); ?></span></div>
					<div class="skillbar-bar" style="background: #4e5f72;"></div>
					<div class="skill-bar-percent"><?php echo $skill->getMark() * 100 / 20; ?>%</div>
				</div> <!-- End Skill Bar -->
		<?php
				}
			}
		?>
	</div>
	<div class="bloc" id="blocDegree">
		<h2 class="title">J'ai obtenu</h2>
		<br/>
		<br/>
		<?php
			foreach ($this->Model->_studies as $degree) {
		?>
				<div class="degreeLine" >
					<h3 class="subtitle" style="text-align:left;"><?php echo $degree->getTitle() . ' ' . $degree->getSchool(); ?></h3>
					<p class="contenu" style="text-align:left;">
						<?php 
							echo $degree->getDescription();
						?>
						<br/>
					</p>
					<p class="contenu">
						<i style="float: right;">
							En <?php echo $degree->getPeriod(); ?>
						</i>

						<span class="cl"></span>
					</p>
					<br/>

				</div>
		<?php
			}
		?>
	</div>
</div>