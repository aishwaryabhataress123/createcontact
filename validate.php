<?php

// Grab User submitted information

// Connect to the database
$db = pg_connect("host=ec2-54-235-212-58.compute-1.amazonaws.com port=5432 dbname=d11ltu6a8ne38d user=pkdtdgarpbsxgk password=8566866e71a89e3f3eadc11f4960e689801bfad888b96279954e1a09f94ba443");
if (!$db) 
{
	echo "An error occurred.\n";
	exit;	
}
// Select the database to use
$flag = 0;
//$query = "SELECT Email ,Password__c FROM salesforce.contact;";
$result= pg_query("SELECT Email ,Password__c FROM salesforce.contact;");
while($row = pg_fetch_row($result))
{
	if($row[0] == $_POST['email'] )
	{
		if($row[1] == $_POST['pwd'])
		{
			$flag = 1;
			header("Location:home.php");
			exit;
		}
	}
}
if($flag == 0)
{
	echo "<script type='text/javascript'>alert(\"Wrong Username or Password\")</script>";
	include("index.php");
	//echo "<script type='text/javascript'>alert("Wrong Username or Password");window.location='index.php';</script>";
	//header("Location:index.php");
}
?>

