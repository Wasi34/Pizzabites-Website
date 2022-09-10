<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['name']) && isset($_POST['email'])
    && isset($_POST['pass']) && isset($_POST['re_password']) && isset($_POST['phoneNo']) && isset($_POST['UserType'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$pass = validate($_POST['pass']);
	$re_pass = validate($_POST['re_password']);
	$email = validate($_POST['email']);
	$UserType= ($_POST['UserType']);
	$phoneNo= validate($_POST['phoneNo']);

	//$user_data = 'name='. $name. '&pass='. $pass;


	if (empty($name)) {
		header("Location: signupAdmin.php?error=Name is required");
	    exit();
	}else if(empty($email)){
        header("Location: signupAdmin.php?error=Email is required");
	    exit();
	}
	else if(empty($pass)){
        header("Location: signupAdmin.php?error=Password is required");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signupAdmin.php?error=Re Password is required");
	    exit();
	}

	else if(empty($phoneNo)){
        header("Location: signupAdmin.php?error=Phone number is required");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: signupAdmin.php?error=The confirmation password is not matched");
	    exit();
	}

	else{

		// hashing the password
        //$pass = md5($pass);

	    $sql = "SELECT * FROM pizabites_signup WHERE email='$email'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signupAdmin.php?error=The email is already registered here, try another.&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO pizabites_signup (UserType,name,email, pass,phoneNo ) VALUES('$UserType','$name', '$email','$pass','$phoneNo')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signupAdmin.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signupAdmin.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signupAdmin.php");
	exit();
}