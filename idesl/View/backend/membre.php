<?php $title = "Membres"; ?>
<?php ob_start(); ?>  
    
<div id="membrebackend">

    <div id="titre">
        <h3>Bonjour <?php echo $_SESSION['name']; ?> !</h3>   
        <h4>Nous sommes le <?php echo date('d/m/Y h:i:s'); ?></h4>
    </div>

    <div id="membersContent">
            
            <!--VERIFICATION DES DROITS -->

            <?php if ($_SESSION['role']=="2") { ?>
                <div class="menuMembre">
                    <button href="index.php?action=patientList"><em class="fas fa-address-card"></em> Liste patients</button>
                </div>
            <?php    
            }
            ?>

            <?php if ($_SESSION['role']=="3") { ?>
                <div class="menuMembre">
                    <button href="index.php?action=patientList"><em class="fas fa-address-card"></em> Liste patients</button>
                </div>
            <?php    
            }
            ?>

            <?php if ($_SESSION['role']=="4") { ?>
                <div class="menuMembre">
                    
                    <div class="menuMembreBoutton">
                        <a class="link_button " href="index.php?action=patientList"><em class="fas fa-address-card"></em> Liste patients</a>
                    </div>
                    
                    <div class="menuMembreBoutton">
                        <a class="link_button" href="index.php?action=newPatient"><em class="fas fa-user-plus"></em> Ajouter un nouveau patient</a>
                    </div>

                    <div id="deconnexion">
                         <a class="deconnexion" href="index.php?action=logout">Déconnexion</a>
                    </div>  
            
                </div>
                
            <?php    
            }
            ?>
      
    </div>
</div>

<?php $content =ob_get_clean(); ?>
<?php require('backendTemplate.php'); ?>