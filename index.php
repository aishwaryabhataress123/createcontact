<html>
<head>	
</head>
<style>
	.container{
		height:650px; 
		width:400px; 
		align:center;
		background-color:white; 
		border: 2px solid white; 
		border-radius:80px;
		margin-left:auto;
		margin-right:auto;
		margin-top:35px;
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
	$firstname = $lastname = $phonenumber = $mobilenumber =$verification = $emailid = $password = $repassword = $userkey = "";
	?>
<body style="background-color:#04C5F9">

		<div class="container">
		<div class="signin">
			<img src="https://image3.mouthshut.com/images/imagesp/925609709s.jpg" alt="Aress Picture" style="height:90px;width:200px;">
		</div>
		<div class="inner-container">
		<form action="index.php" method="post">
			<input type="text" name="firstname" placeholder="First Name" class="credentials" value="<?php echo $firstname;?>">
			<input type="text" name="lastname" placeholder="Last Name" class="credentials" style="margin-top:5%;" value="<?php echo $lastname;?>">
			<input type="number" name="phonenumber" placeholder="Phone Number" class="credentials" style="margin-top:5%;" value="<?php echo $phonenumber;?>">
			<input type="number" name="mobilenumber" placeholder="Mobile Number" class="credentials" style="margin-top:5%;" value="<?php echo $mobilenumber;?>">
			<input type="text" name="emailid" placeholder="Email Id" class="credentials" style="margin-top:5%;" value="<?php echo $emailid;?>">
			<input type="password" name="password" placeholder="Password" class="credentials" style=" margin-top:5%;" value="<?php echo $password;?>">
			<input type="password" name="repassword" placeholder="Re-enter Password" class="credentials" style=" margin-top:5%;" value="<?php echo $repassword;?>">
			<input type="text" name="userkey" placeholder="User Key" class="credentials" style="margin-top:5%;" value="<?php echo $userkey;?>">
			
			<button type="submit" name="submit" class="credentials" style="margin-top:5%; text-align:center; background-color:#04C5F9; color:white;"> Sign Up </button>				
		</form>
		</div>
	</div>
</body>
</html>
<?php
	$db = pg_connect("host=ec2-23-21-198-69.compute-1.amazonaws.com port=5432 dbname=dcrqc1sphs49ra user=sszuhptfcszfje password=5f7d705bf8d76df2591c454499d2c2db9c33f33672987de2ceb1112dac372519");
	if (!$db) {
  		echo "An error occurred.\n";
  		exit;	
	}
	$query = "INSERT INTO salesforce.contact(FirstName, LastName,Phone, MobilePhone, Email, Password__c,User_Key__c) VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[phonenumber]', '$_POST[mobilenumber]','$_POST[emailid]','$_POST[password]',$_POST[userkey]);";
	//$query = "INSERT INTO salesforce.user(FirstName, LastName, Alias, CommunityNickname, Phone, MobilePhone, Street, City, PostalCode, State, Country, Email, TimeZoneSidKey, LocaleSidKey, EmailEncodingKey, ProfileId, LanguageLocaleKey, Username, password__c) VALUES('aishwarya','lastname','abs','abs','9011523102', '9011523102', 'kothrud', 'Pune', '411038', 'Maharashtra', 'India', 'aishwarya.bhat@aress.com', 'GMT', 'en_US', 'UTF-8' , '00e1J0000017aBdQAI', 'en_US', 'aishwarya@ab.com', '1234567890');";
	$result= pg_query($query);	
?> 
