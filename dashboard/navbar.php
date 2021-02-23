<!DOCTYPE html>
<html lang="en">
<head>
  <title>backery shop </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>


   <?php 

     //session unavuta hapa ndio ijulikane ni which user since kwa session ume enable hapo
    $current_user = $_SESSION['SBUser'];
    $userdetails = $db->query("SELECT * FROM users WHERE id = '$current_user' ");
    $user_info = mysqli_fetch_assoc($userdetails);
     ?> 

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <?php
  $usertype = $user_info['type'];
    if ($usertype== "admin") { ?>

      <a class="navbar-brand" href="#">admin panel</a>
      <?php
      
    }else{ ?>

    <a class="navbar-brand" href="#">user panel</a>      
<?php
    }
  ?>
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">home</a>
      </li>
     
      <?php 
       if ($usertype== "user") { ?>


       <li class="nav-item">
        <a class="nav-link" href="final_order.php">final order</a>
      </li>

    <?php } ?>
      
    </ul>
  </div> 
  
         <?php
  
    if ($usertype== "admin") { ?>

        <a class="nav-link" href="cusorders.php">customer orders</a>
      <?php } else { ?>
       
      
        <a class="nav-link" href="cart.php">cart</a>
         <?php
      }
      ?>
  <a class="nav-link" href="#"><?php echo $user_info['username'];   ?></a>
    <li class="nav-item ml-auto">
      <a href="../index.php">Logout</a>   
    </li>
</nav>
<br>

<!-- <div class="container">
  <h3>Collapsible Navbar</h3>
  <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).</p>
  <p>Only when the button is clicked, the navigation bar will be displayed.</p>
  <p>Tip: You can also remove the .navbar-expand-md class to ALWAYS hide navbar links and display the toggler button.</p>
</div> -->

</body>
</html>

