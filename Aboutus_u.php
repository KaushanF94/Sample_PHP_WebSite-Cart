<?php
session_start();

if($_SESSION['LOGED'] == true)
{
     
}else{
   header('Location: home.php');
}
?>

<html>
<head>
</head>
<link rel="stylesheet" type="text/css" href="menu.css">
<body style="background-image: url('Image//witcherBG.jpg')";>
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
        <div style="background-image :url('Image/main1.jpg');width:890px;height:242px;margin-left:35px">
        </div>
        <br />
        <br />
        <br />
        <div  style="background-image :url('Image/background_generic.jpg');width:890px;height:1700px;margin-left:35px; text-align:left; background-repeat: no-repeat;
    background-attachment: fixed; ">
            <table style="color:white; border-collapse:separate; 
border-spacing:5em;">
                <tr>
                    <td><div style="background-image : url('Image/Buwendra.jpg'); height:250px; width: 250px;"></div></td>
                    <td><h2 ><a href="boo_u.php">Buwendra Abeysuriya</a></h2><br />Age - 19<br />Student ID - 2014256
                    <br />University - University Of Westminster<br />Birth Day - 15-8-1997<br />Gaming ID - DRAGNEEL</td>
                   
                </tr>
                <tr>
                    <td><div style="background-image : url('Image/Ashinka.jpg'); height:250px; width: 250px;"></div></td>
                    <td>
                        <h2><a href="ashinka_u.php">W.G.Ashinka Madushani</a></h2><br />Age - 21<br />Student ID - 2014266
                        <br />University - University Of Westminster<br />Birth Day - 9-8-1994<br />Gaming ID - DYTTA
                    </td>

                </tr>
                <tr>
                    <td><div style="background-image : url('Image/ashan.jpg'); height:250px; width: 250px;"></div></td>
                    <td>
                        <h2><a href="ashan_u.php">D.A.D.DE Vaas Gunasekara </a></h2><br />Age - 21<br />Student ID - 2014289
                        <br />University - University Of Westminster<br />Birth Day - 01-04-1995<br />Gaming ID - DAMIEN DARK
                    </td>

                </tr>
                <tr>
                    <td><div style="background-image : url('Image/kowshan.jpg'); height:250px; width: 250px;"></div></td>
                    <td>
                        <h2><a href="kaushan_u.php">W.C.Kaushan Fernando</a></h2><br />Age - 22<br />Student ID - 2014288
                        <br />University - University Of Westminster<br />Birth Day - 11-04-1994<br />Gaming ID - MEGATRON007
                    </td>
                </tr>
                     
                <tr>
                    <td><div style="background-image : url('Image/devin.jpg'); height:250px; width: 250px;"></div></td>
                    <td>
                        <h2><a href="devin_u.php">R.A.D.N De Alwis</a></h2><br />Age - 22<br />Student ID - 2014134
                        <br />University - University Of Westminster<br />Birth Day - 25-02-1994<br />Gaming ID - RAZOR
                    </td>
                </tr>
</table>
                 </div>
    </center>



</body>
</html>