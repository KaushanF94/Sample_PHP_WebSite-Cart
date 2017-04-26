<?php 

session_START();
$_SESSION['LOGED'] = FALSE;
unset($_SESSION['UserName']);
header('Location: home.php');



?>