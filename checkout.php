<?php 
session_start();
 $connect = mysqli_connect("localhost", "root", "", "gamer_db");
require 'item.php';
// Save new orders
$sql1 = 'INSERT INTO Orders (datecreation, status, username) VALUES ("'.date('Y-m-d').'","Purches Compleat","'.$_SESSION['UserName'].'")';
mysqli_query($connect, $sql1);
 


	$rowSQL =  "SELECT MAX(Orders_ID) AS max FROM Orders" ;
	$getid = mysqli_query($connect,$rowSQL);
$row = mysqli_fetch_array($getid);
$largestNumber = $row['max'];
 
// Save order details for new orders
$cart = unserialize(serialize($_SESSION['cart']));
for($i=0; $i<count($cart);$i++) {
$sql2 = 'INSERT INTO odersdetail (Product_ID, Orders_ID, Price, Quantity) VALUES ('.$cart[$i]->Product_ID.', '.$largestNumber.', '.$cart[$i]->Price.', '.$cart[$i]->Quantity.')';
mysqli_query($connect, $sql2);

 
}
// Clear all product in cart
unset($_SESSION['cart']);
 ?>
 Thanks for buying products. Click <a href="shop_u.php">here</a> to continue purchasing products.