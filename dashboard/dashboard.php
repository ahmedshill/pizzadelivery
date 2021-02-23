<?php
include '../helpers/dbconfig.php';

  $current_user = $_SESSION['SBUser'];
    $userdetails = $db->query("SELECT * FROM users WHERE id = '$current_user' ");
    $user_info = mysqli_fetch_assoc($userdetails);

?>

<!DOCTYPE html>
<html>
<head>
  <title>menu</title>

 <link rel="stylesheet" href="../css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.min.css">
 <script type="text/javascript" src="bootstrap4/js/bootstrap.bundle.min.js.map"></script>
 <script type="text/javascript" src="bootstrap4/js/bootstrap.min.js.map"></script>

<style>
  
</style>





</head>
<body>

  <?php


include 'navbar.php';

  ?>

 <!-- Trigger the modal with a button --><center>

  <?php
  $usertype = $user_info['type'];
    if ($usertype== "admin") {
?>

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add pizza menu</button>
<?php 
}
 ?>
</center>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Add pizza</h4>
      </div>
      <div class="modal-body">

        <form action="code.php?menubtn" method="POST">


            <div class="modal-body">
      
                <div class="form-group">
                  <label>Foodname</label>
                    <input type="text"  name ="foodname" class="form-control" placeholder="Enter Food Name">
                  </div>
                  <div class="form-group ">
                  <label>Price</label>
                    <input type="number"  name ="price" class="form-control" placeholder="Enter Price of food">
                  </div>
                 
                  
                 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="menubtn" class="btn btn-primary">Save </button>
      </div>
</form>
       <!--  <p>Some text in the modal.</p> -->
      </div>
    
    </div>

  </div>
</div>
<center>
  

<table class="table" style="margin-top: 2%; width: 50%">
  <tr>
    
      <th>Pizaa</th>
      <th>Price</th>
      <th>Action</th>
  </tr>
     

<?php
      $sql=$db->query("SELECT * FROM menu");
      
?>
<?php while ($item = mysqli_fetch_assoc($sql)): ?>
<tr>
      
      <td><?= $item['foodname'] ?></td>
      <td><?= $item['price'] ?></td>
      <?php
  $usertype = $user_info['type'];
    if ($usertype== "admin") {
?>

      <td><button class="btn btn-info"> <a href="delete.php?info=<?= $item['id'] ?>" style="color: white; text-decoration: none"> Delete</button> </a></td>
<?php }

else { ?>
    <td><button class="btn btn-info"> <a href="orders_quantity.php?info=<?= $item['id'] ?>" style="color: white;text-decoration: none"> Order</button> </a></td>  
 <?php } ?>

</tr>
<?php endwhile; ?>
</table>
</center>
</body>
</html>