<?php
	$link = mysqli_connect ("localhost", "root", "");
	if ($link) 
	{
		echo "Connected to the server", "<br>";
	} 
	else 
	{
		echo "Failed to connect";
	}
	$db = "Courses";
	$query = "CREATE DATABASE $db";
	$create_db = mysqli_query($link, $query);
	if ($create_db) 
	{
		echo "Database $db was created successfully";
	}
	else 
	{
		echo "Failed to create a database";
	}
?>