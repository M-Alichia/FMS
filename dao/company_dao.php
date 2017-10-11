<?php 

class companyDao{

	function __construct() {
   }

	public function insert($conn, $company){

		$sql = 'INSERT INTO company (name, admin)
		VALUES ("'.$company->getName().'","'.$company->getAdmin().'")';

		if ($conn->query($sql) === TRUE) {
		    return TRUE;
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		    return FALSE;
		}
	}

	public function selectAll($conn){

		$sql = "SELECT * FROM company";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			return $result;
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		    return FALSE;
		}

	}

	public function selectById($conn, $id){

		$sql = "SELECT * FROM company WHERE id=" . $id;

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			return $result;
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		    return FALSE;
		}

	}

	public function update($conn, $company){
	
		$sql = "UPDATE company SET name=" . $company->getName() . ", admin=" . $company->getAdmin() . "WHERE id=" . $company->getId();

		if ($conn->query($sql) === TRUE) {
		    return TRUE;
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		    return FALSE;
		}

	}

	public function deleteById($conn, $id){

		$sql = "DELETE FROM company WHERE id=" . $id;

		if ($conn->query($sql) === TRUE) {
		    return TRUE;
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		    return FALSE;
		}

	}

	public function authenticate($conn, $company){

		$sql = 'SELECT * FROM company WHERE admin= "' . $company->getAdmin() . '"';

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		        if($row["name"] === $company->getName()){
		        	if($row["admin"] === $company->getAdmin()){
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