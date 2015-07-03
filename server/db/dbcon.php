<?php
//SETUP database and try to run all the Operations manually and than enter triggers, and than the Display channels


function dialdb()
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "go";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT url FROM data WHERE id=".$i." LIMIT 0, 30 ";
	$result = $conn->query($sql);

}



function ack()
{
	echo "FOund ME";
}
?>