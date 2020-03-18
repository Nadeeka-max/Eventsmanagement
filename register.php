<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration sysytem PHP and MySQL</title>

</head>
<body>
	<div>
		<h2>Register</h2>
	</div>

	<form method = "POST" action="register.php">
		<?php include('errors.php');?>

		<div>
			<label>Username</label>
			<input type="text" name="uname" value= "<?php echo $uname; ?>">
		</div>


		<div>
			<label>Field</label>
			<select>
				<option value = "1" name = "field"></option>
              	<option value = "2" name = "field">Transfrot</option>
               	<option value = "3" name = "field">Halls </option>
               	<option value = "4" name = "field">cretering</option>
               	<option value = "5" name = "field">decearatio</option>
             </select>
		</div>


		<div>
			<label>Email</label>
			<input type="text" name="email" value= "<?php echo $email; ?>">
		</div>


		<div>
			<label>Password</label>
			<input type="text" name="pword" value= "<?php echo $pword; ?>">
		</div>


		<div>
			<label>Confirm Password</label>
			<input type="text" name="cpword" value= "<?php echo $cpword; ?>">
		</div>


		<div>
			<label>Contact Number</label>
			<input type="text" name="cname" value= "<?php echo $cname; ?>">
		</div>



		<div>
			<label>Address</label>
			<input type="text" name="add" value= "<?php echo $add; ?>">
		</div>


		<div>
			<input type="submit" name="submit">
			<input type="reset" name="reset">
		</div>




		
	</form>
</body>
</html>