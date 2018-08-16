<html>
<head>
</head>
<style>
.error{
	color:red;
}
.container{
	height:375px; 
	width:350px; 
	align:center;
	background-color:white; 
	border: 2px solid white; 
	border-radius:100px;
	margin-left:auto;
	margin-right:auto;
	margin-top:200px;
	position: relative;
	display:block;	
}
.inner-container{
	background-color:white;
	height:150px;
	width:275px;
	margin-left:auto;
	margin-right:auto;
	margin-top:15px;
	padding-top:20px;
}
.credentials{
	width:100%;
	padding-top:10px;
	border-radius:10px;
	padding-bottom:10px;
}
.signin
{
	color:black;
	margin-left:auto;
	margin-right:auto;
	text-align:center;
}
</style>
	
<body style="background-color:#04C5F9">
	<?php
$email = $password = "";
$emailErr = $pwdErr = "";	
	
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
	}
  }
	if (empty($_POST["password"])) {
    $pwdErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }
}
	
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
<div class="container">
	<div class="signin">
		<img src="https://image3.mouthshut.com/images/imagesp/925609709s.jpg" alt="Aress Picture" style="height:90px;width:200px;margin-top:5px;">
</div>
	<div class="inner-container">
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<input type="text" name="email" placeholder="Email Id" class="credentials">
			<span class="error"><?php echo $emailErr;?></span>
			<input type="password" name="password" placeholder="Password" class="credentials" style=" margin-top:5%;">
			<span class="error"><?php echo $pwdErr;?></span>
			
			<input type="submit" name="submit" value="Log In" action="validate.php" class="credentials" style=" margin-top:5%; text-align:center; background-color:#04C5F9; color:white; ">				
			<p>Not a member? &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <a href="signup.php" style="color:black;">SignUp Here</a></p>
		</form>
	</div>
</div>
</body>
</html>
