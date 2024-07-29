<html>
<head><title>Staff Home</title>
<link rel="stylesheet" type="text/css" href="css/credit_customer_ac.css" />
</head>
<body>
<?php
	include 'header.php' ;
    include 'staff_profile_header.php' ;?>
    <div class="cust_credit_container">
	<form method="post">
    <input class="customer" type="text" name="customer_account_no" placeholder="Customer A/c No" required><br>
    <!-- <input class="customer" type="text" name="credit_amount" placeholder="Credit Amount" ><br> -->
	<input class="customer" type="text" name="amount" placeholder="Amount" ><br>	
	<!-- <input class="customer" type="text" name="debit_amount" placeholder="Debit Amount" ><br> -->
    <input class="customer" type="submit" name="credit_btn" value="Credit" >
	<input class="customer" type="submit" name="debit_btn" value="Debit">
    </form><br>
</div>
<!-- second container  -->
<?php include'footer.php'; ?>
</body>
</html>


<?php 

if(isset($_POST['credit_btn'])){

    $cust_ac_no = $_POST['customer_account_no'];
    $amount = $_POST['amount'];

	if(!is_numeric($_POST['amount'])){

		echo '<script>alert("Invalid amount")</script>';
	}
	
	else { 
    
	include 'db_connect.php';

	//Customer details required for transaction
	$sql = "SELECT * FROM bank_customers WHERE Account_no = $cust_ac_no ";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
    $row = $result->fetch_assoc();
	$customer_ac_no = $row['Account_no'];
	$customer_id = $row['Customer_ID'];
	$customer_name = $row['Username'];
	$customer_ifsc= $row['IFSC_Code'];
	$customer_mob = $row['Mobile_no'];
	$customer_netbal = $row['Current_Balance'] + $amount;
	$customer_passbk = "passbook_".$customer_id;
	

    
    	//Generate Transaction ID
		$transaction_id = mt_rand(100,999).mt_rand(1000,9999).mt_rand(10,99);
		
		//Transaction Date

		date_default_timezone_set('Asia/Kolkata'); 
		$transaction_date = date("d/m/y h:i:s A");
		
		//Remark or Narration
		$remark = "Cash Deposit";
			
		//customer's Transaction Description
        $Transac_description = "Cash Deposit/".$transaction_id;
		
		date_default_timezone_set('Asia/Kolkata'); 
		$date_time = date("d/m/y h:i:s A");

				//-------------------To the customer---------------------------------------------------- 
				

        // Set autocommit to off
        $conn->autocommit(FALSE);
	
	//Add amount to customer's available balance	
	$sql1 = "Update bank_customers SET Current_Balance = '$customer_netbal' WHERE bank_customers.Account_no = '$customer_ac_no '";
		
	// Insert Statement into customer Passbook
	$sql2 = "INSERT INTO $customer_passbk (Transaction_id,Transaction_date,Description,Cr_amount,Dr_amount,Net_Balance,Remark)
	VALUES ('$transaction_id','$transaction_date','$Transac_description','$amount','0','$customer_netbal','$remark')";
		
  
	if($conn->query($sql1) == TRUE && $conn->query($sql2) == TRUE ){
				
			$conn->commit();
		


	
			echo '<script>alert("Amount credited Successfully to customer account")</script>';
							
		}	

		else{
			
			
			echo '<script>alert("Transaction failed\n\nReason:\n\n'.$conn->error.'")</script>';
			$conn->rollback();
		
			
        }
    }

    else{

        echo '<script>alert("Incorrect Account Number")</script>';
    }

	}
	

			
	}





	

	if(isset($_POST['debit_btn'])){
	
		$cust_ac_no = $_POST['customer_account_no'];
		$amount = $_POST['amount']; // Make sure the field name is 'amount'
	
		if(!is_numeric($amount)){ // Check 'amount', not $_POST['amount']
	
			echo '<script>alert("Invalid amount")</script>';
		}
		
		else{ 
		
		include 'db_connect.php';
	
		// Customer details required for transaction
		$sql = "SELECT * FROM bank_customers WHERE Account_no = $cust_ac_no ";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			$row = $result->fetch_assoc();
			$customer_ac_no = $row['Account_no'];
			$customer_id = $row['Customer_ID'];
			$customer_name = $row['Username'];
			$customer_ifsc = $row['IFSC_Code'];
			$customer_mob = $row['Mobile_no'];
			$customer_netbal = $row['Current_Balance'] - $amount;
			$customer_passbk = "passbook_".$customer_id;
	
			// Generate Transaction ID
			$transaction_id = mt_rand(100,999).mt_rand(1000,9999).mt_rand(10,99);
			
			// Transaction Date
			date_default_timezone_set('Asia/Kolkata'); 
			$transaction_date = date("d/m/y h:i:s A");
			
			// Remark or Narration
			$remark = "Cash Withdrawal";
			
			// Customer's Transaction Description
			$Transac_description = "Cash Withdrawal/".$transaction_id;
			
			date_default_timezone_set('Asia/Kolkata'); 
			$date_time = date("d/m/y h:i:s A");
	
			// Set autocommit to off
			$conn->autocommit(FALSE);
		
			// Reduce amount from customer's available balance
			$sql1 = "UPDATE bank_customers SET Current_Balance = '$customer_netbal' WHERE bank_customers.Account_no = '$customer_ac_no'";
			
			// Insert Statement into customer Passbook
			$sql2 = "INSERT INTO $customer_passbk (Transaction_id,Transaction_date,Description,Cr_amount,Dr_amount,Net_Balance,Remark)
			VALUES ('$transaction_id','$transaction_date','$Transac_description','0','$amount','$customer_netbal','$remark')";
	
			if($conn->query($sql1) == TRUE && $conn->query($sql2) == TRUE){
				$conn->commit();
				echo '<script>alert("Amount debited Successfully from customer account")</script>';
			} else {
				echo '<script>alert("Transaction failed\n\nReason:\n\n'.$conn->error.'")</script>';
				$conn->rollback();
			}
		} else {
			echo '<script>alert("Incorrect Account Number")</script>';
		}
		}	
	}
?>
