<?php
session_start();

if($_SESSION['LOGED'] == true)
{
   header('Location: login_u.php');
}else{
     
}
?>

<html>
<title>Registration</title>
<head>
        <script src="jquery-1.12.3.min.js"></script>  
           <script src="js/bootstrap.js"></script>  
           <link href="css/bootstrap.css" rel="stylesheet" />  
  <link rel="stylesheet" type="text/css" href="menu.css">
<body style="height: 100%;
width: 100%; background-image: url('Image/witcherBG.jpg')"><ul id="H2">
   
        <li id="H1"><a id="H" href="home.php">HOME</a></li>
        <li id="H1"><a id="H" href="List.php">GAME</a></li>
        <li id="H1" style="float:right;"><a id="H" class="active" href="Aboutus.php">ABOUT US</a></li>
        <li id="H1" style="float:right;"><a id="H" class="active" href="siteMap.php">Contact us</a></li>
	<li id="H1"style="float:right;"><a id="H" class="active" href="registration.php">SignUp</a></li>
     <li id="H1"style="float:right;"><a id="H" class="active" href="login.php">LogIn</a></li>
    </ul>
   <center>
        <div style="align-content:center;background-image :url('Image/main.jpg');width:890px;height:242px;margin-left:35px">
        </div>
        <div style="background-image :url('Image/background_generic.jpg');width:890px;height:900px;margin-left:35px;text-align:left; ">
        <center>
        <div style="height: 55px;"></div>
        	<form action="loginCheck.php" name="Login Form" method="post">
  
        <div style ="width: 50%;height: 70px;"><br><br>
        <strong style="color: white;text-align: left;">User Name </strong>
         <br/> <br/> 
         
        <label>
        <input style="background-color:#09C" name="username" type="text" id="username" size="45px" class="form-control"> 
        </label>
      
    
        </div>
        <br/> <br/>
      
        <div style ="width: 50%;height: 70px;"> <br/> 
        <strong style="color: white;text-align: left;">Password  </strong>
         <br/>
          <br/>
        <label>
        
            <input style="background-color:#09C" type="password" id="password" name="password" placeholder="" size="45px" class="form-control"></input>
			
        </label>
        </div><br/><br/><br/><br/>
              
       

        <center><div style ="width:20%;height: 70px; text-align: right;">
        <strong><input style="background-color:#3F3" type="submit" value="LogIn" class="form-control" ></strong>
         </div></center>
        	</form>
        
         </center>
         </div>

</center>
</body>
</HTML>
 