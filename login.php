<!DOCTYPE html>
<html>
<head>
	<title>Pizzabites login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
	 rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
	 crossorigin="anonymous">
	 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      	<form class="border shadow p-3 rounded"
      	      action="LoginCheck.php" 
      	      method="post" 
      	      style="width: 450px;">
				<h3 class="text-center p-1">PIZZABITES</h3>
               <h5 class="text-center p-1">LOGIN</h5>

			   
      	     <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

		
		  <div class="mb-3">
		    <label class="form-label">Email</label>
		    <input type="email" 
		           class="form-control" 
				   placeholder="Email"
		           name="email">
		  </div>
		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" 
		           name="pass" 
		           class="form-control" 
				   placeholder="password">
		  </div>
		  <div class="mb-1">
		    <label class="form-label">User Type</label>
		  </div>
		  <select class="form-select mb-3"
		  name="UserType">
			  <option selected value="General User">General User</option>
			  <option value="admin">Admin</option>
		  </select>
		 
		 <center> <br><button type="submit" 
		 class="btn btn-primary" >LOGIN</button> </center>
	      <p class="login-register-text" align="center"><br>Don't have an account? <a href="signup.php">
			  <br>Register Here</a></p>
			  <p align="center"><a href="index.php">Back to Home</a></p>
		</form>
      </div>
</body>
</html>
