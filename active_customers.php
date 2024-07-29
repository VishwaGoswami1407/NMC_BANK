<html>

<head>
	<title>Active Customers</title>

	<link rel="stylesheet" type="text/css" href="css/active_customers.css" />
	<style>
		table {
			width: 223%;
			font-size: 15px;
			border-collapse: collapse;
			border: 1px rgb(221, 221, 221);
			/* //padding: 20px; */
			text-align: center;
		}

		td {
			padding-left: 40px;
			padding-right: 40px;
			height: 60px;
		}
	</style>
</head>

<body>

	<?php

	include 'header.php';
	include 'staff_profile_header.php';
	include 'db_connect.php';


	?>
	<div class="active_customers_container">

		<table border="1px" cellpadding="10">
			<th>#</th>
			<th>Username</th>
			<th>Customer ID</th>
			<th>Account No.</th>
			<th>Mobile No.</th>
			<th>Email ID</th>
			<th>DOB</th>
			<th>Current Balance</th>
			<th>PAN</th>
			<th>Citizenship</th>
			<th>Debit Card No.</th>
			<th>CVV</th>
			<th>Last_Login</th>
			<th>LastTransaction</th>
			<th>Account Status</th>


			<?php



			$sql    = "SELECT * from bank_customers";
			$result = $conn->query ( $sql );

			if ( $result->num_rows > 0 )
				{
				$Sl_no = 1;
				// output data of each row
				while ( $row = $result->fetch_assoc () )
					{

					echo '
			<tr>
			<td>' . $Sl_no++ . '</td>
			<td>' . $row[ 'Username' ] . '</td>
			<td>' . $row[ 'Customer_ID' ] . '</td>
			<td>' . $row[ 'Account_no' ] . '</td>
			<td>' . $row[ 'Mobile_no' ] . '</td>
			<td>' . $row[ 'Email_ID' ] . '</td>
			<td>' . $row[ 'DOB' ] . '</td>
			<td> <svg width="40" height="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
			<path d="M0 64C0 46.3 14.3 32 32 32H96h16H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H231.8c9.6 14.4 16.7 30.6 20.7 48H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H252.4c-13.2 58.3-61.9 103.2-122.2 110.9L274.6 422c14.4 10.3 17.7 30.3 7.4 44.6s-30.3 17.7-44.6 7.4L13.4 314C2.1 306-2.7 291.5 1.5 278.2S18.1 256 32 256h80c32.8 0 61-19.7 73.3-48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H185.3C173 115.7 144.8 96 112 96H96 32C14.3 96 0 81.7 0 64z" style="display: inline;" />
			
			</svg>' . $row[ 'Current_Balance' ] . '</td>
			<td>' . $row[ 'PAN' ] . '</td>
			<td>' . $row[ 'CITIZENSHIP' ] . '</td>
			<td>' . $row[ 'Debit_Card_No' ] . '</td>
			<td>' . $row[ 'CVV' ] . '</td>
			<td>' . $row[ 'Last_Login' ] . '</td>
			<td> <svg width="40" height="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
			<path d="M0 64C0 46.3 14.3 32 32 32H96h16H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H231.8c9.6 14.4 16.7 30.6 20.7 48H288c17.7 0 32 14.3 32 32s-14.3 32-32 32H252.4c-13.2 58.3-61.9 103.2-122.2 110.9L274.6 422c14.4 10.3 17.7 30.3 7.4 44.6s-30.3 17.7-44.6 7.4L13.4 314C2.1 306-2.7 291.5 1.5 278.2S18.1 256 32 256h80c32.8 0 61-19.7 73.3-48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H185.3C173 115.7 144.8 96 112 96H96 32C14.3 96 0 81.7 0 64z" />
		</svg>' . $row[ 'LastTransaction' ] . '</td>
			<td>' . $row[ 'Account_Status' ] . '</td>
			</tr>';
					}


				}

			?>

		</table>
	</div>

	<?php include 'footer.php'; ?>
</body>

</html>