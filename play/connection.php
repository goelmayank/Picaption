
<?php
try{

	$pdo=new PDO('mysql:dbname=apogee_poetry;host=localhost','root','');

}catch(PDOException $e){
	echo 'Connection Error, Try again';

	}
?>
