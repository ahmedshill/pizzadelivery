<?php 

include '../helpers/dbconfig.php';

$item_id = $_GET['info'];

$sql=$db->query("DELETE FROM cart where id = '$item_id' ");

echo " <script>
		        alert('Deleted from cart !');   
		        window.location.pathname='simplelogin/dashboard/cart.php';
		    </script>";

		    ?>


?>