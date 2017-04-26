    
<?php
$conn=mysqli_connect("localhost","root","","gamer_db");  
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
} 
session_start();
if(isset($_GET['Game_ID']))  { 
  $sql = "SELECT * FROM gamedetails WHERE Game_ID=".$_GET['Game_ID'];
  $result = mysqli_query($conn, $sql);
  $Games = mysqli_fetch_object($result); 
  $Game_ID = $Games->Game_ID;
  $Game_Name = $Games->Game_Name;
  $UserName = $_SESSION['UserName'];            
}

mysqli_query($conn,"SET character_set_client=utf8");
mysqli_query($conn,"SET character_set_connection=utf8");
if(isset($_POST['submit'])){
  $Game_ID = $_POST['Game_ID'];
  $Game_Name = $_POST['Game_Name'];
  $UserName = $_POST["UserName"];
  $comment = $_POST["comment"];
  $insert="INSERT INTO comment(UserName,Comment,Game_ID,Game_Name) VALUES ('$UserName','$comment','$Game_ID' , '$Game_Name') ";
  if (mysqli_query($conn, $insert)) {

 } else {

   header('Location:home.php');

 }
}
mysqli_close($conn);



?>

<html>
<head>
 <link rel="stylesheet" type="text/css" href="menu.css">
 <title>Gamer</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <style>
  size{ max-width: 100%}

  red{color: red;}

  div .tab-pane fade active in{
   width:200px;height:242px;
 }

 h6{background-color:green}

 font{color="white"}
 textarea{width: 300px;
   height: 150px;}
   input[type="text"] {
     width: 200px;}
   </style>
 </head>
 <body style="background-image: url('Image/witcherBG.jpg')">
 <br>  <ul id="H2">
        <li id="H1"><a id="H" href="home.php">HOME</a></li>
        <li id="H1"><a id="H" href="List.php">GAME</a></li>
        <li id="H1" style="float:right;"><a id="H" class="active" href="Aboutus.php">About us</a></li>
        <li id="H1" style="float:right;"><a id="H" class="active" href="siteMap.php">Contact us</a></li>
        <li id="H1"style="float:right;"><a id="H" class="active" href="feedback.php">Feedback</a></li>
  <li id="H1"style="float:right;"><a id="H" class="active" href="registration.php">SignUp</a></li>
    <li id="H1"style="float:right;"><a id="H" class="active" href="login.php">LogIn</a></li>
    </ul><br>

   <div align="center" style="background-image :url('Image/main.jpg');width:890px;height:242px;margin-left:245px">
   </div>
   <div align="center" class="mainbox" style="background-image :url('Image/background_generic.jpg');" >


    <center>
      <h2 style="color: green"><?php echo $Game_Name ?></h2>
      <form action="commentPost.php?Game_ID=<?php echo $Games->Game_ID; ?>" method="POST">
      <input hidden type="text" name="Game_ID" value=" <?php echo $Game_ID ?>"></input>
      <input hidden type="text"  name="Game_Name" value="<?php echo $Game_Name ?>"></input>
        <table>
        <tr><td><font color="Green">User Name: </font><br><input type="text"  name="UserName" value="<?php echo $UserName ?>" class="form-control" readonly/></td></tr><br>
         <tr><td colspan="2"><font color="Green">Comment: </font></td></tr>
         <tr><td colspan="5"><textarea name="comment" rows="10" cols="50" class="form-control"></textarea></td></tr>
         <tr><td colspan="2"><input style="background-color:#09C"  type="submit" name="submit" value=" Post Comment" class="form-control"></td></tr>
       </table>
     </form>


     <?php
     $dbLink = mysqli_connect("localhost","root","","gamer_db");

     mysqli_query($dbLink,"SET character_set_results=utf8");
     mb_language('uni');
     mb_internal_encoding('UTF-8');



     if(isset($_GET['Game_ID']))  { 

               
   $sql2 = "SELECT * FROM comment ORDER BY id DESC";
  $result2 = mysqli_query($dbLink, $sql2);
    


    
     while($Games2 = mysqli_fetch_assoc($result2)){
      $Game_ID=$Games2['Game_ID'];
      if($Game_ID==$_GET['Game_ID']){
      $UserName=$Games2['UserName'];
      $comment=$Games2['Comment'];
      echo '<font color="Red">'.$UserName. '<br/>' . '<br/>' .'<font color="Yellow">'. $comment . '<br/>' . '<br/>' . '<hr size="1"/>';    
      }
     
    }

}

    mysqli_close($dbLink);
    ?>


  </center>
</body> 
</div>
</font>
</h6>
</html>