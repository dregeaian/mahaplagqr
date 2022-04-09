<?php
session_start();

	include("connection.php");
	

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$client_id = $_POST['client_id'];
		$f_name = $_POST['f_name'];
		$m_name = $_POST['m_name'];
		$l_name = $_POST['l_name'];
		$bdate = $_POST['bdate'];
		$address1 = $_POST['address1'];
		$barangay = $_POST['barangay'];
		$city = $_POST['city'];
		$region = $_POST['region'];
		$zipcode = $_POST['zipcode'];
		$cellphone = $_POST['cellphone'];


		//if(!empty($client_id) && !empty($f_name) && !empty($m_name) && !empty($l_name) && !empty($bdate) && !empty($address1) && !empty($barangay) && !empty($city) && !empty($region) && !empty($zipcode) && !empty($cellphone))
		//{

			//saved to database
			$query = "insert into client_list (client_id,f_name,m_name,l_name,bdate,address1,barangay,city,region,zipcode,cellphone) values('$client_id','$f_name','$m_name','$l_name','$bdate','$address1','$barangay','$city','$region','$zipcode','$cellphone')";

			mysqli_query($con,$query);

			header("Location:info.php");	
			die;
		}
		//else
		//{
			//echo "{Please complete the form}!";
		//}

	//}	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Client Registration</title>
</head>
<body>



	<style type="text/css">


		#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;

		}	

		#box{

		background-color: green;
		margin: auto;
		width: 400px;
		padding: 20px;
		align-content: center;


		}

		#caption{
			color: white;
			font-family: Arial, Helvetica, sans-serif;


		}

		#zipcode{
			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 95px;
		}

		#address1{
			height: 60px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 100%;

		}

		#button{

		padding: 10px;
		width: 100px;
		color: black;
		background-color: lightblue;
		border: none;
		border-radius: 8px;
		}

		#button:hover{
			background-color: red;
			color: white;
		}

	</style>

	<div id="box">

			<center><img draggable="false" unselectable="on" src="image/MahaplagLogo.png" alt="Mahaplag Logo" style="vertical-align:middle;margin:0px 50px"/></center>
		<form  action="" method="post" name="form1">

			<div style="font-size: 20px;margin: 10px;color: white; text-align: center;">Mahaplag Contact Tracing System</div><br>
			
				<label id="caption" for="client_id">Client ID</label><br>
				<input id="text" type="text" class="form-control" name="client_id" required><br><br>
				<label id="caption" for="f_name">First Name</label>
				<input id="text" type="text" name="f_name" required><br><br>
				<label id="caption" for="m_name">Middle Name</label>
				<input id="text" type="text" name="m_name" required><br><br>
				<label id="caption" for="l_name">Last Name</label>
				<input id="text" type="text" name="l_name" required><br><br>
				<label id="caption" for="bdate">Birth Date</label>
				<input id="text" type="date" name="bdate" required><br><br>
				<label id="caption" for="address1">Street / Subdivision</label>
				<textarea id="address1" type="text" name="address1" required></textarea><br><br>
				<label id="caption" for="barangay">Barangay</label>
				<input id="text" type="text" name="barangay" required><br><br>
				<label id="caption" for="city">City</label>
				<input id="text" type="text" name="city" required><br><br>
				<label id="caption" for="region">Region</label>
				<input id="text" type="text" name="region" required><br><br>
				<label id="caption" for="zipcode">Zip Code</label>
				<input id="zipcode" type="text" name="zipcode" required><br><br>
				<label id="caption" for="cellphone">Cellphone Number</label>
				<input id="text" type="text" name="cellphone" required><br><br>
							
				<center><input id="button" type="submit" name="register" value="Register"></center><br><br>


				<?php
				if(isset($_POST['register'])){
					
					$code = $_POST['client_id'];
					echo "Successfully Saved!";

				}


				?>


		</form>
	</div>
</body>
</html>
