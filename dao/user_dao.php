<?php 

class userDao{

	function __construct() {
   }

	public function insert($conn, $user){

		$sql = 'INSERT INTO user (name, email, password)
		VALUES ("'.$user->getName().'","'.$user->getEmail().'","'.$user->getPassword().'")';

		if ($conn->query($sql) === TRUE) {
		    return TRUE;
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		    return FALSE;
		}
	}

	public function selectAll($conn){

		$sql = "SELECT * FROM user";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			return $result;
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		    return FALSE;
		}

	}

	public function selectById($conn, $id){

		$sql = "SELECT * FROM user WHERE id=" . $id;

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			return $result;
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		    return FALSE;
		}

	}

	public function update($conn, $user){
	
		$sql = "UPDATE user SET name=" . $user->getName() . ", email=" . $user->getEmail() . ", password=" . $user->getPassword() . "WHERE id=" . $user->getId();

		if ($conn->query($sql) === TRUE) {
		    return TRUE;
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		    return FALSE;
		}

	}

	public function deleteById($conn, $id){

		$sql = "DELETE FROM user WHERE id=" . $id;

		if ($conn->query($sql) === TRUE) {
		    return TRUE;
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		    return FALSE;
		}

	}

	public function authenticate($conn, $user){

		$sql = 'SELECT * FROM user WHERE email= "' . $user->getEmail() . '"';

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		        if($row["email"] === $user->getEmail()){
		        	if($row["password"] === $user->getPassword()){
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