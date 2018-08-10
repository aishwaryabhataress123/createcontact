<html>
<head>
</head>
<style>
	.container{
		height:350px; 
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
<?php
     $email = $password = "";
?>
<body style="background-color:#04C5F9">
	<div class="container">
		<div class="signin">
			<img src="https://image3.mouthshut.com/images/imagesp/925609709s.jpg" alt="Aress Picture" style="height:90px;width:200px;margin-top:5px;">
	</div>
		<div class="inner-container">
			<form action="home.php" method="post">
				<input type="text" name="emailid" placeholder="Email Id" class="credentials" value="<?php echo $email;?>">
				<input type="password" name="password" placeholder="Password" class="credentials" value="<?php echo $password;?>" style=" margin-top:5%;">

				<input type="submit" name="submit" value="Log In" class="credentials" style=" margin-top:5%; text-align:center; background-color:#04C5F9; color:white; ">				
				<p>Not a member? &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <a href="signup.php" style="color:black;">SignUp Here</a></p>
			</form>
		</div>
	</div>
</body>
</html>
<?php
$db = pg_connect("host=ec2-54-235-212-58.compute-1.amazonaws.com port=5432 dbname=d11ltu6a8ne38d user=pkdtdgarpbsxgk password=8566866e71a89e3f3eadc11f4960e689801bfad888b96279954e1a09f94ba443");
if (!$db) 
{
	echo "An error occurred.\n";
	exit;	
}
$query = "SELECT Email , Password__c FROM salesforce.contact WHERE Email = '$_POST[email]' AND Password__c = '$_POST[password]';";
$result= pg_query($query);	
if (pg_num_rows($result) == 0) 
{
	echo "0 records";
}
?>
