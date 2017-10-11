<?php

 class dbConnect{
 	
	public function openConnection(){
		// Create connection
		$conn = new mysqli("localhost", "root", "", "ftp");
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		
		return $conn;
	}

 }

?>