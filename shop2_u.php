<?php
session_start();

if($_SESSION['LOGED'] == true)
{
     
}else{
   header('Location: home.php');
}
?>

<?php
 $connect = mysqli_connect("localhost", "root", "", "gamer_db");
 $result = mysqli_query($connect, 'select * from store');  
?>
<Html>
<head><title>Shop</title>
 <link rel="stylesheet" type="text/css" href="menu.css"
</head>

<body style="background-image: url('Image/page_bg.jpg')" ;>
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


        <div align="center" style="background-image :url('Image/gamer1.jpg');width:890px;height:242px;margin-left:245px;">
        </div>
        <div align="center" class="mainbox" style="background-image :url('Image/bgblack.jpg');">
        <ul id="H2">
        	<li id="H1"><a id="H" href="shop_u.php">Games</a></li>
        	<li id="H1"><a id="H" href="shop1_u.php">Accasories</a></li>
        	<li id="H1"><a id="H" href="shop2_u.php">Consoles</a></li>
        	</ul>
          <h4 style="color: green">Click On the Item to Add to Cart</h4>
          <?php
           while($store = mysqli_fetch_object($result)) { 
            if($store->Product_ID > 18 ){
            ?>
            <p><br/></p>
                <a id="H1" href="cart.php?Product_ID=<?php echo $store->Product_ID; ?>"><div style="float: left;" class="shopitem" >
                            <div class="shpimg">
                    		    <img <?php echo $store->Image_Link ?> >
                            <div style="float:right;" class="shopcontent">                   
                            <p style="color: white;"><?php echo $store->Product_Name ?></p>
                            <div style="float:right;" >                             
                            <p style="color: white;">Rs: <?php echo $store->Price ?>.00</p>
        		          </div>
                          </div>
                          </div>
                      </div></a>
                      <?php } } ?>

        </div>




</body>