
<?php
include '../helpers/dbconfig.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>final order</title>
</head>
<body>
<?php include 'navbar.php'; ?>
<center>
<h4>This is your complete order</h4>
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
	$userid= $user_info['id'];
      $sql=$db->query("SELECT * FROM finalorder where user_id = '$userid' ");
      
      
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

      <td><button class="btn-secondary"> <a href="delete.php?info=<?= $item['id'] ?>" style="color: white"> Delete</button> </a></td>
<?php } ?>


      

</tr>


<?php endwhile; ?>
</table>
</center>
</body>
</html>