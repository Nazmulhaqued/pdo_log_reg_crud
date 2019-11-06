<?php 
include 'db.php';

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$password = md5($pass);

	if($login->register($name,$email,$password)){
		// header("Location:register.php?msz");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<h1>Register New User Here</h1>
	<form action="" method="post">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td></tr>
				<tr>
				<td>Email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Register" name="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>