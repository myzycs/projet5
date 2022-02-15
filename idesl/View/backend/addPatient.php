<?php $title = "Membres"; ?>
<?php ob_start(); ?>  
    <br>
<div id="membrebackend">
    <div id="titre">
        <h3>Bonjour <?php echo $_SESSION['name']; ?> !</h3>
    </div>
    <br>
    <div>
        <h3>Ajouter un nouveau patient</h3>
        <br>
        <form method="POST" action="index.php?action=addPatient">
            <legend>Nouveau patient :</legend>

            <table class="center">
                <tr>
                    <td>
                        <label for="name"><span class="spanRight">Nom :</span></label>
                    </td>
                    <td>
                        <input type="text" name="name" id="name" placeholder="Nom du patient" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="firstname"><span class="spanRight">Prénom :</span></label>
                    </td>
                    <td>
                        <input type="text" name="firstname" id="firstname" placeholder="Prénom du patient" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="address"><span class="spanRight">Adresse :</span></label>
                    </td>
                    <td>
                        <input type="text" name="address" id="address" placeholder="Adresse du patient" required>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label for="tel"><span class="spanRight"> Numéro de téléphone :</span></label>
                    </td>
                    <td>
                        <input type="text" name="tel" id="tel" placeholder="Téléphone"  required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="contact"><span class="spanRight"> Contact (Famille) :</span></label>
                    </td>
                    <td>
                        <input type="text" name="contact" id="contact" placeholder="Nom, téléphone, lien"  required>
                    </td>
                </tr>
                
                <tr>
                    <td></td> 
                    <td>
                        <br>
                        <input class="btnPatient" type="submit" name="addNewPatient" value="Inscrire le nouveau patient"/>
                    </td>
                </tr>
            </table>
        </form>
    </div>      
</div>

<br>
<?php $content =ob_get_clean(); ?>
<?php require('backendTemplate.php'); ?>