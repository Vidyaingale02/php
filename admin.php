<!-- <?php 
 	
 	include ("conn.php");
?> -->

<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style>
		
		.form{
			padding: 30px;
			margin-top: 20px;
			border:2px solid black;
			margin-left: 400px;
			height: 300px;
			width: 500px
		}
		input[type=text]:focus {
 				 border: 3px solid #555;
			}
			.form:hover{
				background-color: gray;
			}
	</style>
</head>
<body>

<?php   

$username = $password = "";

if($_SERVER["REQUEST_METHOD"]==POST){
	
	$username = test_input($_POST["username"]);
	$password = test_input($_POST["password"]);

}

function test_input($data){
	
	$data=trim($data);
	$data=htmlspecialchar($data);
	$data=stripslashes($data);
	return $data;
}
?>

<h1><center>Admin Login</center></h1>
<div class="form">
<form method="post" style="hi" action="<?php echo htmlspecialchar($_SERVER["PHP_SELF"])?>

	<center>UserName: <input type="text" name="UserName" placeholder="Enter Username......"></center><br><br>
	<center>Password : <input type="text" name="Password" placeholder="Enter Password....."></center><br><br>
	<center><input type="submit" name="Submit"></center>	
</form>
</div>

</body>
</html>
