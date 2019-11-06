<?php 
//source: https://www.youtube.com/watch?v=FQaE2ZP2f9M&list=PL7HHGtOfs9rP5i0S8-SnTLMYeZHZ0zYZD
//database connection
//buildin function PDOException

try{
	$connect =new PDO("mysql:host=localhost;dbname=pdocrud","root","");
	echo "connected";
}
//catch er modhe jekono akti variable nite hobe
catch(PDOException $e){
	echo "".$e->getMessage();
}


?>
