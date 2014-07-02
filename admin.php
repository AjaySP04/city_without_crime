

<?php


 require_once"config.php";
if (isset($_REQUEST['send'])){
    
            if (isset($_REQUEST['send'])){
                $uname=$_POST['uname'];
                $pwd=$_POST['password'];
                
                $qry ="select uname from admin_login where uname='$uname' and password='$pwd' ";
                $res=mysql_query($qry) or die("ERROR :".mysql_error());
                
                if ($row=mysql_fetch_row($res)){
                    
                    setcookie("uname", $row[0]);
                    header("location:home.php");
                    setcookie("logintime",date("d/m/y ,h:i:s a"));
                       
                }
                else{
                    echo"<script>alert('<font color=red>Invalid Username or Password</font>');</script>";
                }
            }
        }


?>



<html>

<head>

<style>

@keyframes blink {  
    30% { color: red; }
    100% { color: black; }
}
@-webkit-keyframes blink {
    30% { color: red; }
    100% { color: black; }
    
}
.blink {
    -webkit-animation: blink .90s linear infinite;
    -moz-animation: blink .90s linear infinite;
    -ms-animation: blink .90s linear infinite;
    -o-animation: blink .90s linear infinite;
    animation: blink .90s linear infinite;
    margin: 10px 0px 10px 0px;
    padding : 0px;
}

</style>

<title>Login For Crime free City Portal</title>
</head>


<script type="text/javascript">

window.history.forward(0);

</script>



<body>


<a href="index.php">HOME PAGE</a>
<form method="post">
<table align="center" border=1>
<h2 align="center" class="blink">Admin Login Panel!!</h2>

<tr>
<td> User Name : </td><td><input type="text" name="uname" size="20" /></td>

</tr>
<br />
<tr>
<td> Password :</td><td><input type="password" name="password" /></td>
</tr>
<tr> <td><input type="submit" name="send" value="login" />  </td> </tr>

</table>


</form>


</body>
</html>
