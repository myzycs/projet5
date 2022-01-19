<?php 
namespace ide\Model;
require_once('Model/Manager.php');

//Classe
class MemberManager extends Manager
{

	//Methodes
	public function findUser($email)
	{
		$db = $this->dbConnect();
		$req=$db->prepare('SELECT COUNT(*) FROM admin WHERE email = :email');
		$req ->execute(array('email' => $email));

		return $req->fetch();
	}
	public function memberRegister($name,$mdp,$email)
	{
		$db=$this->dbConnect();
		$req = $db->prepare('INSERT INTO admin (name,password,email) VALUES (?,?,?)');
		$result = $req->execute(array($name,$mdp,$email));

		return $result;
	}
	
	public function memberAuthentification($password,$email)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT * FROM admin WHERE email = :email');
        $req ->execute(array('email' => $email));
        
        return $req;
	}

	public function popupMessage($name,$tel,$message)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('INSERT INTO messagerie (name,telephone,message) VALUES (?,?,?)');
		$result = $req->execute(array($name,$tel,$message));
		return $result;
	}

	public function addPatient($name,$firstname,$address,$tel,$contact)
	{
		$db=$this->dbConnect();
		$req = $db->prepare('INSERT INTO patients (nom,prenom,adresse,telephone,contact) VALUES (?,?,?,?,?)');
		$result = $req->execute(array($name,$firstname,$address,$tel,$contact));

		return $result;
	}

	public function patientList()
	{
		$db = $this->dbConnect();
		$req = $db->query('SELECT * FROM patients ORDER by nom');
		return $req;

	}	
	
}
