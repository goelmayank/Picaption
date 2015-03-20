<?php 
session_start();
if(isset($_SESSION['USER'])){
unset($_SESSION['USER']);

	session_destroy();
	header("refresh:3;url=index.php");
	echo "<span style='font-family:calibri'>Logout successful ...wait..";
	
}else{
	header("refresh:3;url=login.php");
echo "Login first...";	
	
	}


?>