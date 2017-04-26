<?php
session_start();

if($_SESSION['LOGED'] == true)
{
   header('Location: home_u.php');
}else{
     
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gamer</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/menu.css">
<!--[if IE 6]><link rel="stylesheet" href="css/ie6-style.css" type="text/css" media="all" /><![endif]-->
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/fns.js" type="text/javascript"></script>
</head>
<body style="background-image :url('css/images/witcherBG.jpg');">
     <br>  <ul id="H2">
        <li id="H1"><a id="H" href="home.php">HOME</a></li>
        <li id="H1"><a id="H" href="List.php">GAME</a></li>
        <li id="H1" style="float:right;"><a id="H" class="active" href="Aboutus.php">About us</a></li>
        <li id="H1" style="float:right;"><a id="H" class="active" href="siteMap.php">Contact us</a></li>
  <li id="H1"style="float:right;"><a id="H" class="active" href="registration.php">SignUp</a></li>
    <li id="H1"style="float:right;"><a id="H" class="active" href="login.php">LogIn</a></li>
    </ul><br>
    
  
<!-- Page -->
<div id="page" class="shell">

  <!-- Header -->
  <div id="main">
  <div style="width:895px;height:279px;margin-left:10px;margin-right:10px;">
  <img class="mySlides" src="css/images/gamer.jpg" style="width:100%">
  <img class="mySlides" src="css/images/gamer1.jpg" style="width:100%">
 

  </div>

  <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}

