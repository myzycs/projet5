<?php session_start();
 
/*
if ($_SESSION['role']  >1) {
*/

?>

  
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>  
        <!--  Bootstrap css link  --> 
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		<link href="Public/css/style.css" rel="stylesheet" /> 
        <script src="https://kit.fontawesome.com/9ad66bff6c.js" crossorigin="anonymous"></script>
    </head>

    <body id="backendBody">
        
        <?php require('header.php') ?>
    	<div class="backendContent">
            <?= $content ?>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>

</html>

<?php 
/*
}else{
    echo "Merci de contacter l'administrateur pour avoir acces à la partie privée.";
}
*/
?>