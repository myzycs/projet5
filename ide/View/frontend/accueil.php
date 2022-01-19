<?php $title ="Accueil";?>
<?php ob_start(); ?>

<div id="infos">
	<div class="information">
		<h1>Cabinet infirmier de Sainte Lorette 7e, 15e</h1>
	<br>
		<p><span>Aurélien de Sainte lorette</span> et ses collaborateurs interviennent au domicile.
		</p>
		<p>L'équipe d'infirmier intervient en roulement toute l'année afin que les soins réalisés chez nos patients soient <span>assurés 7 jours sur 7</span>.
		</p>
		<p>L'équipe intervient dans le <span>7eme et 15eme arrondissement de Paris</span>.
		</p>
	<br>
		<button class="open-button" onclick="openForm()">Contactez nous</button>
	<br>
	<br>
	</div>		
</div>

<?php $content =ob_get_clean(); ?>
<?php require('frontendTemplate.php'); ?>