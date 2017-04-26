<?php
	$First_name = $_POST['First_name'];
	$Last_name = $_POST['Last_name'];
	$Email = $_POST['email'];
	$password = $_POST['conferm_pass'];
	$User_Name = $_POST['username'];
	$Gender = $_POST['gender'];
	$Country = $_POST['Country'];



	// Create connection
	$conn = mysqli_connect("localhost", "root","", "gamer_db");
	// Check connection
	if (!$conn) {
 	   die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "INSERT INTO regestration (FirstName,LastName,username,Email,Password,Gender,Country) VALUES ('$First_name', '$Last_name', '$User_Name', '$Email', '$password', '$Gender', '$Country')";

	if (mysqli_query($conn, $sql)) {
    	 header('Location:home.php');
	} else {
		  header('Location:registration.php');
	}

	mysqli_close($conn);
 ?>