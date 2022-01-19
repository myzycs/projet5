<?php $title = "Membres"; ?>
<?php ob_start(); ?>  
    <br>
<div id="membrebackend">
    <div id="titre" align="center">
        <h3>Bonjour <?php echo $_SESSION['name']; ?> !</h3>   
        <h4>Nous sommes le <?php echo date('d/m/Y h:i:s'); ?></h4>
    </div>
    <br>
</div>


<div id="membersContent">
        <br>
        <!--VERIFICATION DES DROITS -->

        <?php if ($_SESSION['role']=="1") { ?>
            <div class="menuMembre">
                <h4>VOUS N'AVEZ PAS LES DROITS</h4>
                <br>
                <a href="#">Demande de droits</a>
            </div>
        <?php    
        }
        ?>

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
                <ul>
                    <li>
                        <div class="menuMembreBoutton">
                            <a class="link_button " href="index.php?action=patientList"><em class="fas fa-address-card"></em> Liste patients</a>
                        </div>
                    </li>
                    <br>
                    <li>
                        <div class="menuMembreBoutton">
                            <a class="link_button" href="index.php?action=newPatient"><em class="fas fa-user-plus"></em> Ajouter un nouveau patient</a>
                        </div>
                    </li>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div id="deconnexion" align="center">
                         <a class="deconnexion" href="index.php?action=logout">Déconnexion</a>
                    </div>
                    
                </ul>
            </div>

            
        <?php    
        }
        ?>

        <br>
        <br>
        <br>
    


    
</div>


    <br>
<?php $content =ob_get_clean(); ?>
<?php require('backendTemplate.php'); ?>