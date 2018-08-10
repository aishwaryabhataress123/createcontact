<?php

// Grab User submitted information
$email = $_POST['email'];
$password = $_POST['password'];

// Connect to the database
$db = pg_connect("host=ec2-54-235-212-58.compute-1.amazonaws.com port=5432 dbname=d11ltu6a8ne38d user=pkdtdgarpbsxgk password=8566866e71a89e3f3eadc11f4960e689801bfad888b96279954e1a09f94ba443");
if (!$db) 
{
	echo "An error occurred.\n";
	exit;	
}


// Select the database to use

$query = "SELECT Email , Password__c FROM salesforce.contact WHERE Email = $email AND Password__c = $password;";
$result= pg_query($query);	

$row = pg_fetch_row($result);

if($row["Email"]==$email && $row["Password__c"]==$password)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>
