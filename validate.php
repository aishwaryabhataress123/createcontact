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

$query = "SELECT Email , Password__c , Count(1) FROM salesforce.contact WHERE Email = $_POST['email'] AND Password__c = $_POST['password'] ;";
$result= pg_query($query);
$row = pg_fetch_row($result);
echo "Row wala email " .$row[0];
echo "<br>";
echo "Post wala email " .$_POST['email'];
echo "<br>";
echo "Row wala password " .$row[1];
echo "<br>";
echo "Post wala password " .$_POST['password'];
echo "<br>";	
if($row[2] == 1)
{
	echo "You are a validated user/n";
	echo "HELLO" .$_POST['email'];
	exit;
}
?>
