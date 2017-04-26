<?php
session_start();
$_SESSION['LOGED'] = FALSE;
?>
<html>
    <head>
  
 <meta http-equiv="refresh" content="9;url=home.php">

    </head>
	          
  
<body style="background-image: url('Image/background_generic.jpg')" ;>
   

    <center>
      
       
        
       
         <font color="Yellow" size="18" ><b>Founders Of Gamer.com</b></font>

<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="Image/Buwendra.jpg" style="width:100%">
  <img class="mySlides" src="Image/kowshan.jpg" style="width:100%">
  <img class="mySlides" src="Image/ashan.jpg" style="width:100%">
  <img class="mySlides" src="Image/Ashinka.jpg" style="width:100%">
  <img class="mySlides" src="Image/devin.jpg" style="width:100%">

  </div>
  <div>
  <label class="mySlides1"> <font color="white" size="8" ><b>Buwenda Abesuriya<br>Studying Computer Science At IIT</b></font></label>
  <label class="mySlides1"> <font color="white" size="8" ><b>Kaushan Fernando<br>Studying Software Engineering At IIT</b></font></label>
  <label class="mySlides1"> <font color="white" size="8" ><b>Ashan Dinusha<br>Studying Software Engineering At IIT</b></font></label>
  <label class="mySlides1"> <font color="white" size="8" ><b>Ashinka Madushani<br>Studying Software Engineering At IIT</b></font></label>
  <label class="mySlides1"> <font color="white" size="8" ><b>Devin De Alvis<br>Studying Software Engineering At IIT</b></font></label>

</div>




</center>
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



var myIndex1 = 0;
carousel1();

function carousel1() {
    var i;
    var x = document.getElementsByClassName("mySlides1");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex1++;
    if (myIndex1 > x.length) {myIndex1 = 1}    
    x[myIndex1-1].style.display = "block";  
    setTimeout(carousel1, 2000); // Change label every 2 seconds
}
</script>
     

  



</body>
</html>