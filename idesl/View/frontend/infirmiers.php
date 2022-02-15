<!-- Connexion pour les members -->	
<?php $title = "Infirmiers"; ?>
<?php ob_start(); ?>	
<div id="infirmiers">
	<div class="container">
		<div id="nosinfirmiers" >
			<br>
			<h1>Notre équipe d'infirmier</h1>
			<div class="row">
				<div class="col" id="photoaurel">
					<img src="Public/images/aurelien.jpg" class="img-fluid float-start" alt="photo aurelien" >
				</div>
				<div class="col" id="aurelien">
					
					<ul>
						<li class="nomInfirmier">Aurelien de Sainte Lorette</li>
						<li>Diplomé en 2011 IFSI de la Pitié-Salpêtrière Paris</li>
						<li>2011-2013 infirmier en neurologie à la Pitié-Salpêtrière à Paris</li>
						<li>2013-2015 neuro-chirurgie au CHUM de Montréal Canada </li>
						<li>2016 à nos jours infimer libéral</li>
					</ul>
					
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col" id="photocoline">
					<img src="Public/images/coline.jpg" class="img-fluid float-start" alt="photo coline">
				</div>
				<div class="col" id="coline">
					<ul>
						<li class="nomInfirmier">Coline de Sainte Lorette</li>
						<li>Diplomé en 2016 IFSI de la Pitié-Salpêtrière Paris</li>
						<li>2016-2019 infirmière en unité de soins intensifs de rythmologie à la Pitié-Salpêtrière à Paris</li>
						<li>2019 à nos jours infirmiere libérale Paris</li>	
					</ul>
				</div>
				
			</div>
			<br>
			<div class="row">
				<div class="col" id="photomarion">
					<img src="Public/images/marion.jpg" class="img-fluid float-start" alt="photo marion">
				</div>
				<div class="col" id="marion">
					<ul>
						<li class="nomInfirmier">Marion de Sainte Lorette</li>
						<li>Diplomé en 2009 IFSI de la Pitié-Salpêtrière Paris</li>
						<li>2010-2019 infirmière en unité de chirurgie thoracique et vasculaire à Bichat à Paris</li>
						<li>2020 à nos jours infirmiere libérale Paris</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $content =ob_get_clean(); ?>
<?php require('frontendTemplate.php'); ?>