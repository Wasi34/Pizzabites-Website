<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['pass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	
	$UserType= ($_POST['UserType']);
	$email = validate($_POST['email']);
	$pass = validate($_POST['pass']);

	if (empty($email)) {
		header("Location: login.php?error=Email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
       // $pass = md5($pass);

        
		$sql = "SELECT * FROM pizabites_signup WHERE pass='$pass' AND email='$email' AND  UserType='$UserType'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ( $row['UserType'] === "General User" && $row['email'] === $email && $row['pass'] === $pass) {
            	session_start();
				$_SESSION['email'] = $row['email'];
            	$_SESSION['name'] = $row['name'];
				$_SESSION['id'] = $row['id'];
				$_SESSION['loggedin'] = true;
            	header("Location: UserHome.php");
		        exit();
            }else  if ( $row['UserType'] === "Admin" && $row['email'] === $email && $row['pass'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['name'] = $row['name'];
				$_SESSION['id'] = $row['id'];
				$_SESSION['adminloggedin'] = true;
            	header("Location: admin/index.php?loginsuccess=true");
		        exit();
            }else {
				header("Location: login.php?error=Incorrect email or password or user type");
		        exit();
			}
		}else{
			header("Location: login.php?error=Incorrect email or password or user type");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}