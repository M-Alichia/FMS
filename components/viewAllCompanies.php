<?php
    session_start(); 

 	$root_path = '../../';
    include("../../models/company.php");
    include("../../dao/company_dao.php");    
    include("../../components/db_connect.php");
    $companyDao = new companyDao;
    
    $dbConnect = new dbConnect();
    $conn = $dbConnect->openConnection();

    $result = $companyDao->selectAll($conn);
    ?>
    <div class="row">
    <?php
    while($row = $result->fetch_assoc()) {
        ?>
        <div class="col-md-4">
            <div class="panel panel-default" style="border: 1px solid #30a5ff">
                <div class="panel-body">
                    <?php echo  $row["name"]; ?> 
                </div>
            </div>   
        </div>
    <?php
        }
    ?>
    </div>
    <?php
?>