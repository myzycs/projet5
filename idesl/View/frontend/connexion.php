<!-- Connexion pour les members -->	
<?php $title = "Connexion"; ?>
<?php ob_start(); ?>	
<div id="connexion">
	<div class="container">	
		<div id="MemberTitle">
			<h3>Cette section est reservée aux membres inscrits</h3>
			<h3>
				<?php 
					if (isset($_SESSION['erreur'])){
						echo $_SESSION['erreur'];
						//Vide l'erreur une fois affichée pour ne pas l'afficher à nouveau
						unset($_SESSION['erreur']);
					}
				?>
			</h3>	
		</div>
		<div class="membre">	
			<form method="post" action="index.php?action=memberLog">
				<legend>Connexion</legend>
					<table class="center">
						<tr>
							<td align="right">
								<label for="email"><span class="connexionSpan">Email :</span> </label>
							</td>
							<td>
								<input  type="text" name="email" id="email" value="<?php if (isset($email)){echo $email; } ?>" />
							</td>
						</tr>
						<br>
						<tr>
							<td align="right">
								<label for="password"><span class="connexionSpan">Mot de Passe :</span></label>
							</td>
							<td>
								<input type="password" name="password" id="password" />
							</td>
						</tr>
					</table>
					<br/>
				<p><input class="inputButton" type="submit" value="Connexion" /></p>
			</form>
			<br>
			<a href="index.php?action=inscription"><button class="inscriptionButton">Pas encore inscrit?</button></a>	
		</div>
	</div>
</div>	
	
<?php $content =ob_get_clean(); ?>
<?php require('frontendTemplate.php'); ?>