<?php
session_start();

if($_SESSION['LOGED'] == true)
{
     
}else{
   header('Location: home.php');
}
?>

<!DOCTYPE html>
<html>
<head>

</head>
<link rel="stylesheet" type="text/css" href="ashan.css" >

<body style="background-image: url('Image/witcherBG.jpg')";>



  <ul id="H2">
        <li id="H1"><a id="H" href="home_u.php">HOME</a></li>
        <li id="H1"><a id="H" href="List_u.php">GAME</a></li>
        <li id="H1"><a id="H" href="shop_u.php">SHOP</a></li>
        <li id="H1" style="float:right;"><a id="H" class="active" href="Aboutus_u.php">About us</a></li>
        <li id="H1" style="float:right;"><a id="H" class="active" href="siteMap_u.php">Contact us</a></li>
        <li id="H1" style="float:right;"><a id="H" class="active" href="feedback_u.php">Feedback</a></li>
        <li id="H1" style="float:right;"><a id="H" class="active" href="quizTest_u.php">Quiz</a></li>
		<li id="H1" style="float:right;"><a id="H" class="active" href="logout_u.php">LogOut</a></li>
    </ul>

<center>

 <div style="background-image :url('Image/best gamer.jpg');width:890px;height:242px;margin-left:50px">
        </div>

        <div style="background-image :url('background_generic.jpg');width:890px;height:1000px;margin-left:50px"> 
        <br>
        
<font color="#FFFFFF">
<font color="#FFCC00"><h1>Find Us</h1></font>

Address :- Gamer.com,No:57,Ramakrishna Road, Wallawatte, Colombo 06, Sri Lanka.
<br>
Email: gamer@gmail.com
<br>
Phone: +011-1234-5678
<br>
WebSite: www.gamer.com
</font>
        
   
       <div style="overflow:hidden;width:1000px;height:800px;resize:none;max-width:100%;"><div id="gmap_display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Informatics+Institute+of+Technology,+57+Ramakrishna+Rd,+Colombo+00600,+Sri+Lanka&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="google-map-enabler" href="http://www.hostingreviews.website" id="get-data-for-map">hostingreviews.website</a><style>#gmap_display .text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div><script src="https://www.hostingreviews.website/google-maps-authorization.js?id=a5352ed6-6612-9887-2fd1-07c5d8a7cf99&c=google-map-enabler&u=1461505203" defer async></script>

</div>   
</center>

</body>
</html>
