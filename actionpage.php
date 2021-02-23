<?php

include 'helpers/dbconfig.php';

$username = $_POST['username'];
$password = $_POST['password'];
$type = $_POST['type'];


/*Sign up back end part */
if (isset($_GET['signup'])) {

	$sql = $db -> query("INSERT INTO users( username , type ,  password   ) 
			VALUES(   '$username' , '$type' ,'$password'  )");
    header('Location: index.php');
}


/*login part back end*/
if (isset($_GET['login'])) {
		$user = $db->query("SELECT * FROM users WHERE username = '$username' AND password = '$password' ");
		$count = mysqli_num_rows($user);

		if ($count>0) {
		    $user_id = mysqli_fetch_assoc($user);
		    Login($user_id['id']);
		}
		else{
		    ?>
		    <script>
		        alert('Invalid Username or Password . Try again !');   
		        window.location.pathname="simplelogin/index.php";
		    </script>
<?php
}

}
