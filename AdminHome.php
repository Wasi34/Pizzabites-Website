<?php 
session_start();

if (isset($_SESSION['email']) && isset($_SESSION['name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
<div class="content">
     <h1>Hello Admin, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Logout</a><br>
    <br> <a href="signupAdmin.php" class="btn">Registration</a>
     </div>
     </div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>