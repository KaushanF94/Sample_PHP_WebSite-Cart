  <?php
session_start();

if($_SESSION['LOGED'] == true)
{
   
}else{
     header('Location: mod3.php');
}
?>
<?php
 $connect = mysqli_connect("localhost", "root", "", "gamer_db");
require 'Data.php';
if(isset($_GET['Game_ID']))  { 
  $sql = "SELECT * FROM gamedetails WHERE Game_ID=".$_GET['Game_ID'];
  $results = mysqli_query($connect, $sql);
  $Games = mysqli_fetch_object($results); 
  $Data = new Data();
  $Data->Game_ID = $Games->Game_ID;
  $Data->Game_Name = $Games->Game_Name;
  $Data->Image_link = $Games->Image_link;
  $Data->YouTube_Link = $Games->YouTube_Link;
  $Data->Game_Description = $Games->Game_Description;
  $Data->OS = $Games->OS;
  $Data->Processor = $Games->Processor;
  $Data->Memory = $Games->Memory;
  $Data->Graphics = $Games->Graphics;
  $Data->DrectX = $Games->DrectX;
  $Data->Network = $Games->Network;
  $Data->HardDrive = $Games->HardDrive;
  $Data->SoundCard = $Games->SoundCard;
  $Data->Cover_Game_Link = $Games->Cover_Game_Link;

}

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
      </head>
      <body style="background-image: url('Image/witcherBG.jpg')" ;>
	 
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

    <div align="center" style="background-image :url('Image/main.jpg');width:890px;height:242px;margin-left:245px">
        </div>
        <div align="center" class="mainbox" style="background-image :url('Image/background_generic.jpg');" >

          <div id="Hedding" class="datahedding"><h2 style="color: green"><?php echo $Data->Game_Name  ?></h2>
          </div>
          
          <div align="center">
            <img <?php echo  $Data->Cover_Game_Link ?> >
          </div>

          <h3 style="color: blue;">Minimum Systerm Requirments</h3>
          <br/>
          <div align="left" >
          <br/>
          <table style="color:white; border-color:white;  text-align:center; "border="10px" width="100%">
            <tr>
              <td></td>
              <td>OS</td>
              <td><?php echo $Data->OS ?></td>
            </tr>
            <tr>
              <td></td>
              <td>Processor</td>
              <td><?php echo $Data->Processor ?></td>
            </tr>
            <tr>
            <td></td>
            <td>Memory</td>
            <td><?php echo $Data->Memory ?></td>  
            </tr>
            <tr>
              <td></td>
              <td>Graphics</td>
              <td><?php echo $Data->Graphics ?></td>
            </tr>
            <tr>
              <td></td>
              <td>DrectX</td>
              <td><?php echo  $Data->DrectX ?></td>
            </tr>
            <tr>
              <td></td>
              <td>Network</td>
              <td><?php echo $Data->Network ?></td>
            </tr>
            <tr>
              <td></td>
              <td>HardDrive</td>
              <td><?php echo $Data->HardDrive ?></td>
            </tr>
            <tr>
              <td></td>
              <td>SoundCard</td>
              <td> <?php echo $Data ->SoundCard ?></td>
            </tr>
            
          </table>
          <br/>
      
                    <br/>
        <div>
           <iframe align="right" width="400" height="250"
              <?php echo $Data->YouTube_Link  ?> >
          </iframe>
          <div boder="10%" style="color:white; border-color:black; "  align="left">
          <h2 > Discription</h2>
          <p><?php echo $Data->Game_Description  ?></p>
          <br/>
        
                          <table>
                          <tr><td colspan="2"><a  href="commentPost.php?Game_ID=<?php echo $Games->Game_ID; ?>"> <input  style="background-color:#09C"  type="submit" name="submit1" value=" Post Comment" class="form-control"></a></td></tr>
                          </table>
          </div>
          <div align="center">
            <p>&#160</p>
          </div>

            </div>
        </div>
</body>
</html>