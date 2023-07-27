<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sherlock_contactlist";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: ". $conn->connect_error);
}

echo "Connected successfully <br/>";
/*
$sqlFile = 'contactDatabase.sql';
$sqlCommands = file_get_contents($sqlFile);

if ($conn->multi_query($sqlCommands) === TRUE) {
    echo "SQL commands executed successfully!";
} else {
    echo "Error executing SQL commands: " . $conn->error;
}
$conn->close();*/
?>