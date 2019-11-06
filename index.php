
<?php 
session_start();
include 'db.php';
if(!$_SESSION["sess_name"]){
	header('location:login.php');
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>
	<?php
		if ($_SESSION["sess_name"]) { ?>
			<h1>You are successfully logged in</h1>
			<h2><a href="logout.php"> logout</a></h2>
		<?php }	?>
</body>
</html>