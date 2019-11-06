<?php 

class login
{
	private $database;
	function __construct($connect)
	{
		$this->database = $connect;
	}
	public function register($name, $email, $password){

	// 		print_r($name);
	// print_r($email);
	// print_r($password);
	// echo "string";

		try{
			$insert = $this->database->prepare("INSERT INTO `users`(`id`, `username`, `email`, `password`) VALUES (NULL,'$name','$email','$password')");
			$insert->execute();
			return true;
		}
		catch(PDOException $e){
	echo "".$e->getMessage();
	return false;
}

	}

	public function loginnow($email, $password){

	// print_r($email);
	// 	print_r($password);
		// exit();

		try{
			$test = $this->database->prepare("SELECT *FROM users WHERE email=:email");
			$test->execute(array(':email'=>$email));
			$row= $test->fetch(PDO::FETCH_ASSOC);

			if(($password==$row['password'])){
				echo "thanks";
				session_regenerate_id();
				$_SESSION["authorized"]=true;
				$_SESSION["sess_name"]=$row['username'];
				session_write_close();
			}
			return true;
		}
		catch(PDOException $e){
	echo "".$e->getMessage();
	return false;
	echo "sorry";
}

	}
}

?>