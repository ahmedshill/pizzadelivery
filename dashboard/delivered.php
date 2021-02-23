
<?php
	include '../helpers/dbconfig.php';



$item_id = $_GET['info'];

$sql=$db->query("DELETE FROM finalorder where id = '$item_id' ");

echo " <script> 
		        alert('Delivered pizza !!');   
		        window.location.pathname='simplelogin/dashboard/dashboard.php';
		    </script>";

		    ?>


?>

