

<?php
		include '../helpers/dbconfig.php';


		$foodname = $_POST['foodname'];
		$price = $_POST['price'];
	

// inserting into database

		if (isset($_GET['menubtn'])) {

	$sql = $db -> query("INSERT INTO menu( foodname , price    ) 
			VALUES(   '$foodname' , '$price'   )");
    header('Location: dashboard.php');
}

// deleting from db

?>
