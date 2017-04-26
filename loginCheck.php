<?php
session_start();
  $con = mysqli_connect("localhost","root","","gamer_db");
  
  
      $no_1=$_POST["username"];
      $no_2=$_POST["password"];
      $query = "SELECT * FROM regestration WHERE UserName='$no_1'";
      $result = mysqli_query($con,$query);

       $count=0;
      while($row= mysqli_fetch_array($result)){
      	if($row['UserName']==$no_1 && $row['Password']== $no_2 ){
             $count++;
      	}
      	
      }
      if($count==1){
            $_SESSION['UserName'] = $_POST["username"];
            $_SESSION['LOGED'] = TRUE;
           header('Location: home_u.php');
      }else{
      	  header('Location: loginError.php');
      }

      mysqli_close($con);
?>