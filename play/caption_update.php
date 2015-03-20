<?php 
session_start();
$_SESSION='Guest';
// code execute if user already logged in 
if(isset($_SESSION['USER'])){
	header("refresh:3;url=./game.php");
	echo "Already logged in or direct access denied";
	header("refresh:4;url=./game.php");
	exit;	
}


if(isset($_POST['submit1'])){
 require_once("connection.php");
	$caption = $_POST['caption1'];
		$caption= strip_tags($caption);
		$caption = mysql_real_escape_string($caption);
		if ($caption1 != "") {
			$_SESSION['pcount']++;
			$p++;
			$qy = "UPDATE users SET caption1= '$caption' WHERE username = '$username'";
			mysql_query($qy);
			alert("You have submited caption1!");
		}
}		
	if (isset($_POST['submit2'])) {
		$caption = $_POST['caption2'];
		$caption= strip_tags($caption);
		$caption = mysql_real_escape_string($caption);
		if ($caption1 != "") {
			$_SESSION['pcount']++;
			$p++;
			$qy = "UPDATE users SET caption2= '$caption' WHERE username = '$username'";
			mysql_query($qy);
			alert("You have submited caption2!");
		}
	}
	if (isset($_POST['submit3'])) {
		$caption = $_POST['caption3'];
		$caption= strip_tags($caption);
		$caption = mysql_real_escape_string($caption);
		if ($caption1 != "") {
			$_SESSION['pcount']++;
			$p++;
			$qy = "UPDATE users SET caption3= '$caption' WHERE username = '$username'";
			mysql_query($qy);
			alert("You have submited caption3!");
		}
	}
	if (isset($_POST['submit4'])) {
		$caption = $_POST['caption4'];
		$caption= strip_tags($caption);
		$caption = mysql_real_escape_string($caption);
		if ($caption1 != "") {
			$_SESSION['pcount']++;
			$p++;
			$qy = "UPDATE users SET caption4= '$caption' WHERE username = '$username'";
			mysql_query($qy);
			alert("You have submited caption4!");
		}
	}
	if (isset($_POST['submit5'])) {
		$caption = $_POST['caption5'];
		$caption= strip_tags($caption);
		$caption = mysql_real_escape_string($caption);
		if ($caption1 != "") {
			$_SESSION['pcount']++;
			$p++;
			$qy = "UPDATE users SET caption5= '$caption' WHERE username = '$username'";
			mysql_query($qy);
			alert("You have submited caption5!");
		}
		
	}
	if (isset($_POST['final_submit'])) {
		alert("Thanks for playing!");
		header("refresh:3;url=../your_caption.php"); 	
		echo "<span style='font-family :calibri'>Logging in </span>";
		}
?>