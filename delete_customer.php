<?php ob_start(); ?>

<html>
<head>
    <title>Delete Customer</title>
    <link rel="stylesheet" type="text/css" href="css/delete_customer.css">
</head>
<body>
    <?php include 'header.php';  ?>
    <?php include 'staff_profile_header.php'; ?> 
    <div class="delete_customer_container">
        <div class="delete_customer_container_heading">
            <h3>Delete Student</h3>
        </div>
        <form method="POST">
            <input type="text" name="Cust_ac_no" placeholder="Customer Account No" required><br>
            <input type="text" name="Cust_ac_Id" placeholder="Customer ID" required ><br>
            <input type="text" name="reason" placeholder="Reason" required><br>
            <input type="submit" name="delete" value="Delete">
        </form>
    </div>

    <?php include 'footer.php'; ?>

</body>
</html>

<?php

if(isset($_POST['delete'])){
    $acc_no = $_POST['Cust_ac_no'];
    $cust_id = $_POST['Cust_ac_Id'];
    $reason = $_POST['reason'];

    include 'db_connect.php';

    $sql = "SELECT Account_no, Customer_ID FROM bank_Customers WHERE Account_no='$acc_no' AND Customer_ID='$cust_id'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();

        // Drop passbook table
        $passbook_table = "passbook_" . $cust_id;

        // Check if passbook table exists before attempting to drop
        $check_passbook_table = "SHOW TABLES LIKE '$passbook_table'";
        $passbook_result = $conn->query($check_passbook_table);

        if ($passbook_result->num_rows > 0) {
            $drop_passbook_sql = "DROP TABLE $passbook_table";
            $conn->query($drop_passbook_sql);
        }

        // Delete customer from bank_customers table
        $delete_customer_sql = "DELETE FROM bank_customers WHERE Account_no='$acc_no' AND Customer_ID='$cust_id'";
        $delete_result = $conn->query($delete_customer_sql);

        if ($delete_result) {
            echo '<script>alert("Customer Deleted Successfully"); location="delete_customer.php"</script>';
        } else {
            echo '<script>alert("Customer not deleted"); location="delete_customer.php"</script>';
        }
    } else {
        echo '<script>alert("Incorrect Account Number or Customer ID")</script>';
    }
}

?>
