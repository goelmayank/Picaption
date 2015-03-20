<?php

session_start();

if (isset($_SESSION['id'])){
      echo "<script> window.location ='http://localhost/picaption-working/play/game.html' </script>";
}
if(!isset($_POST['username']) || !isset($_POST['password']) )
{
	echo "<script> window.location ='http://localhost/picaption-working/login.php' </script>";
    exit(0);
}
$username = $_POST['username'];
$password = $_POST['password'];

//SQL injection.
$username = stripslashes($username);
$password = stripslashes($password);


session_start();
$connection=mysql_connect("localhost","poetryclub","picaption15");
if(!$connection)
    die("error".mysql_error());
$dbname='apogee_2013';
mysql_select_db($dbname,$connection)or die("Error");

$query= " select * from auth_user where username = '$username' ;";
$result = mysql_query($query,$connection);
$res = mysql_fetch_array($result);
if( sha1(substr($res['password'],5,5).$password) == substr($res['password'],11) )
{
	//Verification success
	echo "You have been successfully logged in "."<br>". "<script> window.location ='./u/index.php' </script>"."<a href='/u/index.php'>Click here to continue</a>";
	$_SESSION['username'] = $username;
	$host = "localhost";// Host name
	$usr = "MYSQL_USERNAME";// Mysql username
	$pwd = "MYSQL_PASSWORD";// Mysql password
	$db = "apogee_picaption";
	mysql_connect("$host", "$usr", "$pwd") or die("Cannot connect to server! Please try again later.");
	mysql_select_db("$db");
	$uscheck = mysql_query('SELECT * FROM users WHERE username=\''.$username.'\'') or die(mysql_error());
	$row=mysql_fetch_array($uscheck);
	if ( $row['username'] == ''){
		mysql_query('INSERT INTO users ( username ) VALUES ( \''.$username.'\' )') or die(mysql_error());
	}
	mysql_close($connection2);
}
else
{
	echo "<script> window.location ='login.php' </script>";
        echo "Incorrect username or password"."<a href='./login.php'> Go to Login </a>";
        exit(0);
}
mysql_close($connection);
?>