<?php $title ="Accueil";?>
<?php ob_start(); ?>

<div id="infos"> <!--container-->
	<div class="information"><!--box-->

		<span class="contour"></span>

		<div class="content">
			<h1>Cabinet infirmier de Sainte Lorette 7e, 15e</h1>
			<p><b>Aurélien de Sainte lorette</b> et ses collaborateurs interviennent au domicile.</p>
			<p>L'équipe d'infirmier intervient en roulement toute l'année afin que les soins réalisés chez nos patients soient <b>assurés 7 jours sur 7</b>.</p>
			<p>L'équipe intervient dans le <b>7eme et 15eme arrondissement de Paris</b>.</p>
			<div class="open-button"><span class="contactUs"><a href="index.php?action=contactUs">Contactez nous</a></span></div>
		</div>

	</div>		
</div>

<?php $content =ob_get_clean(); ?>
<?php require('frontendTemplate.php'); ?>