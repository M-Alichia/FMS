<?php

 	$root_path = '../../';
    include("../../models/user.php");
    include("../../dao/user_dao.php");
    include("../../components/db_connect.php");
    
 	$user = new user;
 	$userDao = new userDao;

    $user->setName($_POST["full_name"]);
    $user->setEmail($_POST["email"]);
    $user->setPassword($_POST["password"]);

    $dbConnect = new dbConnect();
    $conn = $dbConnect->openConnection();

    $result = $userDao->insert($conn, $user);

    if($result === false){
    	echo "false";
    } else{
        header('Location: login.php');
    }

?>