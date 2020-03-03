<?php
	$link = mysqli_connect ("localhost", "root", "");
	if ($link) 
	{
		echo "Connected to the server", "</br>";
	} 
	else 
	{
		echo "Failed to connect";
	}
	$db = "Courses";
	
	$query = "CREATE TABLE IF NOT EXISTS $db.User 
	( id INT NOT NULL AUTO_INCREMENT , 
	login TEXT NOT NULL , 
	password TEXT NOT NULL , 
	status ENUM('Admin','Teacher','Student') NOT NULL , 
	school INT NOT NULL , 
	lastname TEXT NOT NULL , 
	firstname TEXT NOT NULL , 
	telephone TEXT NOT NULL , 
	PRIMARY KEY (id)) 
	ENGINE = InnoDB;";
	
	$create_db = mysqli_query($link, $query);
	if ($create_db) 
	{
		echo "User table was created successfully</br>";
	}
	else 
	{
		echo "Failed to create a database";
	}
	
	$query = "CREATE TABLE IF NOT EXISTS $db.School 
	( id INT NOT NULL AUTO_INCREMENT , 
	name TEXT NOT NULL, 
	insitution_type 
	ENUM('School','Colledge','University','Institute') NOT NULL , 
	PRIMARY KEY (id)) 
	ENGINE = InnoDB;";
	
	$create_db = mysqli_query($link, $query);
	if ($create_db) 
	{
		echo "School table was created successfully</br>";
	}
	else 
	{
		echo "Failed to create a database";
	}
	
	
	$query = "CREATE TABLE IF NOT EXISTS $db.Courses 
	( id INT NOT NULL AUTO_INCREMENT , 
	name TEXT NOT NULL, 
	teacher INT NOT NULL, 
	description TEXT NOT NULL,
	PRIMARY KEY (id)) 
	ENGINE = InnoDB;";
	
	$create_db = mysqli_query($link, $query);
	if ($create_db) 
	{
		echo "Courses table was created successfully</br>";
	}
	else 
	{
		echo "Failed to create a database";
	}
	
	
	$query = "CREATE TABLE IF NOT EXISTS $db.CourseStudents 
	( id INT NOT NULL AUTO_INCREMENT , 
	course INT NOT NULL, 
	student INT NOT NULL, 
	PRIMARY KEY (id)) 
	ENGINE = InnoDB;";
	
	$create_db = mysqli_query($link, $query);
	if ($create_db) 
	{
		echo "CourseStudents table was created successfully</br>";
	}
	else 
	{
		echo "Failed to create a database";
	}
	
	$query = "CREATE TABLE IF NOT EXISTS $db.CourseContents 
	( id INT NOT NULL AUTO_INCREMENT , 
	course INT NOT NULL, 
	task INT NOT NULL, 
	PRIMARY KEY (id)) 
	ENGINE = InnoDB;";
	
	$create_db = mysqli_query($link, $query);
	if ($create_db) 
	{
		echo "CourseContents was created successfully</br>";
	}
	else 
	{
		echo "Failed to create a database";
	}
	
	$query = "CREATE TABLE IF NOT EXISTS $db.Task 
	( id INT NOT NULL AUTO_INCREMENT , 
	type ENUM('lecture','practice','test','consultation'), 
	description TEXT NOT NULL, 
	path TEXT NOT NULL, 
	PRIMARY KEY (id)) 
	ENGINE = InnoDB;";
	
	$create_db = mysqli_query($link, $query);
	if ($create_db) 
	{
		echo "Task table was created successfully</br>";
	}
	else 
	{
		echo "Failed to create a database";
	}
	
?>