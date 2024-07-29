<html>

<head>
    <title>My Account</title>

    <link rel="stylesheet" type="text/css" href="css/customer_profile_myacc.css" />
    <style>
        #customer_profile .link1 {

            background-color: rgba(5, 21, 71, 0.4);

        }
    </style>
    <?php include 'header.php'; ?>
</head>

<body>
    <?php include 'customer_profile_header.php' ?>

    <?php

    if ($_SESSION['customer_login'] == true) {
    } else {

        header('location:customer_login.php');
    }



    ?>

    <?php
    $cust_id = $_SESSION['customer_Id'];
    include 'db_connect.php';
    $sql = "SELECT * FROM bank_customers where Customer_ID= '$cust_id' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $current_bal = $row['Current_Balance'];



    ?>


    <div class="cust_myacc_container">

        <br><br>
        <div class="accdet">
            <span class="heading">Account Details</span><br>
            <label>Customer Id : <?php echo $_SESSION['customer_Id']; ?></label>
            <label>Account Number : <?php echo $_SESSION['Account_No']; ?></label>
            <label>Account Name : <?php echo $_SESSION['Username']; ?></label>
            <label>Account Type : <?php echo $_SESSION['Account_type']; ?></label>
            <label>IFSC Code : <?php echo $_SESSION['IFSC_Code']; ?></label>
            <label>Branch : <?php echo $_SESSION['Branch']; ?></label>
            <label>Cheque : <?php echo $_SESSION['Cheque']; ?></label>

            <label>Available Balance : <svg width="40" height="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M0 64C0 46.3 14.3 32 32 32H96h16H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H231.8c9.6 14.4 16.7 30.6 20.7 48H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H252.4c-13.2 58.3-61.9 103.2-122.2 110.9L274.6 422c14.4 10.3 17.7 30.3 7.4 44.6s-30.3 17.7-44.6 7.4L13.4 314C2.1 306-2.7 291.5 1.5 278.2S18.1 256 32 256h80c32.8 0 61-19.7 73.3-48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H185.3C173 115.7 144.8 96 112 96H96 32C14.3 96 0 81.7 0 64z" />
                </svg><?php echo $current_bal; ?></label>
            <label>Mobile No : <?php echo $_SESSION['Mobile_no']; ?></label>

            <label>Debit Card No : <?php echo $_SESSION['Debit_Card_No']; ?></label>
            <label>Nominee Name : <?php echo $_SESSION['Nominee_name']; ?></label>
            <label>Nominee Ac/no : <?php echo $_SESSION['Nominee_ac_no']; ?></label>


            <label>Email Id : <?php echo $_SESSION['Email_ID']; ?></label><br><br><br><br>
            <a href="customer_pass_change.php"><input type="button" name="pass-chng" value="Change Password"></a>
        </div>


        <br>
    </div>

</body>
<?php include 'footer.php'; ?>

</html>