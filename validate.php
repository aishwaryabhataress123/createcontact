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

$query = "SELECT Email , Password__c FROM salesforce.contact;";
$result= pg_query($query);
$row = pg_fetch_row($result);
echo "helloooooooooo" .$_POST['email'];
while($row)
{
	if($row['Email'] == $_POST['email'] && $row['Password__c'] == $_POST['password'])
	{
		echo "You are a validated user";
		exit;
	}
}
?>
