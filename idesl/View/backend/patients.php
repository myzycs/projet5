<?php $title = "Patients"; ?>
<?php ob_start(); ?>  


<div id="listePatient">
    <div id="titre">
        <h3>Bonjour <?php echo $_SESSION['name']; ?> !</h3>
        <h3>Liste des patients</h3>
    </div>
    
    <div class="container">   
<?php
while ($data = $listPatient->fetch())
{
?> 
        <div class="box">
            <div class="content"> 

                <h3><?= $data['nom']; ?> <?= $data['prenom']; ?></h3>
                
                <em><b>Habite:</b> <?= $data['adresse']; ?></em>
                <br>
                <em><b>téléphone:</b> <?= $data['telephone']; ?></em>
                <br>  
                <em><b>contact:</b> <?= $data['contact']; ?></em>
                <br><br>               
            </div> 
        </div>
    


<?php
} // Fin de la boucle des patients
$listPatient->closeCursor();
?>

    </div>
</div>

<?php $content =ob_get_clean(); ?>
<?php require('backendTemplate.php'); ?>