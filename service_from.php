<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "event";

	$con = mysqli_connect($host,$user,$password,$db);
	//mysqli_select_db($db);

	if(isset($_POST['email'])){
		$em= $_POST['email'];
		$pd=$_POST['password'];
		$pwd = md5($pd);

		$sql = "select * from member where Email ='$em' and Password ='$pwd'";

		$result = mysqli_query($con,$sql);
		$row = mysqli_num_rows($result);

		if($row>0){
			//echo "You have Successfully Logged in";
			 header("location:profile.php");
			exit();		}

		else
		{
			echo"You have entered incurrect password ";
			exit();
		}
	}

	mysqli_close();

?>