

<html>
    <head><title>Customer Details</title>
    
    <link rel="stylesheet" type="text/css" href="css/view_customer_by_acc_no.css" />
    
      <?php include 'header.php' ?></head>
<body>
	<?php include 'staff_profile_header.php' ?>
    
    <div class="view_cust_byac_container_outer">
    <form method="POST">
        <input name="account_no" placeholder="Customer Account No"><br>
        <input type="submit" name="submit_view" value="Submit">

    </form>
    </div>
    
    <?php 

    if(isset($_POST['submit_view'])){
        $cust_ac=$_POST['account_no'];
        include 'db_connect.php'; 
        $sql="SELECT * FROM bank_customers where Account_no= '$cust_ac'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
        $row = $result->fetch_assoc();

	    echo '<div class="view_cust_byac_container_inner">
            <div class="cust_details">
                <span class="heading">Customer Details</span><br>
                <label>Customer Id : '.$row['Customer_ID'].'</label>
                <label>Account Number : '.$row['Account_no'].'</label>
                 <label>Account Name : '.$row['Username']. '</label>
                <label>Account Type : '.$row['Account_type']. '</label>
                <label>IFSC Code : '.$row['IFSC_Code']. '</label>
                <label>Branch : '.$row['Branch'].'</label>
                <label>Available Balance : <svg width="40" height="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M0 64C0 46.3 14.3 32 32 32H96h16H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H231.8c9.6 14.4 16.7 30.6 20.7 48H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H252.4c-13.2 58.3-61.9 103.2-122.2 110.9L274.6 422c14.4 10.3 17.7 30.3 7.4 44.6s-30.3 17.7-44.6 7.4L13.4 314C2.1 306-2.7 291.5 1.5 278.2S18.1 256 32 256h80c32.8 0 61-19.7 73.3-48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H185.3C173 115.7 144.8 96 112 96H96 32C14.3 96 0 81.7 0 64z"  />
                
                </svg>'.$row['Current_Balance'].'</label>
                <label>Mobile No : '.$row['Mobile_no'].'</label>
                <label>Debit Card No : '.$row['Debit_Card_No'].'</label>
                <label>Nominee Name : '.$row['Nominee_name'].'</label>
                <label>Nominee Ac/no : '.$row['Nominee_ac_no'].'</label>
                <label>Email Id : '.$row['Email_ID'].'</label>
            </div>
            </div>'; 
    
    }

    else{

        echo '<script>alert("Customer not found")</script>';
    }
}
    
    ?>

    </body>
    <?php include 'footer.php' ?>
</html>