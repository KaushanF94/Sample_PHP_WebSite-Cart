<?php
	              $FirstName =$_POST['FirstName'];
                  $LastName =$_POST['LastName'];
                  $EmailAddress =$_POST['EmailAddress'];
                  $Date =$_POST['Date'];
                  $Subscription =$_POST['Subscription'];
                  $Rating =$_POST['rate'];
                  $Message =$_POST['Message'];


	// Create connection
	$conn = mysqli_connect("localhost", "root","", "gamer_db");
	// Check connection
	if (!$conn) {
 	   die("Connection failed: " . mysqli_connect_error());
	}
	if($FirstName!=='' && $LastName!=='' && $EmailAddress!=''){
		$sql = "INSERT INTO  feedback(First_Name,Last_Name,Email_Address,Date,Subscription,Rating,Message)Values('$FirstName','$LastName','$EmailAddress','$Date','$Subscription','$Rating','$Message')";

		}
	
	if (mysqli_query($conn, $sql) ) {

    	 header('Location:feedbackSuccess.php');
		
	} else {
   
		  header('Location:feedbackWrong.php');
	}

	mysqli_close($conn);
 ?>