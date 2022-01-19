<?php 
session_start();

require ('Controller/MemberController.php');

class router{
	public function verification(){
		$memberController = new \ide\Controller\MemberController();
		$memberManager = new \ide\Model\MemberManager();

		try{
			if(isset($_GET['action'])){
				if($_GET['action']=='accueil'){
					$memberController->accueil();
				}
				else if ($_GET['action'] == 'infirmiers'){
					$memberController->infirmiers();	
				}
				else if ($_GET['action'] =='soins') {
                    $memberController->soins();
                }
                //ouvre la page d'identification 
				else if ($_GET['action'] == 'connexion'){
					$memberController->connexion();	
				}
				//lance la connection 
				else if ($_GET['action'] == 'memberLog'){
					$memberController->memberConnexion();		
				}
				//ouvre la page d'inscription
				else if ($_GET['action'] == 'inscription'){
					$memberController->inscription();	
				}
				//lance l'inscription via le formulaire
				else if ($_GET['action'] == 'register'){
					$memberController->addMember();	
				}			
				else if ($_GET['action'] =='logout') {
                    $memberController->logOut();
                }
                //envoi du message via la popup
                else if ($_GET['action'] =='popupForm') {
                    $memberController->popupForm();
                }

                else if ($_GET['action'] =='patientList') {
                    $memberController->getPatientList();
                }


                //ouvre le formulaire d'ajout patient
                else if ($_GET['action'] =='newPatient') {
                    $memberController->newPatient();
                }
                //ajoute le patient via le formulaire
                else if ($_GET['action'] =='addPatient') {
                    $memberController->addPatient();
                }
                
                
			}else{
				$memberController->accueil();
			}
		}
		catch(Exception $e) { // S'il y a eu une erreur, alors...
    		echo 'Erreur : ' . $e->getMessage();
		}
	}
}

//Variable qui appelle la classe router
$router = new Router();
//lance la fonction test de la classe router
$router->verification();
?>