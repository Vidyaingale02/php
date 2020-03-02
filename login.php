<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include "conn.php";?>

<?php
$email_id = $password = "";

if ($_SERVER ["REQUEST_METHOD"] == "POST" {

$username = test_input($_POST['email_id']);
$password = test_input($_POST['password']);
}

function test_input($data){

	$data = trim($data);
	$data = htmlspecialchars($data);
	$data = stripcslashes($data);
	return $data;
}

?>
<h1>Login Form</h1>
<Form method="post">
Email-id:<input type="text" name="email_id"><br>
password:<input type="password" name="password"><br>
<input type="submit">



</form>
</body>
</html>
