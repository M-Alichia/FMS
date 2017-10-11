<?php

 	$root_path = '../../';
    include("../../models/user.php");
    include("../../dao/user_dao.php");
    include("../../components/db_connect.php");
    
 	$user = new user;
 	$userDao = new userDao;

    $user->setEmail($_POST["email"]);
    $user->setPassword($_POST["password"]);

    $dbConnect = new dbConnect();
    $conn = $dbConnect->openConnection();

    $result = $userDao->authenticate($conn, $user);

    if($result === false){
    	echo "false";
    } else{
        session_start();
        $_SESSION["name"] = $result["name"];
        $_SESSION["email"] = $result["email"];
        $_SESSION["id"] = $result["id"];
        echo "true";
    }

?>