<?php
require ("connection.php");

if (isset($_POST['formsubmitted'])) 
{
    // Initialize a session:
    session_start();
    $error = array();//this array will store all error messages

    
    if (empty($_POST['e-mail'])) {//if the email supplied is empty
        //$error[] = 'You forgot to enter  your Email ';
    } else {


        //if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['e-mail'])) {
           
            $Email = $_POST['e-mail'];
        //} else {
             //$error[] = 'Your Email Address is invalid ';
        }


    


    if (empty($_POST['password'])) {
       // $error[] = 'Please Enter Your Password ';
    } else {
         $Password = md5($_POST['password']);

    }
    
       if (empty($error))//if the array is empty , it means no error found
    { 
        echo "ok";
  $query= "SELECT * FROM `usermaster` WHERE `email`='".mysql_real_escape_string($Email)."' AND `password`='".mysql_real_escape_string($Password)."'";
    $query_run=$pdo->query($query);
   $query_num_rows=$query_run->rowCount();
   if($query_num_rows==1)
   {
    $query_run->setFetchMode(PDO::FETCH_NUM);
    $row = $query_run->fetch();
    $user_id=$row[0];

     /* We are taking the result from the query that we have run,from row 0,and from coloumn id.
   BTW we need id so that we can set a session for the respective  id so that
   we can tell that the user has logged in.
   We can also fetch any data from database using $user_id
   */
   session_start();

   $_SESSION['user_id']=$Email;
   // storing $user_id in the session['user_id'] i.e. setting the session with $user_id.\


   header('Location: play/game.php'); //redirecting the user to game.php.
       
       /* OR $_SESSION = mysql_fetch_array($result_check_credentials, mysql_ASSOC);
            //Assign the result of this query to SESSION Global Variable */

            exit;

        }else
        { 
            
            $msg_error= 'Email address /Password is Incorrect';
        }

      }

     else {
        
        

echo '<div class="errormsgbox"> <ol>';
        foreach ($error as $key => $values) {
            
            echo '  <li>'.$values.'</li>';


       
        }
        echo '</ol></div>';

    }
    
    
    if(isset($msg_error)){


        echo '<div class="errormsgbox" >'.$msg_error.'</div>';
    }
    /// var_dump($error);


  } // End of the main Submit conditional.



?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Picaption</title>
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/login.css" />
        <link rel="stylesheet" type="text/css" href="css/register.css" />
        <style type="text/css">
        .errormsgbox{
    border: 1px solid;
    margin: 0 auto;
    padding:10px 5px 10px 50px;
    background-repeat: no-repeat;
    background-position: 10px center;
     font-weight:bold;
     width:450px;
        color: #D8000C;
    background-color: #FFBABA;
    background-image: url('img/error.png');
}

        </style>
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
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login">
                            <form  action="login.php" method="post" > 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="e-mail" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="hidden" name="formsubmitted" value="TRUE" />
                                    <input type="submit" value="Login" name="login_button"> 
								</p>
                                <p class="change_link">
									Not signed up yet ?
									<a href="./register.php" class="to_register">Register</a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>