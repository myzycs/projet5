<?php $title = "Liste des membres"; ?>
<?php ob_start(); ?>  
<br>
<div id="membrebackend">
    <div id="titre" align="center">
        <h3>Bonjour <?php echo $_SESSION['name']; ?> !</h3>
    </div>
    <br>
    <div align="center">
        <h3>Liste des membres</h3>
        <div id="listMembre">


          
<?php
while ($data = $listPatient->fetch())
{
?>        
<br>
<div class="jumbotron">
    <div class="row">
        <div class="col text-center">
            <h3>
                <?= htmlspecialchars($data['nom']); ?>
                <br>
            </h3>

            <em>Habite <?= $data['adresse']; ?></em>
            <br>
            <em>téléphone: <?= $data['telephone']; ?></em>
            <br>  
            <em>contact: <?= $data['contact']; ?></em>
            <br><br>
            
            
        </div>
    </div>
</div>





<?php
} // Fin de la boucle des patients
$listPatient->closeCursor();
?>
<?php $content =ob_get_clean(); ?>
<?php require('backendTemplate.php'); ?>