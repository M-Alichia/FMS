<?php 

class groupDao{

	function __construct() {
   }

	public function insert($conn, $group){

		if (!$this->selectByName($conn, $group->getName())) {
			$sql = 'INSERT INTO `group` ( `name`, `admin`)
			VALUES ( "'.$group->getName().'", '.$group->getAdmin().');';
	
			// $sql = 'INSERT INTO group (name, admin)
			// VALUES ("'.$group->getName().'",'.$group->getAdmin().')';
	
			if ($conn->query($sql) === TRUE) {
				return TRUE;
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
				return FALSE;
			}			
		}else{
			header('Location: creategroup.php');
			die();
		}
		
	}

	public function selectAll($conn){

		$sql = "SELECT * FROM `group`";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			return $result;
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		    return FALSE;
		}

	}

	public function selectById($conn, $id){

		$sql = "SELECT * FROM group WHERE id=" . $id;

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			return $result;
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		    return FALSE;
		}

	}

	public function selectByName($conn, $name){
		
	
		$sql = "SELECT * FROM `group` WHERE `name` = '".$name."' ";
		
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

	public function update($conn, $group){
	
		$sql = "UPDATE group SET name=" . $group->getName() . ", admin=" . $group->getAdmin() . "WHERE id=" . $group->getId();

		if ($conn->query($sql) === TRUE) {
		    return TRUE;
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		    return FALSE;
		}

	}

	public function deleteById($conn, $id){

		$sql = "DELETE FROM group WHERE id=" . $id;

		if ($conn->query($sql) === TRUE) {
		    return TRUE;
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		    return FALSE;
		}

	}

	public function authenticate($conn, $group){

		$sql = 'SELECT * FROM group WHERE = "' . $group->getAdmin() . '"';

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		        if($row["name"] === $group->getName()){
		        	if($row["admin"] === $group->getAdmin()){
		        		return $row;
		        	}else{
		        		return false;
		        	}
		        }else{
		        	return false;
		        }
		    }

		} else {
		    return false;
		}
	}
}

?>