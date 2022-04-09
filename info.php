
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php

include('connection.php');



$sqlget = "SELECT * FROM client_list LIMIT 1" ;
$sqldata = mysqli_query($con, $sqlget) or die('error getting connect');



while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
echo $row['f_name'];


}

?>
</body>
</html>