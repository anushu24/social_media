<?php
include("connection.php");

	if(isset($_POST['register'])){

		$name = htmlentities(mysqli_real_escape_string($con,$_POST['name']));
        $username = htmlentities(mysqli_real_escape_string($con,$_POST['username']));
		$email = htmlentities(mysqli_real_escape_string($con,$_POST['email']));
		$password = htmlentities(mysqli_real_escape_string($con,$_POST['password']));
		$status = "verified";
		$posts = "no";
		$newgid = sprintf('%05d', rand(0, 999999));

		
		$check_username_query = "select username from user where email='$email'";
		$run_username = mysqli_query($con,$check_username_query);

		if(strlen($password) <9 ){
			echo"<script>alert('Password should be minimum 9 characters!')</script>";
			exit();
		}

		$check_email = "select * from user where email='$email'";
		$run_email = mysqli_query($check_email);

		$check = mysqli_num_rows($run_email);

		if($check == 1){
			echo "<script>alert('Email already exist, Please try using another email')</script>";
			echo "<script>window.open('registration.php', '_self')</script>";
			exit();
		}

		$rand = rand(1, 3); //Random number between 1 and 3

			if($rand == 1)
				$profile_pic = "head_red.png";
			else if($rand == 2)
				$profile_pic = "head_sun_flower.png";
			else if($rand == 3)
				$profile_pic = "head_turqoise.png";

		$insert = "insert into user (name,username,email,password)
		values('$name','$username','$email','$pass')";
		
		$query = mysqli_query($con, $insert);

		if($query){
			echo "<script>alert('Well Done $name, you are good to go.')</script>";
			echo "<script>window.open('signin.php', '_self')</script>";
		}
		else{
			echo "<script>alert('Registration failed, please try again!')</script>";
			echo "<script>window.open('registration.php', '_self')</script>";
		}
	}
?>