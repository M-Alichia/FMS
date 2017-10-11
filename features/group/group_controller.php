<?php
    session_start(); 

 	$root_path = '../../';
    include("../../models/group.php");
    include("../../dao/group_dao.php");
    include("../../components/db_connect.php");
    
 	$group = new group;
 	$groupDao = new groupDao;

    $group->setName($_POST["full_name"]);
    $group->setAdmin(intval($_SESSION["id"]));
    

    $dbConnect = new dbConnect();
    $conn = $dbConnect->openConnection();

    $result = $groupDao->insert($conn, $group);

    if($result === false){
    	echo "false";
    } else{
        header('Location: ../dashboard/home.php');
    }

?>