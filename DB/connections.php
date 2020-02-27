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
	
	$query = "UPDATE $db.User SET FOREIGN KEY (school) REFERENCES School (id) ON DELETE CASCADE";
	
	$create_db = mysqli_query($link, $query);
	if ($create_db) 
	{
		echo "Connection between User and School created successfully</br>";
	}
	else 
	{
		echo "Failed to create a database";
	}
	
	$query = "UPDATE $db.Courses SET FOREIGN KEY (teacher) REFERENCES User (id) ON DELETE CASCADE";
	
	$create_db = mysqli_query($link, $query);
	if ($create_db) 
	{
		echo "Connection between Courses and User created successfully</br>";
	}
	else 
	{
		echo "Failed to create a database";
	}
	
	$query = "UPDATE $db.CourseStudents SET FOREIGN KEY (course) REFERENCES Course (id) ON DELETE CASCADE";
	
	$create_db = mysqli_query($link, $query);
	if ($create_db) 
	{
		echo "Connection between CourseStudents and Course created successfully</br>";
	}
	else 
	{
		echo "Failed to create a database";
	}
	
	$query = "UPDATE $db.CourseStudents SET FOREIGN KEY (student) REFERENCES User (id) ON DELETE CASCADE";
	
	$create_db = mysqli_query($link, $query);
	if ($create_db) 
	{
		echo "Connection between CourseStudents and User created successfully</br>";
	}
	else 
	{
		echo "Failed to create a database";
	}
	
	$query = "UPDATE $db.CourseContents SET FOREIGN KEY (course) REFERENCES Course (id) ON DELETE CASCADE";
	
	$create_db = mysqli_query($link, $query);
	if ($create_db) 
	{
		echo "Connection between CourseContents and Course created successfully</br>";
	}
	else 
	{
		echo "Failed to create a database";
	}
	
	$query = "UPDATE $db.CourseContents SET FOREIGN KEY (task) REFERENCES Task (id) ON DELETE CASCADE";
	
	$create_db = mysqli_query($link, $query);
	if ($create_db) 
	{
		echo "Connection between CourseContents and Task created successfully</br>";
	}
	else 
	{
		echo "Failed to create a database";
	}
	
?>