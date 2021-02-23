<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<section>
		<h2>Signup</h2>
		
		<div class="loginsection">
			<form action="actionpage.php?signup" method="POST">			  
			    <input type="text" class="form-control" placeholder="Username" name="username">
			    <select name="type">
			    	<option value="admin">admin</option>
			    	<option value="user">user</option>
			    </select>
			    <input type="password" class="form-control" placeholder="Password" name="password">
			  <button type="submit" class="btn btn-primary">Submit</button>
		</form> 
		</div>
			
	</section>

</body>
</html>