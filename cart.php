<head>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="menu.css">
</head>
<body>
<?php 
// Starting the session
session_start();
$connect = mysqli_connect("localhost", "root", "", "gamer_db");
require 'item.php';

if(isset($_GET['Product_ID']) && !isset($_POST['update']))  { 
	$sql = "SELECT * FROM store WHERE Product_ID=".$_GET['Product_ID'];
	$result = mysqli_query($connect, $sql);
	$product = mysqli_fetch_object($result); 
	$item = new Item();
	$item->Product_ID = $product->Product_ID;
	$item->Product_Name = $product->Product_Name;
	$item->Price = $product->Price;
    $iteminstock = $product->Quantity;
	$item->quantity = 1;
	// Check product is existing in cart
	$index = -1;

	$cart = unserialize(serialize($_SESSION['cart'])); // set $cart as an array, unserialize() converts a string into array
	for($i=0; $i<count($cart);$i++)
		if ($cart[$i]->Product_ID == $_GET['Product_ID']){
			$index = $i;
			break;
		}
		if($index == -1) 
			$_SESSION['cart'][] = $item; // $_SESSION['cart']: set $cart as session variable
		else {
			
			if (($cart[$index]->Quantity) < $iteminstock)
				 $cart[$index]->Quantity ++;
			     $_SESSION['cart'] = $cart;
		}
}
// Delete product in cart
if(isset($_GET['index']) && !isset($_POST['update'])) {
	$cart = unserialize(serialize($_SESSION['cart']));
	unset($cart[$_GET['index']]);
	$cart = array_values($cart);
	$_SESSION['cart'] = $cart;
}
// Update quantity in cart
if(isset($_POST['update'])) {
  $arrQuantity = $_POST['quantity'];
  $cart = unserialize(serialize($_SESSION['cart']));
  for($i=0; $i<count($cart);$i++) {
     $cart[$i]->Quantity = $arrQuantity[$i];
  }
  $_SESSION['cart'] = $cart;
}
?>
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
<h2> Items in your cart: </h2> 
<form method="POST">
<table id="t01">
<tr>
	<th>Option</th>
	<th>Product_ID</th>
	<th>Product_Name</th>
	<th>Price</th>
	<th>Quantity</th>
	 
	<th>Sub Total</th>
</tr>
<?php 
     $cart = unserialize(serialize($_SESSION['cart']));
 	 $s = 0;
 	 $index = 0;
 	for($i=0; $i<count($cart); $i++){
 		$s += $cart[$i]->Price * $cart[$i]->Quantity;
 ?>	
   <tr>
    	<td><a href="cart.php?index=<?php echo $index; ?>" onclick="return confirm('Are you sure?')" >Delete</a> </td>
   		<td> <?php echo $cart[$i]->Product_ID; ?> </td>
   		<td> <?php echo $cart[$i]->Product_Name; ?> </td>
   		<td> <?php echo $cart[$i]->Price; ?> </td>
        <td> <input type="number" min="1" value="<?php echo $cart[$i]->quantity; ?>" name="quantity[]"> </td>  
        <td> <?php echo $cart[$i]->Price * $cart[$i]->Quantity; ?> </td> 
   </tr>
 	<?php 
	 	$index++;
 	} ?>
 	<tr>
 		<td colspan="5" style="text-align:right; font-weight:bold">Sum 
         <input id="saveimg" type="image" src="images/save.png" name="update" alt="Save Button">
         <input type="hidden" Name="update">
 		</td>
 		<td> <?php echo $s; ?> </td>

 	</tr>
 	<tr>

 	</tr>
</table>
</form>
 		<td  colspan="3"><a style="color: white" href="shop_u.php">Continue Shopping</a></td>
 		<td  colspan="3"><a style="color: yellow" href="checkout.php">Checkout</a></td>
<?php 
if(isset($_GET["Product_ID"]) || isset($_GET["index"])){
 header('Location: cart.php');
} 
?>
</body>
 </html>
