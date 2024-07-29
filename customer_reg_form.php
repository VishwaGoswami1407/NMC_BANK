<?php ob_start ();
session_start();?>

<html>

<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/customer_reg_form.css" />
	<style>
		::-webkit-input-placeholder {
			font-size: 2.1vh;
			font-family: verdana;
		}

		.container_regfrm_container_parent h3 {
			text-align: center;
			border: 1px solid rgba(44, 78, 134, 0.5);
			border-radius: 5px;
			background-color: #c5d9e2;
			font-size: 3.5vh;
			color: rgb(44, 78, 134);
			font-weight: 500;
			padding: 15px;
			width: 30%;
			margin: 2% auto;
			box-shadow: 1px 1px 7px rgba(0, 0, 0, 0.6);
			
		}

		.container_regfrm_container_parent_child {
			
			border: 1px solid white;
			padding: 2%;
			margin: 5% auto;
			border-radius: 10px;
			background-color: #c5d9e2;
			box-shadow: 1px 1px 7px rgba(0, 0, 0, 0.6);
			border: 1px solid rgba(44, 78, 134, 0.5);
			width: 80%;
		}

		.container_regfrm_container_parent_child input[type="text"],
		input[type="date"],
		select {
			width: 20%;
			padding: 0.5%;
			margin: 2%;
			color: rgb(117, 117, 117);
			border: 1px solid white;
			border-radius: 2px;
			box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);
			font-size: 2.1vh;
		}

		.container_regfrm_container_parent_child input[name="homeaddrs"] {

			width: 94%;
			display: block;
			padding: 0.5%;
			margin: 2%;
			color: rgb(117, 117, 117);
			border: 1px solid white;
			border-radius: 2px;
			box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);
			font-size: 2.1vh;
		}

		.container_regfrm_container_parent_child input[name="officeaddrs"] {

			width: 94%;
			display: block;
			padding: 0.5%;
			margin: 2%;
			color: rgb(117, 117, 117);
			border: 1px solid white;
			border-radius: 2px;
			box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);
			font-size: 2.1vh;
		}

		.container_regfrm_container_parent_child input[type="submit"] {
			width: 12%;
			color: white;
			font-size: 3vh;
			background-color: rgb(44, 78, 134);
			border-radius: 3px;
			box-shadow: 0px 2px black;
			border: 0px;
			display: block;
			margin: 1% auto;
			padding: 0.5%;
		}

		.container_regfrm_container_parent_child input[type="submit"]:hover {
			cursor: pointer;
			background-color: rgba(11, 30, 89, 0.7);
		}
	</style>

	<?php include 'header.php'; ?>
</head>

