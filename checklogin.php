<?php 
session_start();
$_SESSION='Guest';
// code execute if user already logged in 
if(isset($_SESSION['USER'])){
header("refresh:3;url=index.php");
echo "Already logged in or direct access denied";
header("refresh:4;url=index.php");
exit;	
	}


if(isset($_POST['login_button'])){
 require_once("connection.php");
	$checkquery="select * from usermaster where email='{$_POST['login_username']}' and password='{$_POST['login_password']}'";
	
	//echo $checkquery;
$res=mysql_query($checkquery);	
if(mysql_num_rows($res)>0)
{
	$data=mysql_fetch_assoc($res);
	  
 
  	@ session_start();
  	$_SESSION['USER']=$data['user'];
   
   	header("refresh:3;url=play/game.php"); 	
   	echo "<span style='font-family :calibri'>Logging in </span>";
  	
  
 
	
	
	}
	else{
		header("refresh:3;url=login.php");
echo "<span style='font-family :calibri'>Username password not matched!</span><p></p>";

echo "<span style='font-family :calibri'>If the page doesn't refresh , </span><a href='login.php' style='color:steelblue;font-family:Calibri;text-decoration:none'>click here</a>";
exit;		}	
	
	
	}



?>