 <?php  
 //check.php  
 $connect = mysqli_connect("localhost", "root", "", "gamer_db");  
 if(isset($_POST["UserName"]))  
 {  
      $sql = "SELECT * FROM regestration WHERE UserName = '".$_POST["UserName"]."'";  
      $result = mysqli_query($connect, $sql);  
      if(mysqli_num_rows($result) > 0)  
      {  
           echo '<span class="text-danger">The User name you have entered is already exist.Please choose another one.</span>';  
      }  
      else  
      {  
           echo '<span class="text-success">Username is correct</span>';  
      }  
 }  
 ?>  