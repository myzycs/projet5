<?php $title = "Soins à domicile"; ?>
<?php ob_start(); ?>	

<div id="soins">
	<div class="presentation">	
		<h1>Soins à domicile réalisés par notre équipe</h1>
		<div class="container">

			<div class="box">
				<span></span>
				<div class="content">
					<h2>Vaccination: </h2> 
					<p>nous proposons la vaccination pour tous, et pour tout type de vaccin.</p>
				</div>		
			</div>
			<div class="box">
				<span></span>
				<div class="content">
					<h2>Pansement:</h2>
					<p>simples ou complexes, nous changeons les pansements selon le protocole du médecin.</p>
				</div>		
			</div>
			<div class="box">
				<span></span>
				<div class="content">
					<h2>Injections:</h2>
					<p>notre équipe est qualifiée pour tous types d’injections : intramusculaires, sous-cutanées, ou intraveineuses.</p>
				</div>		
			</div>
			<div class="box">
				<span></span>
				<div class="content">
					<h2>Suivi du diabète:</h2>
					<p>nous passons à votre domicile pour surveiller votre taux de glycémie et adapter, au besoin, le protocole d’insuline.</p>
				</div>		
			</div>
			<div class="box">
				<span></span>
				<div class="content">
					<h2>Perfusions:</h2>
					<p>nous installons le matériel nécessaire et vous guidons dans les étapes, que ce soit une perfusion sous cutanée ou intraveineuse, ou à l’aide d’un kit fourni par votre pharmacie.</p>
				</div>		
			</div>
			<div class="box">
				<span></span>
				<div class="content">
					<h2>Retrait de chimiothérapie:</h2>
					<p>vous êtes rentré à votre domicile avec un diffuseur qui administre votre dose de chimiothérapie ? Nous venons retirer cette perfusion « portable » à l’heure prévue, souvent 48h après la pose.</p>
				</div>		
			</div>
			<div class="box">
				<span></span>
				<div class="content">
					<h2>Aide à la toilette:</h2>
					<p>dans le cas de difficultés pour des soins d’hygiène, pour l’habillage ou pour tout geste du quotidien, notre équipe intervient dans le cadre du maintien à domicile. Tout en respectant les habitudes de vie, nous accompagnons quotidiennement nos patients.</p>
				</div>		
			</div>
			<div class="box">
				<span></span>
				<div class="content">
					<h2>Préparation et administration des médicaments:</h2>
					<p>nous préparons et administrons une ou plusieurs fois par jour vos médicaments ou ceux de votre proche selon la prescription médicale.</p>
				</div>		
			</div>
			<div class="box">
				<span></span>
				<div class="content">
					<h2>Sondage urinaire:</h2>
					<p>à l’aide du kit de sondage procuré par la pharmacie, nous pouvons poser une sonde ou la retirer.</p>
				</div>		
			</div>
			<div class="box">
				<span></span>
				<div class="content">
					<h2> Dialyses:</h2>
					<p>formée pour les dialyses, notre équipe organise avec vous des visites selon le protocole médical recommandé.</p>
				</div>		
			</div>
			<div class="box">
				<span></span>
				<div class="content">
					<h2>Bas de contention:</h2>
					<p>l’objectif est de poser vos bas de contention au lever le matin et de retirer vos bas au plus près du coucher.</p>
				</div>		
			</div>

		</div>
	</div>	
</div>

	
<?php $content =ob_get_clean(); ?>
<?php require('frontendTemplate.php'); ?>