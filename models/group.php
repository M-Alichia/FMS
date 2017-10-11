<?php 

class Group{

	public $id;
	public $name;
    public $admin;
	
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

    public function setAdmin($admin){
		$this->admin = $admin;
	}

	public function getAdmin(){
		return $this->admin;
	}
  
	
}

?>