<html>
<head>	
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
	<form action="index.php" method="post">
		<input type="text" name="firstname" placeholder="First Name" class="credentials" required>
		<input type="text" name="lastname" placeholder="Last Name" class="credentials" style="margin-top:5%;" required>
		<input type="number" name="phonenumber" placeholder="Phone Number" class="credentials" style="margin-top:5%;" value="<?php echo $phonenumber;?>">
		<input type="number" name="mobilenumber" placeholder="Mobile Number" class="credentials" style="margin-top:5%;" value="<?php echo $mobilenumber;?>">
		<input type="text" name="emailid" placeholder="Email Id" class="credentials" style="margin-top:5%;" required>
		<input type="password" name="password" placeholder="Password" class="credentials" style=" margin-top:5%;" required>
		<input type="password" name="repassword" placeholder="Re-enter Password" class="credentials" style=" margin-top:5%;" required>
		<input type="text" name="userkey" placeholder="User Key" class="credentials" style="margin-top:5%;" required>

		<button type="submit" name="submit" class="credentials" style="margin-top:5%; text-align:center; background-color:#04C5F9; color:white;"> Sign Up </button>				
	</form>
	</div>
</div>
</body>
</html>
<?php
	$db = pg_connect("host=ec2-54-235-212-58.compute-1.amazonaws.com port=5432 dbname=d11ltu6a8ne38d user=pkdtdgarpbsxgk password=8566866e71a89e3f3eadc11f4960e689801bfad888b96279954e1a09f94ba443");
	if (!$db) {
		echo "An error occurred.\n";
		exit;	
	}
	if(isset($_POST['email']))
	{
		$query = "SELECT id,firstname,lastname,Email FROM salesforce.Contact WHERE Email = '".$_POST['email']."'";
		$result= pg_query($query);
		$count=0;
		foreach ($result->records as $record) 
		{
			$count++;
			break;
		}
		if($count > 0)
		{ 
			echo "<script type='text/javascript'>alert('This email Id already exists!');</script>";
		}
	}
	$query = "INSERT INTO salesforce.Contact(FirstName, LastName,Phone, MobilePhone, Email, Password__c,User_Key__c) VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[phonenumber]', '$_POST[mobilenumber]','$_POST[emailid]','$_POST[password]','$_POST[userkey]');";
	$result= pg_query($query);
	
	if(isset($_POST['submit']))
	{
		$query = "SELECT Email,Password__c,User_Key__c FROM salesforce.contact WHERE User_Key__c ='".$_POST['userkey']."'";
		$result= pg_query($query);
		$submit = 0;
		foreach ($result->records as $record) 
		{
			$submit++;
			break;
		}
		if($submit == 0)
		{
			echo "<script type='text/javascript'>alert('Record Not Inserted! Kindly check your emailid or userkey!');</script>";
		}
		else if($submit == 1)
		{
			echo "<script type='text/javascript'>alert('Record Inserted Successfully');</script>";
		}
	}
return $db;
?> 
