<?php 
namespace ide\Controller;

require_once('Model/MemberManager.php');

class MemberController
{
	public function accueil()
	{
		$memberManager = new \ide\Model\MemberManager();
		require('View/frontend/accueil.php');
	}
	public function infirmiers()
	{
		$memberManager = new \ide\Model\MemberManager();
		require('View/frontend/infirmiers.php');
	}
	public function soins()
	{
		$memberManager = new \ide\Model\MemberManager();
		require('View/frontend/soins.php');
	}

	public function connexion()
	{
		$memberManager = new \ide\Model\MemberManager();
		require('View/frontend/connexion.php');
	}

	public function inscription()
	{
		$memberManager = new \ide\Model\MemberManager();
		require('View/frontend/inscription.php');
	}

	public function popupForm()
	{
		$memberManager = new \ide\Model\MemberManager();
		if (isset($_POST['popupSend'])) {
			if (!empty($_POST['name'])AND !empty($_POST['telephone'])AND !empty($_POST['message'])) {

				/*$entete  = 'MIME-Version: 1.0' . "\r\n";
		        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		        $entete .= 'From: ' . $_POST['mail'] . "\r\n";
		        $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>

		        <p><b>Nom : </b>' . $_POST['name'] . '<br>
		        <b>Email : </b>' . $_POST['mail'] . '<br>
		        <b>tel : </b>' . $_POST['telephone'] . '<br>
		        <b>Message : </b>' . $_POST['message'] . '</p>';

		        $retour = mail('infirmierdsl@gmail.com', 'Envoi depuis page Contact', $message, $entete);
       			if($retour) {
		        	echo '<p>Votre message a bien été envoyé.</p>';
		        }
		        */

				$name = htmlspecialchars($_POST['name']);
				$tel = htmlspecialchars($_POST['telephone']);
				$message = htmlspecialchars($_POST['message']);
				$memberManager->popupMessage($name,$tel,$message);
				
				echo '<script language="javascript">';
				echo 'alert("Votre méssage a bien été envoyé")';
				echo '</script>';
				require('View/frontend/accueil.php');
				

			}
		}
	}


	public function addMember()
	{
		$memberManager = new \ide\Model\MemberManager();
		if (isset($_POST['inscriptionName'])) {
			if (!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['email2']) AND !empty($_POST['password']) AND !empty($_POST['password2'])) {

				$name = htmlspecialchars($_POST['name']);
				$email = htmlspecialchars($_POST['email']);
				$email2 = htmlspecialchars($_POST['email2']);
				$password = htmlspecialchars($_POST['password']);
				$password2 = htmlspecialchars($_POST['password2']);


				$findUser = $memberManager->findUser($email);

				if ($findUser[0]>0) {
					echo "Email existe déja";
					require('View/frontend/inscription.php');
					
				}else{
					$mdp= password_hash($password , PASSWORD_DEFAULT);
					//si les email correspondent 
					if ($email == $email2) {
						//si les mots de passe correspondent
						if ($password == $password2) {
							//lance la fonction qui enregistre les données à la BDD
							$memberManager->memberRegister($name,$mdp,$email);
							require('View/frontend/connexion.php');

						}
					}
				}
			}
		}
	}

	public function memberConnexion()
	{
		$memberManager = new \ide\Model\MemberManager();

		//variable de session
       	$email = $_POST['email'];
       	$password = $_POST['password'];
       	
       	//lance la fonction memberAuthentification de memberManager
       	$authentification = $memberManager->memberAuthentification($password,$email);
       	$resultat = $authentification->fetch();

       	//Verification du password  
       	$hashed_password = $resultat['password'];
		$isPasswordCorrect = password_verify($_POST['password'], $hashed_password);

		if (!$resultat)//si resultat différent 
        {   
            //variable a afficher si erreur dans la saisie des identifiants
            $_SESSION['erreur'] = 'Identifiant ou mot de passe incorrect';
            require('View/frontend/connexion.php');
        }
        else
        {
            //si le mot de passe concorde > connexion
            if ($isPasswordCorrect) 
            {
                $_SESSION['id'] = $resultat['id'];
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $resultat['name'];
                $_SESSION['role'] = $resultat['role'];
               
                require('View/backend/membre.php');

            }
            // sinon > erreur
            else 
            {   
                //variable a affiché en cas de mauvais mot de passe
                $_SESSION['erreur'] = 'Mot de passe incorrect';
                require('View/frontend/connexion.php');
            }
        }
    }

//BACKEND

    public function logOut()
    {
		// On détruit les variables de notre session
		session_unset ();
		// On détruit notre session
		session_destroy ();
		// On redirige le visiteur vers la page d'accueil
		require('view/frontend/accueil.php');         
    }

   

   	public function newPatient()
    {
    	$memberManager = new \ide\Model\MemberManager();

    	require('View/backend/addPatient.php');
    } 

    public function addPatient()
    {
    	$memberManager = new \ide\Model\MemberManager();

    	if (isset($_POST['addNewPatient'])) {
			if (!empty($_POST['name']) AND !empty($_POST['firstname']) AND !empty($_POST['address']) AND !empty($_POST['tel']) AND !empty($_POST['contact'])) {

				$name = htmlspecialchars($_POST['name']);
				$firstname = htmlspecialchars($_POST['firstname']);
				$address = htmlspecialchars($_POST['address']);
				$tel = htmlspecialchars($_POST['tel']);
				$contact = htmlspecialchars($_POST['contact']);
				
				//lance la fonction qui enregistre les données à la BDD
				$memberManager->addPatient($name,$firstname,$address,$tel,$contact);
				
				require('View/backend/patients.php');
			}
		}
    }

    public function getPatientList()
    {
    	$memberManager = new \ide\Model\MemberManager();
    	$listPatient = $memberManager->patientList();
    	require('View/backend/patients.php');
    } 

}