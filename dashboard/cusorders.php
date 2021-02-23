
<?php
	include '../helpers/dbconfig.php';


?>

<!DOCTYPE html>
<html>
<head>
	<title>customer orders</title>
</head>
<body>

	<?php
		include 'navbar.php';

	?>
<center>
  <h3> The orders from customers </h3>
	<table class="table" style="width: 70%">
  <tr>
  
      <th>pizaa</th>
      <th>price</th>
      <th>quantity</th>
      <th>location</th>
      <th>phone number</th>
      <th>total</th>
      <?php 
      $usertype = $user_info['type'];
      if ($usertype == "admin") { ?>
         <th>Action</th>
     <?php } ?>
     
     
  </tr>
     

<?php
      $sql=$db->query("SELECT * FROM finalorder");
      
      
?>
<?php while ($item = mysqli_fetch_assoc($sql)):  ;?>
<tr>
      <td><?= $item['foodname'] ?></td>
      <td><?= $item['price'] ?></td>
      <td><?= $item['quantity']  ?></td>
      <td><?= $item['location'] ?></td>
      <td><?= $item['phoneno'] ?></td>
      <td><?php echo $item['price']*$item['quantity']; ?></td>
       <?php
  
    if ($usertype== "admin") {
?>

      <td><button class="btn-danger"> <a href="delivered.php?info=<?= $item['id'] ?>" style="color: white"> Delivered</button> </a></td>
<?php } ?>
</tr>
<?php endwhile; ?>
</table>
</center>
</body>
</html>