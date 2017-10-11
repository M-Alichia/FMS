<?php

 	$root_path = '../../';
    include("../../models/company.php");
    include("../../dao/company_dao.php");
    include("../../components/db_connect.php");
    
 	$company = new company;
 	$companyDao = new companyDao;

    $company->setName($_POST["name_company"]);
    $company->setAdmin($_POST["admin"]);
    

    $dbConnect = new dbConnect();
    $conn = $dbConnect->openConnection();

    $result = $companyDao->insert($conn, $company);

    if($result === false){
    	echo "false";
    } else{
        header('Location: ../dashboard/home.php');
    }

?>