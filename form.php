<!DOCTYPE html>
<html>
<head>
	<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php

$name = $email = $website = $gender = $comment = "";
$nameerr = $emailerr = $websiteerr = $gendererr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(empty($_POST["name"])){
			$nameerr = "Name is required";
		}else
		{ $name = test_input($_POST["name"]);
    		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
     			 $nameerr = "Only letters and white space allowed";
    			}
		}
		if(empty($_POST["email"])){
			$emailerr= "email is required";
		}else
		{
			$email = test_input($_POST["email"]);
		}
		if(empty($_POST["website"])){
			$websiteerr = " ";
		}else
		{
			$website = test_input($_POST["website"]);
		}
		if (empty($_POST["gender"])) {
			$gendererr="Gender is required";

		}else{
			$gender = test_input($_POST["gender"]);
		}
		 $comment = test_input($_POST["comment"]);
	}
function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return($data);
}
?>
<h1>PHP form:</h1>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

	NAME: <input type="test" name="name">
	<span class="error">* <?php echo $nameerr;?></span>
	<br>
	<br>
	EMAIL:<input type="text" name="email">
	<span class="error">* <?php echo $emailerr;?></span>
	<br><br>
	WEBSITE:<input type="text" name="website">
	<!-- <span class="error">* <?php echo $websiteerr;?></span> -->
	<br><br>
	GENDER: <input type="radio" name="gender" value="female">Female
	<span class="error">* <?php echo $gendererr;?></span>
  <input type="radio" name="gender" value="male">Male
  <span class="error">* <?php echo $gendererr;?></span>
  <input type="radio" name="gender" value="other">Other
   <span class="error">* <?php echo $gendererr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
	 <input type="submit" name="submit" value="Submit">  
</form>

<?php

echo "<h2> Your input :</h2>";
echo "$name";
echo "<br>";
echo "$email";
echo"<br>";
echo "$website";
echo "<br>";
 ?>
</body>
</html>