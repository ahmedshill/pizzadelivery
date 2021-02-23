<!DOCTYPE html>
<html>
<head>
	<title></title>

 <link rel="stylesheet" href="../css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.min.css">
 <script type="text/javascript" src="bootstrap4/js/bootstrap.bundle.min.js.map"></script>
 <script type="text/javascript" src="bootstrap4/js/bootstrap.min.js.map"></script>

</head>
<?php

include '../helpers/dbconfig.php';
include 'navbar.php';

  ?>

<body>
	<?php 



$item_id = $_GET['info'];
$sql2 = $db-> query("SELECT * FROM menu where id = '$item_id'");
$item_details = mysqli_fetch_assoc($sql2);


	?>
	<div>
		<center>
			<h3>Order details</h3>
			<h4>Food Name : <font style="color: red"><?php echo $item_details['foodname']; ?></font></h4>
			<h4>Price : <font style="color: red"><?php echo $item_details['price']; ?></font></h4>
			
			
			<form action="orders.php" method="POST">
				<input type="text" name="userid" value="<?php echo $user_info['id']; ?>" style="visibility: hidden">
				<input type="text" name="foodname" value="<?php echo $item_details['foodname']; ?>" style="visibility: hidden">
				<input type="text" name="price" value="<?php echo $item_details['price']; ?>" style="visibility: hidden">
				<input type="number" name="quantity" class="form-control" style="width: 20%" placeholder="Quantity">

				<button type="submit" class="btn btn-success" style="margin-top: 1%">Place order</button>
			</form>
		</center>
	</div>



</body>
</html>