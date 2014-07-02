<?php

if (isset($_COOKIE['uname'])){
echo "Welcome :  ". $_COOKIE['uname']."<a href='logout.php'> logout </a>";

echo"<br/>"." login time: ".$_COOKIE['logintime'].".";


}
else{
    
    header("location:login.php");
}

?>


<html>

<head>

<title> Home Page for Admin</title>
<h2 align="center" >Welcome To the Server Handle Page For Administrator</h2>
</head>
<ul>

<li><a href="criminal_master_page.php">Criminal Data Entry Portal </a></li>
<li><a href="police_station_master.php">Police Station Entry Portal</a></li>
</ul>

</html>
