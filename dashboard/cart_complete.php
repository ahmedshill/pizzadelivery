<?php

include '../helpers/dbconfig.php';
include 'navbar.php';

$location = $_POST['location'];
$phone = $_POST['phone'];

$user_id = $user_info['id'];

$sql = $db -> query("SELECT * FROM cart WHERE user_id = '$user_id' ");

while ($cartitem = mysqli_fetch_assoc($sql)){
	$foodname = $cartitem['foodname'];
	$price = $cartitem['price'];
	$quantity = $cartitem['ordered_quantity'];
	$sql1 = $db -> query("INSERT INTO finalorder( user_id , foodname , price , quantity , location, phoneno )
		VALUES ('$user_id', '$foodname' , '$price', '$quantity','$location' , '$phone')");
}
$sql2 = $db-> query("DELETE FROM cart WHERE user_id = '$user_id' ");

echo " <script>
		        alert('Successfully ordered !');   
		        window.location.pathname='simplelogin/dashboard/final_order.php';
		    </script>";





?>