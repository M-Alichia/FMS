<?php 

class User{

	public $id;
	public $name;
	public $email;
	public $password;
	
	public function setId($id){
		$this->id = $id;
	}

	public function getId(){
		return $this->id;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getName(){
		return $this->name;
	}

	public function setEmail($login){
		$this->login = $login;
	}

	public function getEmail(){
		return $this->login;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function getPassword(){
		return $this->password;
	}
}

?>
