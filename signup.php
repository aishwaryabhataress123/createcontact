<html>
<head>
	    <script>
        function validate(){
            var a = document.getElementById("password").value;
            var b = document.getElementById("repassword").value;
            if (a!=b) {
               alert("Passwords do no match");
               return false;
            }
    var x = document.forms["signup"]["emailid"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
        }
     </script>
</head>
<style>
.container{
	height:675px; 
	width:400px; 
	align:center;
	background-color:white; 
	border: 2px solid white; 
	border-radius:80px;
	margin-left:auto;
	margin-right:auto;
	margin-top:50px;
	position: relative;
	display:block;	
}
.inner-container{
	background-color:white;
	height:150px;
	width:275px;
	margin-left:auto;
	margin-right:auto;
	margin-top:35px;
	padding-top:5px;
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
	<?php
$firstname = $lastname = $phonenumber = $mobilenumber =$verification = $emailid = $password = $repassword = $userkey = "";
$fnameErr = $lnameErr = "";
	
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["firstname"])) {
$fnameErr = "Name is required";
} else {
$firstname = test_input($_POST["firstname"]);
// check if name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
$fnameErr = "Only letters and white space allowed"; 
}
}
	
if (empty($_POST["lastname"])) {
$lnameErr = "Name is required";
} else {
$lastname = test_input($_POST["lastname"]);
// check if name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
$lnameErr = "Only letters and white space allowed"; 
}
}	
}
?>
<body style="background-color:#04C5F9">

	<div class="container">
	<div class="signin">
		<img src="https://image3.mouthshut.com/images/imagesp/925609709s.jpg" alt="Aress Picture" style="height:90px;width:200px;">
	</div>
	<div class="inner-container">
	<form name="signup" action="validsignup.php" method="post" onsubmit="return validate()">
		<input type="text" name="firstname" placeholder="First Name" class="credentials" required>
		<input type="text" name="lastname" placeholder="Last Name" class="credentials" style="margin-top:5%;" required>
		<input type="number" name="phonenumber" placeholder="Phone Number" class="credentials" style="margin-top:5%;" value="<?php echo $phonenumber;?>">
		<input type="number" name="mobilenumber" placeholder="Mobile Number" class="credentials" style="margin-top:5%;" value="<?php echo $mobilenumber;?>">
		<input type="text" name="emailid" placeholder="Email Id" class="credentials" style="margin-top:5%;" required>
		<input type="password" id="password" name="password" placeholder="Password" class="credentials" style=" margin-top:5%;" required>
		<input type="password" id="repassword" name="repassword" placeholder="Re-enter Password" class="credentials" style=" margin-top:5%;" required>
		<input type="text" name="userkey" placeholder="User Key" class="credentials" style="margin-top:5%;" required>

		<button type="submit" name="submit" class="credentials" style="margin-top:5%; text-align:center; background-color:#04C5F9; color:white;"> Sign Up </button>				
	</form>
	</div>
</div>
</body>
</html>
