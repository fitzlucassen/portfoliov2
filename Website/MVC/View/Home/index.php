<link type="text/css" rel="stylesheet" href="<?php echo __css_directory__;?>/home.css" />
<link type="text/css" rel="stylesheet" href="<?php echo __css_directory__;?>/home-responsive.css" />
<link rel="stylesheet" type="text/css" href="<?php echo __css_directory__;?>/Module/style_common.css" />
<link rel="stylesheet" type="text/css" href="<?php echo __css_directory__;?>/Module/style10.css" />
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
<title>Thibault - Développeur web</title>


<script type="text/javascript" src="<?php echo __js_directory__ ?>/home.js"></script>
<?php
    // inclure ci-dessus les balises à inclure dans la balise <head> du layout
    $head = $this->RegisterViewHead();
    // START CONTENT
    // Intégrer ci-dessous la vue
?>
<div class="page">
	<?php
		if(isset($this->Model->_message) && !empty($this->Model->_message)){
			echo '<div class="message">' . $this->Model->_message . '</div>';
		}
	?>
	<div class="bloc" id="blocMe">
		<div class="hublot">
			<img src="<?php echo __image_directory__;?>/moi.jpg" alt="">
		</div>

		<h1 class="title">Thibault Dulon</h1>
		<h2 class="subtitle">Web Developer</h2>
		<p class="contenu" style="margin-top:40px;">
			<span class="guillemet">«</span>
			<i>Développeur web depuis 3ans, 
				je me passionne pour les nouvelles technologies du web. 
				Auditeur de plusieurs Meetup et acteur dans quelques Hackathon, je suis spécialisé dans la conception de site, la veille 
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
			<br/>

			<div class="socialContainer">
				<p class="contactLine">
					<a href="https://github.com/fitzlucassen" target="_blank">
						<img src="<?php echo __image_directory__;?>/github.png" alt="Regardez mon github" title="Github">
					</a>
				</p>
				<div class="spacer"></div>
				<p class="contactLine">
					<a href="http://fr.viadeo.com/fr/profile/thibault.dulon1" target="_blank">
						<img src="<?php echo __image_directory__;?>/viadeo.png" alt="Retrouvez-moi sur viadeo" title="Viadeo">
					</a>
				</p>
				<div class="spacer"></div>

				<p class="contactLine">
					<a href="https://twitter.com/Fitz_Lucassen" target="_blank">
						<img src="<?php echo __image_directory__;?>/twitter.png" alt="Suivez-moi sur twitter" title="twitter">
					</a>
				</p>
				<div class="spacer"></div>
				<p class="contactLine">
					<a href="#blocContactForm">
						<img src="<?php echo __image_directory__;?>/email.png" alt="Joignez-moi par e-mail" title="e-mail">
					</a>
				</p>
			</div>
		</div>
		<div class="bloc" id="blocCompanies">
			<h2 class="title">J'y ai travaillé</h2>
			<br/>

			<?php
				foreach ($this->Model->_companies as $company) {
			?>
					<p class="companyLine">
						<a href="<?php echo $company->getUrl(); ?>" target="_blank">
							<img src="<?php echo __image_directory__ . '/' . $company->getImage(); ?>" alt="j'ai travaillé pour <?php echo $company->getTitle(); ?>" title="<?php echo $company->getTitle(); ?>" >
						</a>
					</p>
					<br/>
					<br/>
					<br/>
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
	<br/>
	<div class="bloc" id="blocProject">
		<h2 class="title">Mes réalisations</h2>
		<br/>
		<br/>

		<?php
			foreach ($this->Model->_projects as $project) {
		?>
				<div class="view view-tenth">
                    <img src="<?php echo __image_directory__ . '/' . $project->getImage(); ?>" />
                    <div class="mask">
                        <h3><?php echo $project->getTitle(); ?></h3>
                        <p><?php echo $project->getDescription(); ?></p>
                        
                        <p class="btnP"><a href="<?php echo $project->getLink();?>" class="info" target="_blank">Voir le site</a></p>
                    </div>
                </div>
		<?php
			}
		?>
	</div>

	<br/>
	<div class="bloc" id="blocContactForm">
		<h2 class="title">Contactez-moi</h2>
		<br/>
		<br/>

		<div class="contactForm">
			<form action="" method="POST">
				<input type="email" name="email" placeholder="Votre adresse e-mail" />
				<br/>
				<input type="text" name="subject" placeholder="Sujet de votre demande" />
				<textarea name="body" cols="10" rows="10" placeholder="Votre message"></textarea>

				<br/>
				<input type="submit" value="Envoyer" />
			</form>
		</div>
	</div>
	<br/>
	<br/>
</div>