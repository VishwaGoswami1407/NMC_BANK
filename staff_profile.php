<?php ob_start (); ?>

<html>

<head>
  <title>Staff Home</title>
  <link rel="stylesheet" type="text/css" href="css/staff_profile.css" />
  <style>
    .staff_options {
      width: 50%;
      background-color: #c5d9e2;
      margin: 0px auto;
      text-align: center;
      margin-top: 50px;
      margin-bottom: 50px;
      padding: 5%;
      border-radius: 5px;
      box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
    }

    .staff_options input {
      font-size: 16px;
      width: 40%;
      height: 12%;
      padding: 3%;
      margin: 3%;
      border-radius: 5px;
      transition-duration: 0.5s;
      background-color: #004156;
      color: white;
    }
  </style>
</head>

<body>
  <?php
  include 'header.php';
  include 'staff_profile_header.php'; ?>
  <form method="post">
    <div class="staff_options">
      <input type="submit" name="viewdet" value="View Active Student" />
      <input type="submit" name="view_cust_by_ac" value="View Student by A/c No" />
      <input type="submit" name="apprvac" value="Approve Pending Account" />
      <!-- <input type="submit" name="view_trans" value="View Transaction"/>	 -->
      <input type="submit" name="del_cust" value="Delete Student A/c" />
      <input type="submit" name="credit_cust_ac" value="Credit / Debit " />
      
    </div>
  </form>


  <?php include 'footer.php'; ?>
</body>

</html>


<?php

if ( isset( $_POST[ 'viewdet' ] ) )
  {


  header ( 'location:active_customers.php' );
  }

if ( isset( $_POST[ 'view_cust_by_ac' ] ) )
  {

  header ( 'location:view_customer_by_acc_no.php' );

  }
if ( isset( $_POST[ 'apprvac' ] ) )
  {

  header ( 'location:pending_customers.php' );

  }
if ( isset( $_POST[ 'view_trans' ] ) )
  {

  echo '<script>alert("View Transaction")</script>';
  }
if ( isset( $_POST[ 'del_cust' ] ) )
  {


  header ( 'location:delete_customer.php' );
  }
if ( isset( $_POST[ 'credit_cust_ac' ] ) )
  {


  header ( 'location:credit_customer_ac.php' );
  }

?>