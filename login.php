<?php 
session_start();
include 'db.php';

if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$password = md5($pass);

	if($login->loginnow($email,$password)){
		  header("Location:index.php");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Enter the email and password to logged in</h1>
<form action="" method="post">
		<table>
				<tr>
				<td>Email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Login" name="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>