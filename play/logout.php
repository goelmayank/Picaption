<?php
	ob_start();
    session_start();
    if(!isset($_SESSION['user_id'])){
         header("Location: ../login.php");
    }
  
$_SESSION['user_id']='';
//session_unset();
session_destroy();

header("Location: ../login.php");
?>