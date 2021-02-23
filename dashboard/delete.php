<?php

include '../helpers/dbconfig.php';

$item_id = $_GET['info'];

$sql=$db->query("DELETE FROM menu where id = '$item_id' ");

echo " <script>
		        alert('pizza menu deleted successfully !');   
		        window.location.pathname='simplelogin/dashboard/dashboard.php';
		    </script>";

		    ?>
