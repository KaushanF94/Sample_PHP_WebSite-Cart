<?php
session_start();

if($_SESSION['LOGED'] == true)
{
   header('Location: Aboutus_u.php');
}else{
     
}
?>

<html>
<head>
</head>
<link rel="stylesheet" type="text/css" href="menu.css">
<body style="background-image: url('Image/witcherBG.jpg')";>
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
                    <td><h2 ><a href="boo.php">Buwendra Abeysuriya</a></h2><br />Age - 19<br />Student ID - 2014256
                    <br />University - University Of Westminster<br />Birth Day - 15-8-1997<br />Gaming ID - DRAGNEEL</td>
                   
                </tr>
                <tr>
                    <td><div style="background-image : url('Image/Ashinka.jpg'); height:250px; width: 250px;"></div></td>
                    <td>
                        <h2><a href="ashinka.php">W.G.Ashinka Madushani</a></h2><br />Age - 21<br />Student ID - 2014266
                        <br />University - University Of Westminster<br />Birth Day - 9-8-1994<br />Gaming ID - DYTTA
                    </td>

                </tr>
                <tr>
                    <td><div style="background-image : url('Image/ashan.jpg'); height:250px; width: 250px;"></div></td>
                    <td>
                        <h2><a href="ashan.php">D.A.D.DE Vaas Gunasekara </a></h2><br />Age - 21<br />Student ID - 2014289
                        <br />University - University Of Westminster<br />Birth Day - 01-04-1995<br />Gaming ID - DAMIEN DARK
                    </td>

                </tr>
                <tr>
                    <td><div style="background-image : url('Image/kowshan.jpg'); height:250px; width: 250px;"></div></td>
                    <td>
                        <h2><a href="kaushan.php">W.C.Kaushan Fernando</a></h2><br />Age - 22<br />Student ID - 2014288
                        <br />University - University Of Westminster<br />Birth Day - 11-04-1994<br />Gaming ID - MEGATRON007
                    </td>
                </tr>
                     
                <tr>
                    <td><div style="background-image : url('Image/devin.jpg'); height:250px; width: 250px;"></div></td>
                    <td>
                        <h2><a href="devin.php">R.A.D.N De Alwis</a></h2><br />Age - 22<br />Student ID - 2014134
                        <br />University - University Of Westminster<br />Birth Day - 25-02-1994<br />Gaming ID - RAZOR
                    </td>
                </tr>
</table>
                 </div>
    </center>



</body>
</html>