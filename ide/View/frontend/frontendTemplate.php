<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>  
        <!--  Bootstrap css link  --> 
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		<link href="http://localhost/ide/Public/css/style.css" rel="stylesheet" /> 
        <script src="https://kit.fontawesome.com/9ad66bff6c.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php require('header.php') ?>
        
        <!-- FORMULAIRE DE CONTACT -->
    	<div class="form-popup" id="myForm">
            <form method="post" action="index.php?action=popupForm" class="form-container">
                <h2>Contactez-nous au : 07.67.54.63.92 <br>ou remplissez ce formulaire :</h2>
                <br>

                <label for="name"><b>Nom</b></label>
                <input type="text" placeholder="Votre nom" name="name" required>

                <label for="tel"><b>Téléphone</b></label>
                <input type="tel" placeholder="Numéro de téléphone" name="telephone" required>

                <label for="tel"><b>Mail (Facultatif) </b></label>
                <input type="mail" placeholder="Adresse mail" name="mail">

                <label for="message"><b>Message</b></label>
                <textarea rows="10" cols="60" placeholder="Votre méssage" name="message" required></textarea>
            
                <button type="submit" class="btn" name="popupSend">Envoyer</button>
                <button type="submit" class="btn cancel" onclick="closeForm()">Fermer</button>
            </form>
        </div>

        <?= $content ?>
        <?php require('footer.php') ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="Public/js/popup.js"></script>
    </body>

</html>