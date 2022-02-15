<?php $title ="Accueil";?>
<?php ob_start(); ?>

<!-- FORMULAIRE DE CONTACT -->
<div id="contactForm">
	
	<h1>Contactez-nous</h1>
	<h2>Par téléphone au 07.67.54.63.92 ou via ce formulaire</h2>
	<div class="form-container">
	    <form method="POST" action="View/frontend/mail.php">
	       
	        <label for="name"><b>Nom:</b></label>
	        <input type="text" name="name" id="name" required>

	      	<label for="tel"><b>Téléphone:</b></label>
	        <input type="tel"  name="telephone" id="tel" required>

	        <label for="mail"><b>eMail:</b></label>
	        <input type="email"  name="email" id="mail" required>

	        <label for="sujet"><b>sujet:</b></label>
	        <input type="text" name="sujet" id="sujet" required>

	        <label for="message"><b>Message:</b></label>
	        <textarea rows="10" cols="60" name="message" id="message" required></textarea>
	    
	        <input type="submit" class="contactBtn" name="contactMail" value="Envoyer">
	        
	    </form>
    </div>

</div>

<?php $content =ob_get_clean(); ?>
<?php require('frontendTemplate.php'); ?>