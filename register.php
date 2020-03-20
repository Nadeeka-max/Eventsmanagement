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
		<table>
		<tr>	
		<td>	
			<label>Username</label>
		</td>
		<td>
			<input type="text" name="uname" value= "">
		</td>
		</tr>

		<tr>
		<td>
			<label>Field</label>
		</td>
		<td>
			<select name = "field">
				<option value = "" ></option>
              	<option value = "Transfrot" >
              	Transfrot</option>
               	<option value = "Halls" >Halls </option>
               	<option value = "cretering" >cretering</option>
               	<option value = "decearatio" >decearatio</option>
             </select>
         </td>
		</tr>


		<tr>
		<td>
			<label>Email</label>
		</td>
		<td>
			<input type="text" name="email" value= "">
		</td>
		
		</tr>

		<tr>
		<td>
			<label>Password</label>
		</td>
		<td>
			<input type="text" name="pword" value= "">
		</td>
		</tr>


		<tr>
		<td>
			<label>Confirm Password</label>
		</td>
		<td>
			<input type="text" name="cpword" value= "">
		</td>
		</tr>

		<tr>
		<td>
			<label>Contact Number</label>
		</td>
		<td>
			<input type="text" name="cname" value= "">
		</td>
		</tr>

		<tr>
		<td>
			<label>Address</label>
		</td>
		<td>
			<input type="text" name="add" value= "">
		</td>
		</tr>


		<tr>
		<td>
			<input type="submit" name="submit" value="submit">
		</td>
		<td>
			<input type="reset" name="reset">
		</td>
		</tr>

		</table>


		
	</form>
</body>
</html>