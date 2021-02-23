<?php

include '../helpers/dbconfig.php';

$userid = $_POST['userid'];
$foodname = $_POST['foodname'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];






$sql = $db -> query("INSERT INTO cart(user_id, foodname ,price , ordered_quantity )
			VALUES('$userid', '$foodname' , '$price', '$quantity' )");


echo " <script>
		        alert('Successfully added to cart !');   
		        window.location.pathname='simplelogin/dashboard/cart.php';
		    </script>";

		    ?>
