<?php
ob_start();
include 'header.php';
include 'customer_profile_header.php' ;
if($_SESSION['customer_login'] != true){

	header('location:customer_login.php');
	return 0;
	}

	

?>

<html>
<head>
<title>Fund Transfer</title>
<link rel="stylesheet" type="text/css" href="css/fund_transfer.css"/>    
<style>
#customer_profile .link4{

background-color: rgba(5, 21, 71,0.4);

}

 .fundtransfer_conainer img{ 
    align-items: center;
    align-content: center;
    margin-left: 80px;
    margin-bottom: 20px;
    margin-top: 20px;
} 
    </style>
 </head>
<body>


    <div class="fundtransfer_conainer">
 <img src="img/qr-code-bee-is.png" alt="qr" width="70%">
		
    </div>
             

    </body>
    <?php include 'footer.php' ; ?>
</html>

