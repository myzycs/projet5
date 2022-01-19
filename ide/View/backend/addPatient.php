<?php $title = "Membres"; ?>
<?php ob_start(); ?>  
    <br>
<div id="membrebackend">
    <div id="titre" align="center">
        <h3>Bonjour <?php echo $_SESSION['name']; ?> !</h3>
    </div>
    <br>
    <div align="center">
        <h3>Ajouter un nouveau patient</h3>
        <br>
        <form method="POST" action="index.php?action=addPatient">
            <legend>Nouveau patient :</legend>

            <table class="center">
                <tr>
                    <td align="right">
                        <label for="name"><span>Nom :</span></label>
                    </td>
                    <td>
                        <input type="text" name="name" id="name" placeholder="Nom du patient" required>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="firstname"><span>Prénom :</span></label>
                    </td>
                    <td>
                        <input type="text" name="firstname" id="firstname" placeholder="Prénom du patient" required>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="address"><span>Adresse :</span></label>
                    </td>
                    <td>
                        <input type="text" name="address" id="address" placeholder="Adresse du patient" required>
                    </td>
                </tr>
                
                <tr>
                    <td align="right">
                        <label for="tel"><span> Numéro de téléphone :</span></label>
                    </td>
                    <td>
                        <input type="text" name="tel" id="tel" placeholder="Téléphone"  required>
                    </td>
                </tr>

                <tr>
                    <td align="right">
                        <label for="contact"><span> Contact (Famille) :</span></label>
                    </td>
                    <td>
                        <input type="text" name="contact" id="contact" placeholder="Nom, téléphone, lien"  required>
                    </td>
                </tr>
                
                <tr>
                    <td></td> 
                    <td align="center">
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