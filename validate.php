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

$query = "SELECT Email , Password__c FROM salesforce.contact ;";
$result= pg_query($query);
$row = pg_fetch_row($result);
$arr = pg_fetch_all_columns($query);
echo "Row wala email " .$row[0];
echo "<br>";
echo "Post wala email " .$_POST['email'];
echo "<br>";
echo "Row wala password " .$row[1];
echo "<br>";
echo "Post wala password " .$_POST['password'];
echo "<br>";
/*if($row[2])
{
	echo "You are a validated user/n";
	echo "HELLO" .$_POST['email'];
	exit;
}*/
echo sizeof($arr);
for($i=0 ; $i<sizeof($result) ; $i++)
{
	if($row[0] == $_POST['email'] && $row[1] == $_POST['password'] )
	{
		echo "You are a validated user/n";
		echo "HELLO" .$_POST['email'];
		exit;
	}
}

// Grab User submitted information
// Connect to the database
/*$db = pg_connect("host=ec2-54-235-212-58.compute-1.amazonaws.com port=5432 dbname=d11ltu6a8ne38d user=pkdtdgarpbsxgk password=8566866e71a89e3f3eadc11f4960e689801bfad888b96279954e1a09f94ba443");
if (!$db) 
{
	echo "An error occurred.\n";
	exit;	
}
// Select the database to use
$query = "SELECT Email , Password__c FROM salesforce.contact;";
$result= pg_query($query);
$row = pg_fetch_row($result);
while($row)
{
	if($row[0] == $_POST['email'] && $row[1] == $_POST['password'])
	{
		echo "You are a validated user/n";
		echo "HELLO" .$_POST['email'];
		exit;
	}
}*/
?>

