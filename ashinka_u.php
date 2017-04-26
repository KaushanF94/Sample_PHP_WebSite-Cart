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
<link type="text/css" rel="stylesheet" href="menu.css"/>
<title></title>
</head>
<body style="background-image: url('Image/background_generic.jpg')";>
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
               
       
    
                        <center><h1><font color="Yellow">CV of Ashinka Madushani</font></h1></center>
            
       <img src="Image/Ashinka.jpg" >
            <table style="color:white; border-collapse:separate; 
border-spacing:5em;">

<font color="white"><div id="header"></div>
<p id="name">Email : <a href="mailto:ashinka.m@gmail.com" target="_blank"><p id="email">ashinka.m@gmail.com</p></a></p>
         
    
     <div class="left">
     </div>
     <div class="right">
            <h3>CV Highlights</h3>
            <p>
            <ul>
                <li>Currently reading Web Application Engineering in University of Westminster.</li>
                <li>Learnt basic JavaScript, HTML, CSS from UOW blackboard studies.</li>
                <li>Good Communication Skills, Presentation Skills, and a very good team worker.</li></ul>
            </p>
            <h3>Professional Experience</h3>
            <h4 id="company-name">Techno crats Software Pvt Ltd</h4>
            <p id="job-title"><strong>Support Engineer (Technical Support)</strong></p>
            <p id="job-responsibilities">Job Responsbilities</p>
            <p>
            <ul>
                <li>Answer customer queries over email.</li>
                <li>Interact with our team to get software issues and bugs resolved</li>
                <li>Occasionally interact with customers over social media.</li>
            </ul>
            </p>
            <br>
            <center><h3>Educational Qualifications</h3>
            <br>
          <table style="color:white; border-collapse:separate>
                <tr id="heading">
                    <td>Qualification</td>
                    <td>Board</td>
                    <td>Percentage / Grades</td>
                    <td>Year</td>
                </tr>
               
                <tr>
                    <td>Certificate level (Computer Science Stream)</td>
                    <td>Computer Faculty India</td>
                    <td>75.00%</td>
                    <td>2008</td>
                </tr>
                <tr>
                    <td>Diploma in Computer Applications</td>
                    <td>NIE (National Institute Of Engineering), Colombo, Sri Lanka</td>
                    <td>A Grade</td>
                    <td>2009</td>
                </tr>
                <tr>
                    <td>B.Sc. (Hons) - Applied Maths</td>
                    <td>Oxford University</td>
                    <td>First Class Honours (Special computer Mathematics)</td>
                    <td>2012</td>
                </tr>
               
            </table></center>
            <h3>Independent Courses</h3>
            <p>
            <ul>
                <li>
                <span id="course-name">Web development with HTML & CSS </span> – w3school..com</li>
                <li>
                <span id="course-name">Software development principales for biginners </span> - Blackboard.com</li>
                <li>
                <span id="course-name">Introduction to Computer Science. </span> – University of Westminster.</li>
                <li>
                <span id="course-name">Introduction to Finance & Accounts</span> - National Bussiness Institute, Sri Lanka.</li>
            </ul>
            <h3>Technical Skills</h3>
            <p>
            <ul>
                <li>
                <span id="course-name">Operating Systems:</span> DOS, Windows 98, Windows 2000, Windows XP, Windows NT, Windows Server 2003, Windows Vista, Windows 7, Macintosh Computers (OS X), Linux (Ubuntu, Fedora), Windows 8.1, Windows 10.</li>
                <li>
                <span id="course-name">Application Software:</span> Office 97-2013; Office XP, Excel 2003/2007 for Financial Modelling spreadsheets.</li>
                <li>
                <span id="course-name">Programming Skills:</span>HTML, CSS, JavaScript </li></ul>
            </p>
            <h3>Certifications / Awards:</h3>
            <p>
            <ul>
                <li>Highest score in Scientific Computing Certificate exam – August 2014, amongst full time international students at UOW, London.</li>
                <li>Interviewed by Wso2 for “international GSOC in Sri Lanka”, interview published in March 2012. </li>
            </ul>
            </p>
            <h3>Personal Information:</h3>
            <p>
            <ul>
                <li>
                A hard working person, based rules and regulations of work.
                <li>
                <span id="course-name">Languages Known:</span>English, Spain, French.</li>
                <li>
                <span id="course-name">Hobbies:</span>I like to reade computer science & IT related books, playing Football, swimming, listening music, self-learning through Interenet.</li> </ul>
            </p>
            <h3>Other Information</h3>
            <p>
            <ul>
                <li>
                <span id="course-name">Expected Salary:</span>As per company standards</li>
                <li>
                <span id="course-name">Area of Interest:</span>Software Development, Programming, Coding, App Development, Technical Support, Client service, Investment Banking, Business Analysis</li>
                <li>
                <span id="course-name">Joining Date:</span>Immediate</li></ul>
            </p>
            <h3>Declaration</h3>
            <p>
            I hereby declare that the details furnished above are true and correct to the best of my knowledge and belief.</p>
     </div>
<hr>
</font>
          <footer><a href="ashinka_u.php" ><img src="Image/top2.png" align="right"></a></footer>
    </body>
</html>