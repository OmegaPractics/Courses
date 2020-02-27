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
	
	$query = "ALTER TABLE $db.User ADD FOREIGN KEY (school) REFERENCES $db.School (id) ON DELETE CASCADE";
	
	$create_db = mysqli_query($link, $query);
	if ($create_db) 
	{
		echo "Connection between User and School created successfully</br>";
	}
	else 
	{
		echo "Failed to create a database";
	}
	
	$query = "ALTER TABLE $db.Courses ADD FOREIGN KEY (teacher) REFERENCES $db.User (id) ON DELETE CASCADE";
	
	$create_db = mysqli_query($link, $query);
	if ($create_db) 
	{
		echo "Connection between Courses and User created successfully</br>";
	}
	else 
	{
		echo "Failed to create a database";
	}
	
	$query = "ALTER TABLE $db.CourseStudents ADD FOREIGN KEY (course) REFERENCES $db.Courses (id) ON DELETE CASCADE";
	
	$create_db = mysqli_query($link, $query);
	if ($create_db) 
	{
		echo "Connection between CourseStudents and Course created successfully</br>";
	}
	else 
	{
		echo "Failed to create a database";
	}
	
	$query = "ALTER TABLE $db.CourseStudents ADD FOREIGN KEY (student) REFERENCES $db.User (id) ON DELETE CASCADE";
	
	$create_db = mysqli_query($link, $query);
	if ($create_db) 
	{
		echo "Connection between CourseStudents and User created successfully</br>";
	}
	else 
	{
		echo "Failed to create a database";
	}
	
	$query = "ALTER TABLE $db.CourseContents ADD FOREIGN KEY (course) REFERENCES $db.Courses (id) ON DELETE CASCADE";
	
	$create_db = mysqli_query($link, $query);
	if ($create_db) 
	{
		echo "Connection between CourseContents and Course created successfully</br>";
	}
	else 
	{
		echo "Failed to create a database";
	}
	
	$query = "ALTER TABLE $db.CourseContents ADD FOREIGN KEY (task) REFERENCES $db.Task (id) ON DELETE CASCADE";
	
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