<body>
	<div class="container_regfrm_container_parent">
		<h3>Account Opening Form</h3>
		
		<div class="container_regfrm_container_parent_child">
			<form method="post">
				<input type="text" name="name" placeholder="Name" required />
				<select name="gender" required>
					<option class="default" value="" disabled selected>Gender</option>
					<option value="Male" required>Male</option>
					<option value="Female">Female</option>
					<option value="Others">Others</option>
				</select>
				<input type="text" name="mobile" placeholder="Mobile no" required />
				<input type="text" name="email" placeholder="Email id" />
				<input type="text" name="landline" placeholder="Landline no" />
				<input type="text" name="dob" placeholder="Date of Birth" onfocus="(this.type='date')" required />
				<input type="text" name="pan_no" placeholder="PAN Number" required />
				<input type="text" name="citizenship" placeholder="Citizenship Number" required />
				<input class="address" type="text" name="homeaddrs" placeholder="Home Address" required />
				<input class="address" type="text" name="officeaddrs" placeholder="Office Address" />
				<input type="text" name="country" placeholder="INDIA" value="INDIA" readonly="readonly" />



				<select name="state" required>
					<option class="default" value="" disabled selected>State</option>
					<option value="Andhra Pradesh">Andhra Pradesh</option>
					<option value="Arunachal Pradesh">Arunachal Pradesh</option>
					<option value="Assam">Assam</option>
					<option value="Bihar">Bihar</option>
					<option value="Chhattisgarh">Chhattisgarh</option>
					<option value="Goa">Goa</option>
					<option value="Gujarat">Gujarat</option>
					<option value="Haryana">Haryana</option>
					<option value="Himachal Pradesh">Himachal Pradesh</option>
					<option value="Jharkhand">Jharkhand</option>
					<option value="Karnataka">Karnataka</option>
					<option value="Kerala">Kerala</option>
					<option value="Madhya Pradesh">Madhya Pradesh</option>
					<option value="Maharashtra">Maharashtra</option>
					<option value="Manipur">Manipur</option>
					<option value="Meghalaya">Meghalaya</option>
					<option value="Mizoram">Mizoram</option>
					<option value="Nagaland">Nagaland</option>
					<option value="Odisha">Odisha</option>
					<option value="Punjab">Punjab</option>
					<option value="Rajasthan">Rajasthan</option>
					<option value="Sikkim">Sikkim</option>
					<option value="Tamil Nadu">Tamil Nadu</option>
					<option value="Telangana">Telangana</option>
					<option value="Tripura">Tripura</option>
					<option value="Uttar Pradesh">Uttar Pradesh</option>
					<option value="Uttarakhand">Uttarakhand</option>
					<option value="West Bengal">West Bengal</option>


				</select>



				<select name="city" required>
					<option class="default" value="" disabled selected>City</option>
					<option value="Mumbai">Mumbai</option>
					<option value="Delhi">Delhi</option>
					<option value="Bengaluru">Bengaluru</option>
					<option value="Chennai">Chennai</option>
					<option value="Hyderabad">Hyderabad</option>
					<option value="Kolkata">Kolkata</option>
					<option value="Pune">Pune</option>
					<option value="Ahmedabad">Ahmedabad</option>
					<option value="Surat">Surat </option>
					<option value="Jaipur">Jaipur</option>
					<option value="Lucknow">Lucknow</option>
					<option value="Kanpur">Kanpur</option>
					<option value="Nagpur">Nagpur</option>
					<option value="Indore">Indore</option>
					<option value="Thane">Thane</option>
					<option value="Thane">Bhavnagar</option>

				</select>




				<input type="text" name="pin" placeholder="Pin Code" required />
				<input type="text" name="arealoc" placeholder="Area/Locality" required />
				<input type="text" name="nominee_name" placeholder="Nominee Name (If any)" />
				<input type="text" name="nominee_ac_no" placeholder="Nominee Account no" />

				<select name="acctype" required>
					<option class="default" value="" disabled selected>Account Type</option>
					<option value="Saving">Saving</option>
					<option value="Current">Current</option>
				</select>
				<input type="submit" name="submit" value="Submit">
			</form>
		</div>
	</div>

	<?php include 'footer.php'; ?>

</body>

</html>


<?php

if ( isset( $_POST[ 'submit' ] ) )
	{

	session_start ();
	$_SESSION[ '$cust_acopening' ]  = TRUE;
	$_SESSION[ 'cust_name' ]        = $_POST[ 'name' ];
	$_SESSION[ 'cust_gender' ]      = $_POST[ 'gender' ];
	$_SESSION[ 'cust_mobile' ]      = $_POST[ 'mobile' ];
	$_SESSION[ 'cust_email' ]       = $_POST[ 'email' ];
	$_SESSION[ 'cust_landline' ]    = $_POST[ 'landline' ];
	$_SESSION[ 'cust_dob' ]         = $_POST[ 'dob' ];
	$_SESSION[ 'cust_pan=' ]        = $_POST[ 'pan_no' ];
	$_SESSION[ 'cust_citizenship' ] = $_POST[ 'citizenship' ];
	$_SESSION[ 'cust_homeaddrs' ]   = $_POST[ 'homeaddrs' ];
	$_SESSION[ 'cust_officeaddrs' ] = $_POST[ 'officeaddrs' ];
	$_SESSION[ 'cust_country' ]     = $_POST[ 'country' ];
	$_SESSION[ 'cust_state' ]       = $_POST[ 'state' ];
	$_SESSION[ 'cust_city' ]        = $_POST[ 'city' ];
	$_SESSION[ 'cust_pin' ]         = $_POST[ 'pin' ];
	$_SESSION[ 'arealoc' ]          = $_POST[ 'arealoc' ];
	$_SESSION[ 'nominee_name' ]     = $_POST[ 'nominee_name' ];
	$_SESSION[ 'nominee_ac_no' ]    = $_POST[ 'nominee_ac_no' ];
	$_SESSION[ 'cust_acctype' ]     = $_POST[ 'acctype' ];

	header ( 'location:cust_regfrm_confirm.php' );
	

	}

?>