<?php
session_start();

if($_SESSION['LOGED'] == true)
{
     
}else{
   header('Location: quizTest.php');
}
?>
<html>
	<head>	
	</head>
    <link rel="stylesheet" type="text/css" href="menu.css" >
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

<font color="#FFFFFF"
    <center>
    
        <div style="background-image :url('Image/best gamer.jpg');width:890px;height:242px;margin-left:246px">
        </div>

        <div style="background-image :url('background_generic.jpg');width:890px;height:2500px;margin-left:246px">
            <br />    
                  	
					
						<div id="timer" style="height:50px;margin-left:75%;border:double;">
        </div>
        
		<center><font color="#FF9900"><h1>Quiz For The Gamers</h1></font></center>
		
        
        <div style="display:inline;">
        	<div align="justify">
            1. What was the first commercially successful video game?<br/><br/>
            
            <input type="radio" value="Asteroids." name="Q1"/>Asteroids.<br/>
            <input type="radio" value="PacMan." name="Q1" />PacMan.<br/>
            <input type="radio" value="Pong." name="Q1" class="cAns"/>Pong.<br/>
            <input type="radio" value="Super Mario Bros." name="Q1"/>Super Mario Bros.<br/>
			<div class="correct answer"><font color="#FF6600"><h3>Correct answer is Pong.</h3></font></div>
            <br/><br/>
        
            2. What was the first home video game console?<br/><br/>
        
            <input type="radio" value="Atari 2600." name="Q2"/>Atari 2600.<br/>
            <input type="radio" value="Coleco Vision." name="Q2"/>Coleco Vision.<br/>
            <input type="radio" value="Odyssey." name="Q2" class="cAns"/>Odyssey.<br/>
            <input type="radio" value="Playstation." name="Q2"/>Playstation.<br/>
            <div class="correct answer"><font color="#FF6600"><h3>Correct answer is Odyssey.</h3></font></div>
			<br/><br/>
        
            3.In the classic game Pac-Man if you wanted to eat a ghost for bonus point you first have to eat waht?<br/><br/>
        
            <input type="radio" value="Power-Pellet." name="Q3" class="cAns"/>Power-Pellet.<br/>
            <input type="radio" value="Fruit." name="Q3" />Fruit.<br/>
            <input type="radio" value="Pac-Dot." name="Q3"/>Pac-Dot.<br/>
            <input type="radio" value="A power up Mushroom." name="Q3"/>A power up Mushroom.<br/>
            <div class="correct answer"><font color="#FF6600"><h3>Correct answer is Power-Pellet.</h3></font></div>
			<br/><br/>
            
			4.What is the object of the Game Missile Command?<br/><br/>
        
            <input type="radio" value="Shoot down incoming aircraft." name="Q4"/>Shoot down incoming aircraft.<br/>
            <input type="radio" value="Destroy the enemy's cities." name="Q4"/>Destroy the enemy's cities.<br/>
            <input type="radio" value="Save the princess." name="Q4"/>Save the princess.<br/>
            <input type="radio" value="Defend the cities." name="Q4" class="cAns"/>Defend the cities.<br/>
            <div class="correct answer"><font color="#FF6600"><h3>Correct answer is Defend the cities.</h3></font></div>
			<br/><br/>
			
			5.Your are at a busy arcade and someone is playing the game you want to play. In order to be the next to play you...?<br/><br/>
        
            <input type="radio" value="Wait for the person to get a game over and tell them it's your turn."
            name="Q5"/>Wait for the person to get a game over and tell them it's your turn. <br/>
            <input type="radio" value="Place your quarter or token on the age of the screen." name="Q5" class="cAns"/>Place your quarter or 															 			token on the age of the screen.<br/>
            <input type="radio" value="Shove them out of the way." name="Q5"/>Shove them out of the way.<br/>
            <input type="radio" value="Interrupt the person playing and tell them you've got the next game." name="Q5"/>Interrupt the person   			playing and tell them you've got the next game.<br/>
			<div class="correct answer"><font color="#FF6600"><h3>Correct answer is Place your quarter or token on the age of the screen.</h3></font></div>
            <br/><br/>
			
			6.The original version of the game PETRIS what is the maximum number of lines that can be eliminated at one time?<br/><br/>
        
            <input type="radio" value="5" name="Q6"/>5<br/>
            <input type="radio" value="4" name="Q6" class="cAns"/>4<br/>
            <input type="radio" value="3" name="Q6"/>3<br/>
            <input type="radio" value="2" name="Q6"/>2<br/>
			<div class="correct answer"><font color="#FF6600"><h3>Correct answer is 4.</h3></font></div>
            <br/><br/>
			
			7.Before its north American release this famous game was featured in the Universal Studios Film "The Wizard"?<br/><br/>
        
            <input type="radio" value="Ninja Gaiden." name="Q7"/>Ninja Gaiden.<br/>
            <input type="radio" value="Double Dragon." name="Q7"/>Double Dragon.<br/>
            <input type="radio" value="Freddy Savage." name="Q7"/>Freddy Savage.<br/>
            <input type="radio" value="Super Mario Bros 3." name="Q7" class="cAns"/>Super Mario Bros 3.<br/>
            <div class="correct answer"><font color="#FF6600"><h3>Correct answer is Super Mario Bros 3.</h3></font></div>
			<br/><br/>
			
			
			8.The long runnig series Ultima falls into which gaming gener?<br/><br/>
        
            <input type="radio" value="MMO." name="Q8"/>MMO.<br/>
            <input type="radio" value="Strategy." name="Q8"/>Strategy.<br/>
            <input type="radio" value="RPG." name="Q8" class="cAns"/>RPG.<br/>
            <input type="radio" value="Adventure." name="Q8"/>Adventure.<br/>
            <div class="correct answer"><font color="#FF6600"><h3>Correct answer is RPG.</h3></font></div><br/>
			<br/><br/>
			
			9.Dragon's Lair released in arcades in the 80's could best be described as...?<br/><br/>
        
            <input type="radio" value="An action adventure game." name="Q9"/>An action adventure game.<br/>
            <input type="radio" value="A hack'n slash game." name="Q6"/>A hack'n slash game.<br/>
            <input type="radio" value="A fantasy game." name="Q9"/>A fantasy game.<br/>
            <input type="radio" value="An interactive movie." name="Q9" class="cAns"/>An interactive movie.<br/>
			<div class="correct answer"><font color="#FF6600"><h3>Correct answer is An interactive movie.</h3></font></div>
			<br/><br/>
			
			10.What does MAME mean to you?<br/><br/>
        
            <input type="radio" value="Arcade games." name="Q10" class="cAns"/>Arcade games.<br/>
            <input type="radio" value="A gamin convention." name="Q10"/>A gamin convention.<br/>
            <input type="radio" value="A text base game variant." name="Q10"/>A text base game variant.<br/>
            <input type="radio" value="Tearing opponents limb from limb." name="Q10"/>Tearing opponents limb from limb.<br/>
            <div class="correct answer"><font color="#FF6600"><h3>Correct answer is Arcade games.</h3></font></div>
			
			
            <button style="margin-left:50%;" onClick="markCalc()">Submit</button>
			<br/><br/>
            </div>
        </div>
        </div>
        </font>
        </center>
					
					

        
        <script type="text/javascript">
            var mins= 2;
            var secs = mins*15;
        var quiztimmer;
            var element = document.getElementById("timer");
            
			function function_load(){
				x = document.getElementsByClassName("correct answer");
				for (i=0; i<10;i++){
					x[i].style.visibility = "hidden";
				}				
				startTimer();
			}
			window.onload = function_load;
			
			function startTimer(){
				quiztimmer = setInterval(function () {
		  
					element.innerHTML = secs + " seconds remaining" ;
					if(secs==0){
						var radios = document.getElementsByTagName("input");
						
						for(var i=0; i<radios.length;i++){
							radios[i].disabled=true;   
						}
						element.innerHTML="Time's up - Submit now";
						return;
					}
					secs--;
	 
				}, 1000);
			}
            
            function endTimer(){
				 clearInterval(quiztimmer);
			}
            function markCalc(){
				endTimer();
                var marks = 0;
                
				x = document.getElementsByClassName("correct answer");
				for (i=0; i<10;i++){
					x[i].style.visibility = "visible";
				}
				
                var ele = document.getElementsByClassName("cAns");
				
				for(var x=0;x<ele.length;x++){
					if (ele[x].checked){
						marks +=2;
					} else{
						marks--;
					}
				}
                
                document.getElementById("marks").innerHTML ="<br/><br/>Marks : "+marks;
                
				
            }
            
        </script>
    </body>
</html>