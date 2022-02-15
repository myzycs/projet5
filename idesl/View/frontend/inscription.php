<!-- Connexion pour les members -->	
<?php $title = "Inscription"; ?>
<?php ob_start(); ?>	
<div id="inscription">
	<br><br>
	<div class="container">
		<div id="MemberTitle">
			<h3>Cette section est reservée aux infirmiers</h3>
		</div>
		<div class="formulaire">
			<form method="POST" action="index.php?action=register"> 
				<legend>Inscription</legend>
				<table class="center">
					<tr>
						<td align="right">
							<label for="name"><span>Nom :</span></label>
						</td>
						<td>
							<input type="text" name="name" id="name" placeholder="Votre nom" required>
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="Email"><span>Email :</span></label>
						</td>
						<td>
							<input type="email" placeholder="Votre Email" name="email" id="email" required>
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="Email2"><span> Confirmation du mail :</span></label>
						</td>
						<td>
							<input type="email" placeholder="Confirmez votre Email" name="email2" id="email2" required>
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="Password"><span> Mot de passe :</span></label>
						</td>
						<td>
							<input type="password" placeholder="Votre mot de passe" name="password" id="password" required>
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="Password2"><span> Confirmation du MDP :</span></label>
						</td>
						<td>
							<input type="password" placeholder="Confirmez votre mdp" name="password2" id="password2" required>
						</td>
					</tr>
					<tr>
						<td></td>
						<td align="center">
							<br>
							<input type="submit" name="inscriptionName" value="S'inscrire"/>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
	
	
<?php $content =ob_get_clean(); ?>
<?php require('frontendTemplate.php'); ?>