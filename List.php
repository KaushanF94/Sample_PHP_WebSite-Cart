<?php
session_start();

if($_SESSION['LOGED'] == true)
{
   header('Location: List_u.php');
}else{
     
}
?>

<?php
 $connect = mysqli_connect("localhost", "root", "", "gamer_db");
 $result = mysqli_query($connect, 'select * from gamedetails');  
?>
<html>
<head>
</head>
        <script src="jquery-1.12.3.min.js"></script>  
           <script src="js/bootstrap.js"></script>  
           <link href="css/bootstrap.css" rel="stylesheet" />  
<link rel="stylesheet" type="text/css" href="menu.css" >
<body  style="background-image: url('Image/witcherBG.jpg')";>
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

        <div class="mainbox"  style="background-image :url('background_generic.jpg');">
            <br />

                    <?php
                     while($gamedetails = mysqli_fetch_object($result)) { 
                      if($gamedetails->Game_ID > 10){
                       break;
                         }
               ?>         
                <p><br/></p>
                <a id="H1" href="mod3.php?Game_ID=<?php echo $gamedetails->Game_ID; ?>"><div style="float: left;" class="detailitem" >
                            <div class="detailimg">
                            <img <?php echo $gamedetails->List_Img ?> >
                            <div style="float:right;" class="detailcontent">                   
                            <p style="color: white;"><?php echo $gamedetails->Game_Name ?></p>
                            </div>
                            </div>
                            </div>
                            </a>
                <?php } ?>               


        </div>
    </center>



</body>
</html>