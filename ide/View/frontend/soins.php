<?php $title = "Soins à domicile"; ?>
<?php ob_start(); ?>	

<div id="soins">
	<div class="presentation">
		<h1>Soins à domicile réalisés par notre équipe</h1>
		<br>
		<li> <span>Vaccination</span> : nous proposons la vaccination pour tous, et pour tout type de vaccin.</li>
		<li><span>Pansement</span> : simples ou complexes, nous changeons les pansements selon le protocole du médecin.</li>
		<li> <span>Injections</span> : notre équipe est qualifiée pour tous types d’injections : intramusculaires, sous-cutanées, ou intraveineuses.</li>
		<li><span>Suivi du diabète</span> : nous passons à votre domicile pour surveiller votre taux de glycémie et adapter, au besoin, le protocole d’insuline.</li>
		<li><span>Perfusions </span>: nous installons le matériel nécessaire et vous guidons dans les étapes, que ce soit une perfusion sous cutanée ou intraveineuse, ou à l’aide d’un kit fourni par votre pharmacie.</li>
		<li><span>Retrait de chimiothérapie</span> : vous êtes rentré à votre domicile avec un diffuseur qui administre votre dose de chimiothérapie ? Nous venons retirer cette perfusion « portable » à l’heure prévue, souvent 48h après la pose.</li>
		<li><span>Aide à la toilette</span> : dans le cas de difficultés pour des soins d’hygiène, pour l’habillage ou pour tout geste du quotidien, notre équipe intervient dans le cadre du maintien à domicile. Tout en respectant les habitudes de vie, nous accompagnons quotidiennement nos patients.</li>
		<li><span>Préparation et administration des médicaments</span> : nous préparons et administrons une ou plusieurs fois par jour vos médicaments ou ceux de votre proche selon la prescription médicale.</li>
		<li><span>Sondage urinaire </span>: à l’aide du kit de sondage procuré par la pharmacie, nous pouvons poser une sonde ou la retirer.</li>
		<li><span> Dialyses </span>: formée pour les dialyses, notre équipe organise avec vous des visites selon le protocole médical recommandé.
		Bas de contention : l’objectif est de poser vos bas de contention au lever le matin et de retirer vos bas au plus près du coucher.</li>
	</div>	
</div>

	
<?php $content =ob_get_clean(); ?>
<?php require('frontendTemplate.php'); ?>