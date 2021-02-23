<?php
include '../helpers/dbconfig.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>cart</title>
</head>
<body>
	<?php include 'navbar.php'; ?>
  <?php
  $userid= $user_info['id'];
      $sql=$db->query("SELECT * FROM cart where user_id = '$userid' ");
      $numofrows = mysqli_num_rows($sql);
      
      
?>
<center>
  <h4>Cart page</h4>
  <?php 

  if ($numofrows == 0 ) {
  echo "<h4 style='margin-top:5%; color:grey'>NO ITEMS</h4> <a href='dashboard.php' > Add items </a>";
  }else{?>

  <table class="table" style="width: 60%" >
  <tr>
  
      <th>pizaa</th>
      <th>price</th>
      <th>quantity</th>
      <th>total</th>
      <th>Delete</th>
     
  </tr>
     


<?php while ($item = mysqli_fetch_assoc($sql)):  ;?>
<tr>
      <td><?= $item['foodname'] ?></td>
      <td><?= $item['price'] ?></td>
      <td><?= $item['ordered_quantity']  ?></td>
      <td><?php echo $item['price']*$item['ordered_quantity']; ?></td>
      <td><a href="deletecart.php?info=<?= $item['id'] ?> "><button class="btn btn-danger">Delete</button></a></td>





</tr>


<?php endwhile; ?>
</table>



<form action="cart_complete.php" method="POST">
  
        <input type="text" name="location" class="form-control" style="width: 20%;margin-top: 1%" placeholder="Delivery Location" required>
        <input type="number" name="phone" class="form-control" style="width: 20%;margin-top: 1%" placeholder="Phone no" required>
       <button type="submit" class="btn btn-success" style="margin-top: 1%">Complete order</button>
</form>

<?php
  }

  ?>
	
</center>

</body>
</html>