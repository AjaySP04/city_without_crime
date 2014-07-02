<html>
<html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <div id="templatmeo_wrapper">

    <div id="templatemo_header">
    
        <div id="site_title">
            <h1><a href="index.php" target="_parent">
                <img src="7.jpg" alt="City Portal" />
                <span>Welcome to SecureCity</span>
            </a></h1>
        </div> <!-- end of site_title -->
        
        <div id="header_right">
        
            <ul id="header_button">
                <li><a href="login.php"><img src="8.jpg" alt="home" /></a></li>
            
            </ul>
            
            <div class="cleaner"></div>
            
            <form action="#" method="get">
                <input type="text" value="Shoot here to nostalgia..!!" name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                <input type="submit" name="Search" value="Go" alt="Search" id="searchbutton" title="Search" />
            </form>
        
        </div>
        
    </div> 
        <div class="container">				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  method="post"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="usernamesignup" data-icon="u" > Your email or username </label>
                                    <input id="username" name="usernamesignup" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" name="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>
                        
                        
                         <div id="register" class="animate form">
                            <form  method="post"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="Full name"/>
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="Your Email"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="Password"/>
                                </p>
                                <p> 
                                    <label for="mobileno." class="uname" data-icon="u">Mobile no</label>
                                    <input id="usernamesignup" name="mobile" required="required" type="text" placeholder="Enter your contact on." />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="uname" data-icon="u">Address</label>
                                    <input id="emailsignup" name="address" required="required" type="text" placeholder="Full address" />
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up" name="signup"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>



<script type="text/javascript"> onclick('signup')alert("thanks for registering");</script>
<?php

require_once 'config.php';
if(isset($_REQUEST["Login"]))
{
    $uname=$_REQUEST['usernamesignup'];
    $pass=$_REQUEST['passwordsignup'];
    $qry="SELECT usernamesignup FROM userform WHERE usernamesignup='$uname' and passwordsignup='$pass'";
    //echo "hello";
    
    $res = mysql_query($qry);
    if($row=mysql_fetch_row($res))
    {  //echo "hello";
        setcookie("user",$row[0]);
        header("Location:dashboard.php");
    }
    else
    echo "Invalid username or password";
    }
    
    
    //signup form(inserting into database)
    if(isset($_POST["signup"]))
    {
        if(!empty($_POST['usernamesignup']) && !empty($_POST['passwordsignup']) && !empty($_POST['emailsignup']) && !empty($_POST['address']) && !empty($_POST['mobile']))
    
    {
      $username=$_POST['usernamesignup'];
      $password=$_POST['passwordsignup'];
      $email=$_POST['emailsignup'];
      $address=$_POST['address'];
      $mobile=$_POST['mobile'];
      
      $qry="insert into userform values('$username','$password','$email','$address','$mobile')";
      mysql_query($qry) or die(mysql_error());
      
      echo"<script>alert('Login from your username and password')</script>";
      //echo"<br>";
      //echo"<script>alert('Login from your username and password')</script>";
      }
      
      }
      
    
    
    

?> 
