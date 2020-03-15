<?php
	$host = "localhost";
	$user = "root";
	$psd = "";
	$db = "event";

	$sql = mysqli_connect($host, $user,$psd,$db);

	if(isset($_POST['email']))
	{
		$em = $_POST['email'];
		$pwd = $_POST['password'];


		$sql1 = "select * from loginfrom where Email = '$em' and Pword = '$pwd'";

		$result = mysqli_query($sql, $sql1);

		if(mysqli_num_rows($result)){
			echo "You have Successfully Logged in";
			exit();
		}

		else
		{
			echo"You have entered incurrect password ";
			exit();
		}
	}
?>