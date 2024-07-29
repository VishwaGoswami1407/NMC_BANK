<?php
include 'header.php';
include 'customer_profile_header.php';
if ($_SESSION['customer_login'] == FALSE) {
    header('location:customer_login.php');
}


?>
<html>

<head>
    <title>My Profile</title>
    <link rel="stylesheet" type="text/css" href="css/customer_profile.css" />
    <style>


    </style>
</head>

<body>


    <?php
    $cust_id = $_SESSION['customer_Id'];
    include 'db_connect.php';
    $sql = "SELECT * FROM bank_customers where Customer_ID= '$cust_id' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $current_bal = $row['Current_Balance'];



    ?>

    <div class="cust_profile_container">
        <div class="acc_details">
            <span class="heading">Account Details</span><br>
            <label>Customer Id : <?php echo $_SESSION['customer_Id']; ?></label>
            <label>Account Number : <?php echo $_SESSION['Account_No']; ?></label>
            <label>Account Name : <?php echo $_SESSION['Username']; ?></label>
            <label>Account Type : <?php echo $_SESSION['Account_type']; ?></label>
            <label>Available Balance : <svg width="40" height="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M0 64C0 46.3 14.3 32 32 32H96h16H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H231.8c9.6 14.4 16.7 30.6 20.7 48H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H252.4c-13.2 58.3-61.9 103.2-122.2 110.9L274.6 422c14.4 10.3 17.7 30.3 7.4 44.6s-30.3 17.7-44.6 7.4L13.4 314C2.1 306-2.7 291.5 1.5 278.2S18.1 256 32 256h80c32.8 0 61-19.7 73.3-48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H185.3C173 115.7 144.8 96 112 96H96 32C14.3 96 0 81.7 0 64z" />
                </svg><?php echo $current_bal; ?></label>
        </div>
        <div class="statement">
            <label class="heading">Bank Statement</label>
            <table>
                <th width="5%">#</th>
                <th width="15%">Date</th>
                <th width="15%">Trans. Id</th>
                <th width="31%">Description</th>
                <th width="10%">Cr</th>
                <th width="10%">Dr.</th>
                <th width="20%">Total</th>
                <?php

                $cust_id = $_SESSION['customer_Id'];

                $sql = "SELECT * from passbook_$cust_id ORDER By Id DESC LIMIT 10";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $Sl_no = 1;
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {

                        echo '
			<tr>
            <td>' . $Sl_no++ . '</td>
            <td>' . $row['Transaction_date'] . '</td>
			<td>' . $row['Transaction_id'] . '</td>
			<td>' . $row['Description'] . '</td>
			<td>' . $row['Cr_amount'] . '</td>
            <td>' . $row['Dr_amount'] . '</td>          
			<td><svg width="40" height="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 64C0 46.3 14.3 32 32 32H96h16H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H231.8c9.6 14.4 16.7 30.6 20.7 48H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H252.4c-13.2 58.3-61.9 103.2-122.2 110.9L274.6 422c14.4 10.3 17.7 30.3 7.4 44.6s-30.3 17.7-44.6 7.4L13.4 314C2.1 306-2.7 291.5 1.5 278.2S18.1 256 32 256h80c32.8 0 61-19.7 73.3-48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H185.3C173 115.7 144.8 96 112 96H96 32C14.3 96 0 81.7 0 64z"/></svg>' . $row['Net_Balance'] . '</td>
			</tr>';
                    }
                }

                ?>
            </table>
        </div>
    </div>

</body>
<?php include 'footer.php'; ?>

</html>