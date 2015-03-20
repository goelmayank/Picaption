<?php
session_start();
mysql_connect("localhost", "MYSQL_USERNAME", "MYSQL_PASSWORD");
mysql_select_db("apogee_picaption");
//change to relevant db
$username = $_SESSION['username'];
/*echo $username; //debug, ob
 $password=$_SESSION['password'];*/
$askdb = "SELECT * FROM users WHERE username = '{$username}' ";
$valid = mysql_fetch_array(mysql_query($askdb));
$_SESSION['pcount'] = $valid['photocount'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
		<link rel="shortcut icon"  type="image/png" href="../images/favicon.png" />
		<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700'/>
		<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,400italic'/>
		<script type="text/javascript" src="../scripts/global.js"></script>
		<title>Home</title><!--Come up with a suitable title not clashing with 'Home :: Picaption'-->
	</head>
	<style>
		p#rules {
			font-size: 18px;
			margin-bottom: 0px;
		}
		.menuElement#yoMama a {
			color: #f0f0f0 !important;
			text-decoration: none;
			text-shadow: 0 0 0.5em #00000F, 0 0 0.5em #0000F0;
		}
		a {
			text-decoration: none;
			color:#f0f0f0;
		}
		a:hover {
			color: rgba(237, 160, 14, 1);
			transition: color 0.25s linear;
			-webkit-transition: color 0.25s linear;
			-o-transition: color 0.25s linear;
		}
		a:visited {
			color: #f0f0f0;
			text-decoration: none;
		}
	</style>
	<body>
		<div class="outer">
			<div class="menu">
				<div class="inner">
					<span class="menuElement" id="logo">Picaption</span>
					<span class="menuElement" id="yoMama"><a href="index.php">About</a></span>
					<span class="menuElement" id="startTheGame"><a href="play.php">Play</a></span>
					<span class="userinfo" id="pls2kill"> <a onclick="return confirm('Are you sure you want to log out?');" href="logout.php"><img alt='' src="../images/logout.png"></a> </span>
					<span class="userinfo" id="userthingy"><a href="index.php"><?php echo $username; ?></a></span>
				</div>
			</div>
			<div class="content">	
					 <p id="rules">Congratulations <?php echo $username; ?>!<br/> You have successfully captioned all pictures. The results will be out shortly.<br/><a href="./logout.php" onclick="return alert('Thanks for playing!');">You can logout now. </a><br/><a href=" www.facebook.com/bitspoetry ">Do like us on Facebook for results, hints and updates.</a></p>
			</div>
		</div>
	</body>
</html>