<?php
	session_start();

	$username = "";
	$email = "";
	$errors = array();

	$db = mysqli_connect('localhost', 'root','','event');

	

	if(isset($_POST['submit']))
	{
		$uname = mysqli_real_escape_string($db ,$_POST['uname']);
		if(empty($uname)){
			array_push($errors,"Username is required");
		}
		$field = mysqli_real_escape_string($db ,$_POST['field']);
		if(empty($field)){
			array_push($errors,"Field is required");
		}
		$email = mysqli_real_escape_string($db ,$_POST['email']);

		if(empty($email)){
			array_push($errors,"Email is required");
		}
		$pword = mysqli_real_escape_string($db ,$_POST['pword']);
		if(empty($pword)){
			array_push($errors,"Password is required");
		}
		$cpword = mysqli_real_escape_string($db ,$_POST['cpword']);
		if(empty($cpword)){
			array_push($errors,"The two password not match");
		}
		$cname = mysqli_real_escape_string($db ,$_POST['cname']);
		if(empty($cname)){
			array_push($errors,"Contact Number is required");
		}
		$add = mysqli_real_escape_string($db ,$_POST['add']);
		if(empty($add)){
			array_push($errors,"Address is required");
		}


		
		
		
		
		
		
		$user_check_query = "SELECT * FROM member WHERE Email='$email' LIMIT 1";
 		 $result = mysqli_query($db, $user_check_query);
  		$user = mysqli_fetch_assoc($result);
		/*
		if($user)
		{
			if($user['email'] === $email)
			{
				array_push($errors, "Email already exists");
			}

			if($user['pword'] === $uname)
			{
				array_push($errors, "Username already exists");
			}

			if($user['uname'] === $uname)
			{
				array_push($errors, "Username already exists");
			}
		}*/

		if(count($errors) == 0)
		{
			$pword = md5($pword);

			$query = "INSERT INTO member(Member_name,Field,Email,Password,Contact_number,Address) values('$uname','$field','$email','$pword','$cname','$add')";
			mysqli_query($db, $query);
		}
	}