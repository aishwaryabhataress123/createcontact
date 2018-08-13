<?php

// Grab User submitted information
$email = $_SESSION['email'];
$password = $_SESSION['password'];

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
if($row = pg_fetch_row($result)) {
      echo "ID = ". $row[0] . "\n";
   }	
?>
