<?php 

class File{

	public $id;
	public $name;
	public $type;
    public $uploadedBy;
	public $companyId;
	public $uploadedOn;
	public $content;

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

	public function setUploadedBy($uploadedBy){
		$this->uploadedBy = $uploadedBy;
	}

	public function getUploadedBy(){
		return $this->uploadedBy;
	}

    public function setCompanyId($companyId){
		$this->companyId = $companyId;
	}

	public function getCompanyId(){
		return $this->companyId;
	}
  
	public function setUploadedOn($uploadedOn){
		$this->uploadedOn = $uploadedOn;
	}

	public function getUploadedOn(uploadedOn){
		return $this->uploadedOn;
	}

	public function setContent($content){
		$this->content = $content;
	}

	public function getContent(){
		return $this->content;
	}
}

?>