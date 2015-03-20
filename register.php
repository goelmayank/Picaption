<?php 
session_start();
require ("connection.php");

$msg="";
if(isset($_POST['register_button'])){
    $email=$_POST['emailsignup'];
    $password=md5($_POST['passwordsignup']);
$query="INSERT INTO usermaster (user,email,password) values('{$_POST['usernamesignup']}','{$_POST['emailsignup']}','$password')";
$res=$pdo->exec($query);

if($res)
{
    $q="INSERT INTO  captions(email) VALUES('$email')";
    $pdo->exec($q);
header("refresh:3;url=login.php");
$msg="<span style='font-family:Calibri'>You have been successfully <b>registered</b>. You are now being redirected to the login page.</span>";

}

else{
$msg= "<span style='font-family:Calibri'>Error. Please try again.</span>";
}

}
?>    


<!DOCTYPE html>
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Picaption</title>
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/login.css" />
        <link rel="stylesheet" type="text/css" href="css/register.css" />
		</head>
    <body>
        <div class="container">
            <header>
                <h1>Picaption</h1>
               
				<p class="subline">Giving words to pictures</p>
				<p>by &#8212; <strong>Poetry Club</strong>  </p>
				<nav class="pc-links">
					<a href="./index.php">Home</a> &nbsp;
					<a href="./register.php">Register</a> &nbsp;
					<a href="./login.php">Login</a> &nbsp;
					<a href="http://www.facebook.com/bitspoetry">Follow us</a>
				</nav>
			</header>
            <section>				
                <div id="container_demo" >

                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" >
                             <form action="register.php" method="post"> 
                                <h1> Sign up </h1>                          
                                
                                 <?php
						echo $msg;                
                 ?>
                                
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input  name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input  name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input  name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up" name="register_button"> 
								</p>
                                <p class="change_link">  
									Already registered ?
									<a href="./login.php" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
					</div>
                </div>  
            </section>
        </div>
    </body>
</html>