</script>
  <br>

    <div id="main-bot">

      
      <!-- Content -->
      <div id="content">

        <div class="block">
          <div class="block-bot">
            <div class="block-cnt"> <div class="head">
            <div class="head-cnt">
              <h3>What's New?????</h3>
            </div>
          </div>

              <div id="slider">
                <div class="buttons"> <span class="prev">prev</span> <span class="next">next</span> </div>
                <div class="holder">
                  <div class="frame">&nbsp;</div>
                  <div class="content">
                    <ul>
                    <li class="fragment">
                      <div class="image">
                      <img src="css/images/img101.jpg" alt="" /> 
                  </div>
                  <div class="cnt">
                    <div class="cl">&nbsp;</div>
                    <div class="side-a">
                      <h4>DarkSouls III</h4>
                      <ul class="rating">
                        <li><span class="star full-star">&nbsp;</span></li>
                        <li><span class="star full-star">&nbsp;</span></li>
                        <li><span class="star full-star">&nbsp;</span></li>
                        <li><span class="star full-star">&nbsp;</span></li>
                        <li><span class="star empty-star">&nbsp;</span></li>
                        <li><span class="votes">1.456 votes</span></li>
                      </ul>
                    </div>
                    <div class="side-b">
                      <p>Dark Souls 3 is no exception in this regard. You begin the game as an â€œUnkindledâ€, caught in a world that is on the brink of disaster. As the anonymous protagonist you must conquer the Lords of Cinder and decide the fate of the land known as Lothric. </p>
                    </div>
                    <div class="cl">&nbsp;</div>
                  </div>
                  </li>
                  <li class="fragment">
                    <div class="image"> <img src="css/images/deadpool.jpg" alt="" /> </div>
                    <div class="cnt">
                      <div class="cl">&nbsp;</div>
                      <div class="side-a">
                        <h4>Deadpool</h4>
                        <ul class="rating">
                          <li><span class="star full-star">&nbsp;</span></li>
                          <li><span class="star full-star">&nbsp;</span></li>
                          <li><span class="star full-star">&nbsp;</span></li>
                          <li><span class="star full-star">&nbsp;</span></li>
                          <li><span class="star full-star">&nbsp;</span></li>
                          
                          <li><span class="votes">1.900 votes</span></li>
                        </ul>
                      </div>
                      <div class="side-b">
                        <p>Deadpool talks a big game but delivers a standard action experience that is the turducken of videogame parody: It is what it parodies what it is. </p>
                      </div>
                      <div class="cl">&nbsp;</div>
                    </div>
                  </li>
                  <li class="fragment">
                    <div class="image"> <img src="css/images/cs.png" alt="" /> </div>
                    <div class="cnt">
                      <div class="cl">&nbsp;</div>
                      <div class="side-a">
                        <h4>CS GO</h4>
                        <ul class="rating">
                          <li><span class="star full-star">&nbsp;</span></li>
                          <li><span class="star full-star">&nbsp;</span></li>
                          <li><span class="star full-star">&nbsp;</span></li>
                          <li><span class="star full-star">&nbsp;</span></li>
                          <li><span class="star empty-star">&nbsp;</span></li>
                          <li><span class="votes">1.600 votes</span></li>
                        </ul>
                      </div>
                      <div class="side-b">
                        <p>Growth is an important factor in Global Offensive, especially if you're coming into Counter-Strike fresh or after a sabbatical. This is an extremely hardcore, skill-based first-person shooter, and it forces you to think differently than other modern shooters. </p>
                      </div>
                      <div class="cl">&nbsp;</div>
                    </div>
                  </li>
                  <li class="fragment">
                    <div class="image"> <img src="css/images/gtav.jpg" alt="" /> </div>
                    <div class="cnt">
                      <div class="cl">&nbsp;</div>
                      <div class="side-a">
                        <h4>GTA V</h4>
                        <ul class="rating">
                          <li><span class="star full-star">&nbsp;</span></li>
                          <li><span class="star full-star">&nbsp;</span></li>
                          <li><span class="star full-star">&nbsp;</span></li>
                          <li><span class="star full-star">&nbsp;</span></li>
                          <li><span class="star empty-star">&nbsp;</span></li>
                          <li><span class="votes">1.700 votes</span></li>
                        </ul>
                      </div>
                      <div class="side-b">
                        <p>GTA V has an abundance of such moments, big and small, that make San Andreas – the city of Los Santos and its surrounding areas – feel like a living world where anything can happen. It both gives you tremendous freedom to explore an astonishingly well-realised world and tells a story that’s gripping, thrilling, and darkly comic. </p>
                      </div>
                      <div class="cl">&nbsp;</div>
                    </div>
                  </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="block">
        <div class="block-bot">
          <div class="head">
          
          </div>
        </div>
      </div>
      <div class="block">
        <div class="block-bot">
          <div class="head">
            <div class="head-cnt">
              <h3>Latest Gaming Consols</h3>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          <div class="row-articles articles">
            <div class="cl">&nbsp;</div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"> <img src="css/images/img7.jpg" alt="" /></div>
              <div class="cnt">
                <h4>RSZ Logitech Flight System</h4>
                <p>Authentic design inspired by military and commercial planes and helicopters. Force Feedback Joystick. Dual throttle lets you precisely control multi-engine aircraft using the split lever. Rudder pedals with toe brakes. Interactive, programmable throttle-base buttons.</p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"><img src="css/images/img8.jpg" alt="" /></div>
              <div class="cnt">
                <h4>RSZ Logitech g27 Racing Wheel</h4>
                <p>The G27 more closely resembles what you’ll see in your car than our other tested wheels. At just under a foot in diameter, the G27 is the smallest tested wheel, but don’t let the smaller size fool you. The stainless-steel frame is built well and is strong, sturdy, and smooth.</p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="article last-article">
              <div class="cl">&nbsp;</div>
              <div class="image"><img src="css/images/img9.jpg" alt="" /></div>
              <div class="cnt">
                <h4>XBox 360</h4>
                <p>Your favorite entertainment apps are on Xbox 360 like Netflix and HBO GO. Watch HD movies, TV shows, live events, music and sports. A month of Xbox Live Gold for advanced multiplayer, free games, and exclusive discounts. Lots of room for games and movies with a spacious 500GB hard drive. Includes Plants vs Zombies: Garden Warfare and Fable Anniversary games.</p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="cl">&nbsp;</div>
          </div>
        </div>
      </div>
    </div>
    <!-- / Content -->
    <!--  -->
    <div id="sidebar">
     
     
      <div class="block">
        <div class="block-bot">
          <div class="head">
            <div class="head-cnt">
              <h3>Top Games</h3>
            </div>
          </div>
          <div class="image-articles articles">
            <div class="cl">&nbsp;</div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"><img src="css/images/img1.jpg" alt="" /></div>
              <div class="cnt">
                <h4>Deadpool</h4>
                <p>Deadpool talks a big game but delivers a standard action experience that is the turducken of videogame parody: It is what it parodies what it is. </p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"><img src="css/images/img2.jpg" alt="" /></div>
              <div class="cnt">
                <h4>GTA v</h4>
                <p>GTA V has an abundance of such moments, big and small, that make San Andreas – the city of Los Santos and its surrounding areas – feel like a living world where anything can happen.</p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"><img src="css/images/img3.jpg" alt="" /></div>
              <div class="cnt">
                <h4>DarkSouls III</h4>
                <p>Dark Souls 3 is no exception in this regard. You begin the game as an “Unkindled”, caught in a world that is on the brink of disaster.</p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="cl">&nbsp;</div>
            <a href="List.php" class="view-all">view all</a>
            <div class="cl">&nbsp;</div>
          </div>
        </div>
      </div>
      <div class="block">
        <div class="block-bot">
          <div class="head">
            <div class="head-cnt">
              <h3>New Accessories</h3>
            </div>
          </div>
          <div class="image-articles articles">
            <div class="cl">&nbsp;</div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"> <img src="css/images/img001.jpg" alt="" /></div>
              <div class="cnt">
                <h4>RSZ Cyborg mmo7</h4>
                <p>3 Pinkie Grips / 3 Palm Rests. One Pinkie Grip / One Palm Rest featuring the same soft-touch finish as found on the body of the Cyborg M.M.O. 7. One Pinkie Grip / One Palm Rest with a rubber inlay for enhanced grip. One Pinkie Grip with a 'wing shaped' design which allows you to rest your pinkie finger during play for increased comfort. One Palm Rest that is 4mm thicker to increase the height of the mouse.</p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"><img src="css/images/img002.jpg" alt="" /></div>
              <div class="cnt">
                <h4>Cisco-Linksys WRT330N Wireless Gaming Router</h4>
                <p>Internet-sharing router and 4-port Gigabit Switch, with a built in speed and range enhanced Wireless Access Point. Optimizer for time-sensitive applications provides reduced game lag and cleaner sounding VoIP calls. MIMO technology uses multiple radios to create a robust signal that travels up to 4 time farther and reduces dead spots.</p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
            <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"><img src="css/images/img003.jpg" alt="" /></div>
              <div class="cnt">
                <h4>RSZ Razer Tiamat Gaming Headset</h4>
                <p>Over-the-ear. 16 Ohm Headset Impedance. Circumaural. Uni-directional Pattern. 50 dB Mic SNR, Closed Headset.</p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>
        
           
            <div class="cl">&nbsp;</div>
          </div>
        </div>
      </div>
      <div class="block">
        <div class="block-bot">
         
          <div class="text-articles articles">
          
            <div class="cl">&nbsp;</div>
          </div>
        </div>
      </div>
    </div>
    <!-- / Sidebar -->
    <div class="cl">&nbsp;</div>
    <!-- Footer -->
    <div id="footer">
      <div class="navs">
        <div class="navs-bot">
          <div class="cl">&nbsp;</div>
          <ul>
            <li><a href="feedback.php">feedback</a></li>
            <li><a href="login.php">download</a></li>
            <li><a href="quiz.php">quiz</a></li>
            <li><a href="siteMap.php">contact us</a></li>
            <li><a href="Aboutus.php">about us</a></li>
           
          </ul>
         
          <div class="cl">&nbsp;</div>
        </div>
      </div>
      <p class="copy">&copy; Gamer.com Designed by APP.EXE Team</p>
    </div>
    <!-- / Footer -->
  </div>
</div>
<!-- / Main -->
</div>
<!-- / Page -->
</body>
</html>