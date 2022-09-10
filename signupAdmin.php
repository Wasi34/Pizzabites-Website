<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
	 rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
	 crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
     <form action="signupAdmin-check.php" 
     class="border shadow p-3 rounded"
     method="post"
     style="width: 450px;">
    <h3 class="text-center p-1">PIZZABITES</h3>
    <h5 class="text-center p-1">ADMINS' SIGN UP</h5>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
          
		    <label class="form-label">User Type</label>
		
		  <select class="form-select mb-3"
            name="UserType">
			  <option selected value="General User">General User</option>
              <option value="Admin">Admin</option>
			
		  </select>
           
		    <label class="form-label">Name</label>
             
		 
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
               class="form-control"
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
               class="form-control"
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>
         
         
          <label  class="form-label">Email</label>
          
          <?php if (isset($_GET['email'])) { ?>
               <input type="email" 
                      name="email" 
                      placeholder="Email"
                      class="form-control" 
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="email" 
               class="form-control"
                      name="email" 
                     
                      placeholder="Email"><br>
          <?php }?>
          
          
     	<label class="form-label">Password</label>
          
     	<input type="password" 
                 name="pass" 
                 class="form-control" 
                 placeholder="Password"><br>
                
                
          <label class="form-label">Re Password</label>
        
          <input type="password" 
                 name="re_password" 
                 class="form-control" 
                 placeholder="Re_Password"><br>
                

                
          <label  class="form-label">Phone Number</label>
         
          <?php if (isset($_GET['phoneNo'])) { ?>
               <input type="number" 
                      name="phoneNo" 
                      class="form-control" 
                      placeholder="Phone Number"
                      value="<?php echo $_GET['phoneNo']; ?>"><br>
          <?php }else{ ?>
               <input type="number" 
                      name="phoneNo" 
                      class="form-control" 
                      placeholder="Phone Number"><br>
          <?php }?>
          

     	<center> <button type="submit"class="btn btn-primary">Sign Up</button></center> 
       
          <p class="login-register-text"align="center"><a href="login.php">
			  <br>Back to Login</a></p>
              <p class="login-register-text"align="center"><a href="admin/index.php">Back to Admin Page</a></p>
          
     </form>
     </div>
         
</body>
</html>