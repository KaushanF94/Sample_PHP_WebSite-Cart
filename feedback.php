<html>
    <head>
	
	 
    <link rel="stylesheet" type="text/css" href="menu.css" >
    <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="css/bootstrap.min.css">
              <script src="js/jquery-1.3.2.min.js"></script>
              <script src="js/bootstrap.min.js"></script>
      </head>
    <body style="background-image: url('Image/witcherBG.jpg');">
        <br>  <ul id="H2">
        <li id="H1"><a id="H" href="home.php">HOME</a></li>
        <li id="H1"><a id="H" href="List.php">GAME</a></li>
        <li id="H1" style="float:right;"><a id="H" class="active" href="Aboutus.php">About us</a></li>
        <li id="H1" style="float:right;"><a id="H" class="active" href="siteMap.php">Contact us</a></li>
        <li id="H1"style="float:right;"><a id="H" class="active" href="feedback.php">Feedback</a></li>
  <li id="H1"style="float:right;"><a id="H" class="active" href="registration.php">SignUp</a></li>
    <li id="H1"style="float:right;"><a id="H" class="active" href="login.php">LogIn</a></li>
    </ul><br>

        <center>
        <div style="background-image :url('Image/best gamer.jpg');width:890px;height:242px;margin-left:45px">
        </div>

        <div style="background-image :url('background_generic.jpg');width:890px;height:800px;margin-left:35px">
        <br>  
            
	<h2 style="color:white;">
        Feedback
           </h6><br>
           
   <div style="background-color:grey;width:790px;height:600px;margin-left:20px;margin-right:20px"><br>
             <form action="feedbackSave.php" name="Feedback Form" method="post">
  
           <table>
                <tr><td>First Name</td>
               <td colspan="5"> <input type="text" name="FirstName" value="" class="form-control"/><td></tr>
                <tr><td>&nbsp</td><td>&nbsp</td></tr>
		<tr><td>Last Name</td>
               <td colspan="5"><input type="text" name="LastName" value="" class="form-control"/></td></tr>
                 <tr><td>&nbsp</td><td>&nbsp</td></tr>
                <tr><td> Email Address</td>
               <td colspan="5"><input type="email" name="EmailAddress" value="" class="form-control"/> </td></tr>
                    <tr><td>&nbsp</td><td>&nbsp</td></tr>
                 <tr><td>Date</td>
               <td colspan="5"><input type="text" name="Date" value="<?php echo date('l jS \of F Y'); ?>" readonly class="form-control"/></td></tr>
                   <tr><td>&nbsp</td><td>&nbsp</td></tr>
                 <tr><td>Subscription</td>
                <td ><input type="radio" name="Subscription" value="yes" /><label for="star6" class="form-control">Yes</label></td>
                <td ><input type="radio" name="Subscription" value="no" /><label for="star6" class="form-control">No</label></td></tr>
                  <tr><td>&nbsp</td><td>&nbsp</td></tr>
                        <tr><td>Rating</td>
                   
                 <td><input type="radio" name="rate" value="5"/><label for="star5" class="form-control">5 stars</label></td>
                 <td><input type="radio" name="rate" value="4"/><label for="star5" class="form-control">4 stars</label></td>
                 <td><input type="radio" name="rate" value="3"/><label for="star5" class="form-control">3 stars</label></td>
                 <td><input type="radio" name="rate" value="2"/><label for="star5" class="form-control">2 stars</label></td>
                 <td><input type="radio" name="rate" value="1"/><label for="star5" class="form-control">1 star</label></td></tr>
                         <tr><td>&nbsp</td><td>&nbsp</td></tr>    
           <tr><td>Message</td>
                <td colspan="5"><textarea type="text" name="Message" value="" class="form-control"/></textarea></td></tr>
                
                  <tr><td>&nbsp</td><td>&nbsp</td></tr>
               <tr><td colspan="2"><input style="background-color:#00ff00" type='submit' name="Submit" value='Submit' class="form-control"/></td></tr>
               </table> 
        </form>
		</div>
      
    </body>    
</html>    

