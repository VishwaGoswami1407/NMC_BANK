<?php 
session_start();
if($_SESSION['staff_login'] != true)
{
	
	 header('location:staff_login.php');

}	

?>

<html>
    <head>
    
    <link rel="stylesheet" type="text/css" href="css/staff_profile_header.css" />
	<style>
       .welcome {
  background-color:  #d5d5d5;
  padding: 33px;
  box-shadow: 0px 1px 3px black;
  color: black;
} 
input[type="button"] {
    background-color: #004156;
    font-weight: semibold;
    height: 25px;
    color: white;
}
    </style>
	</head>
    
<body>
    		
			
	<?php
		include 'db_connect.php';
        
        $staff_id = $_SESSION['staff_id'];
		$sql="SELECT * FROM bank_staff WHERE Staff_id= '$staff_id' ";
        $result=$conn->query($sql);
        if($result->num_rows > 0)
		$row = $result->fetch_assoc();

	?>
       <div class="head">
            
            <div class="customer_details">
<!--
            <a href="upload.php">
                <?php echo '<img class="custmr_img" src="data:image/jpeg;base64,'.base64_encode($row['Customer_Photo']).'"'; ?> onerror="this.src='img/customers/No_image.jpg'"  height="115px" width="105px"/> </a>
				  </div> -->
			<img src="" onerror="this.src='img/customers/No_image.jpg'"  height="115px" width="105px"/>
			</div>
             <div class="welcome">

             <label>Welcome <?php echo $_SESSION['staff_name']; ?></label><h6 class="lstlogin">Last login : <?php echo $row['Last_login']  ; ?> </h6>
                  </div>
            <a class="staff_home" href="staff_profile.php"><input type="button" name="home" value="Home"></a>
            <a class="staff_logout" href="staff_logout.php"><input type="button" name="logout_btn" value="Logout"></a>
        
        </div>
        <br>
			

    </body>
</html>